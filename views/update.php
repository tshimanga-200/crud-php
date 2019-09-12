<?php include('../includes/header.php');?>
<?php
//inclusion du fichier de la connection
include('../config/connection.php');
  $id = htmlspecialchars($_GET['id']);
  //selection de l'enregistrement à modifier
  $update = $pdo->prepare('SELECT * FROM student WHERE id = ?');
  $update->execute(array($id));
  $result = $update->fetch();
  $nom = $result['nom'];
  $postnom = $result['postnom'];
  $promotion = $result['promotion'];
  $universite = $result['universite'];
  //soumission du formulaire
    if(isset($_POST['submit'])){
        if(isset($_POST['nom']) && $_POST['nom']){
          //modification du nom
            $update_nom = $pdo->prepare("UPDATE student SET nom = ? WHERE id = ?");
            $update_nom->execute(array($_POST['nom'],$id));
            header('Location: voir.php');
      }else{
          $error = "Veuillez saisir votre nom";
      }

      if(isset($_POST['postnom']) && $_POST['postnom']){
        //modification du postnom
        $update_nom = $pdo->prepare("UPDATE student SET postnom = ? WHERE id = ?");
        $update_nom->execute(array($_POST['postnom'],$id));
        header('Location: voir.php');
      }else{
          $error = "Veuillez saisir votre postnom";
      }

      if(isset($_POST['promotion']) && $_POST['promotion']){
        //modification du promotion
        $update_nom = $pdo->prepare("UPDATE student SET promotion = ? WHERE id = ?");
        $update_nom->execute(array($_POST['promotion'],$id));
        header('Location: voir.php');
      }else{
          $error = "Veuillez saisir votre promotion";
      }

      if(isset($_POST['universite']) && $_POST['universite']){
        //modification du nom de l'université
        $update_nom = $pdo->prepare("UPDATE student SET universite = ? WHERE id = ?");
        $update_nom->execute(array($_POST['universite'],$id));
        header('Location: voir.php');
      }else{
          $error = "Veuillez saisir votre université";
      }
    }
?>
        <div class="row">
            <div class="col-md-6">
               <div class="row">
                    <div class="col-md-12">
                        <h1>Update student</h1>
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
                                <input type="text" name="nom" class="form-control" value="<?=$nom;?>">
                              </div>
                              <div class="form-group">
                                <input type="text" name="postnom" class="form-control" value="<?=$postnom;?>">
                              </div>
                              <div class="form-group">
                                <input type="text" name="promotion" class="form-control" value="<?=$promotion;?>">
                              </div>
                              <div class="form-group">
                                <input type="text" name="universite" class="form-control" value="<?=$universite;?>">
                              </div>                        
                             <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Update</button></div>
                      </form>
            </div>
        </div>
        <?php include('../includes/footer.php');?>
  