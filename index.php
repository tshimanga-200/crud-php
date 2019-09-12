<?php
include('config/connection.php');
if(isset($_POST['submit'])){
    if(isset($_POST['nom']) && $_POST['nom']){
        if(isset($_POST['postnom']) && $_POST['postnom']){
            if(isset($_POST['promotion']) && $_POST['promotion']){
                if(isset($_POST['universite']) && $_POST['universite']){

                    $nom = htmlspecialchars($_POST['nom']);
                    $postnom = htmlspecialchars($_POST['postnom']);
                    $promotion = htmlspecialchars($_POST['promotion']);
                    $universite = htmlspecialchars($_POST['universite']);

                    $insert = $pdo->prepare('INSERT INTO student (nom,postnom,promotion,universite) VALUES (?,?,?,?)');
                    $insert->execute(array($nom,$postnom,$promotion,$universite));
                    $succe = "Votre enregistrement à reussit";
                }else{
                    $error = "Veuillez entrez le nom de votre université";
                }
            }else{
                $error = "Determiner votre promotion svp";
            }
        }else{
            $error = "Veuillez saisir votre postnom";
        }
    }else{
        $error = "Veuillez saisir votre nom";
    }
}
?>
<?php include('includes/header.php');?>
        <div class="row">
            <div class="col-md-6">
               <div class="row">
                    <div class="col-md-6">
                        <h1>Add student</h1>
                    </div>
                    <div class="col-md-6">
                       <a href="views/voir.php" class="btn btn-primary">View all student</a>
                    </div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                         <?php
                            if(isset($error)){
                              echo "<div class=\"alert-danger\">$error</div>";
                            }else{
                              echo "<br>";
                            }
                          ?>
                            <form action="" method="post" role="form" class="contactForm">
                              <div class="form-group">
                                <input type="text" name="nom" class="form-control" id="name" placeholder="*Votre nom">
                              </div>
                              <div class="form-group">
                                <input type="text" name="postnom" class="form-control" id="name" placeholder="*Votre postnom">
                              </div>
                              <div class="form-group">
                                <input type="text" name="promotion" class="form-control" id="name" placeholder="*Votre promotion">
                              </div>
                              <div class="form-group">
                                <input type="text" name="universite" class="form-control" id="name" placeholder="*Votre université">
                              </div>
                              
                              
                             <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit</button></div>
                            </form>
                            <?php
                            if(isset($succe)){
                              echo "<div class=\"alert-success\">$succe</div>";
                            }else{
                              echo "<br>";
                            }
                            ?>
            </div>
        </div>
        <?php include('includes/footer.php');?>
  