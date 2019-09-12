<?php include('../includes/header.php');?>
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
            <div class="col-md-6">
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
                              
                              
                             <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Update</button></div>
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
        <?php include('../includes/footer.php');?>
  