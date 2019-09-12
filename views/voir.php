<?php include('../config/connection.php');
    $get = $pdo->query('SELECT * FROM student');
?>
<?php include('../includes/header.php');?>
<div class="row">
    <div class="col-md-offset-3 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>List of student</h1>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>NOM</td>
                            <td>POSTNOM</td>
                            <td>PROMOTION</td>
                            <td>UNIVERSITE</td>
                            <td>ACTION</td>
                        </tr>
                    </thead>
                    <tbody>
                       <?php while($student = $get->fetch()){ ?>
                        <tr>
                            <td><?=$student['nom'];?></td>
                            <td><?=$student['postnom'];?></td>
                            <td><?=$student['promotion'];?></td>
                            <td><?=$student['universite'];?></td>
                            <td>
                                <a href="delete.php?id=<?=$student['id'];?>" class="btn btn-primary">DELETE</a>
                                <a href="update.php?id=<?=$student['id'];?>" class="btn btn-primary">UPDATE</a>
                            </td>
                        </tr>
                       <?php ;}?>
                    </tbody>
                </table>
                 <div>
                   <a class="btn btn-primary" href="../index.php">Ajouter</a>
                 </div>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php');?>