<?php  
  $x=count($recetas);
  $z=count($ing);
   //print_r($x);
   $y=$x+1;
   /*print_r($recetas);
   print_r($ing);*/
   $i=1;
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Inicio de sesión</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="../../css/linearicons.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/main.css">
  </head>
  <body>
    <div class="main-wrapper-first">
      <header>
      
      </header>
    </div>

    <div class="main-wrapper">
      <section class="footer-widget-area">
        <div class="container">


  <div class="login-panel panel panel-success">
                <div class="panel-heading ">
                <center>
                    <h4 class="panel-title text-white">Registro</h4>
                    <br>
                </div>
                </center>
                <div class="panel-body">
              <div class="panel-body">

                  
                    <center>
                      <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="d-flex  justify-content-center alert alert-success" >
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div  class="d-flex  justify-content-center alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
                      <form role="form" method="post" action="receta_nueva">
                        <div class="d-flex  justify-content-center">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" name="idRecipe" type="hidden" value="<?php $y ?>">
                                  <input class="form-control" placeholder="Nombre" name="nameRecipe" type="text" autofocus>
                              </div>
                              <div class="col form-group">
                                <input type="text" class="form-control" name="time" placeholder="Tiempo">
                              </div>
                              <div class="col form-group" >
                                <label>Categoría</label>
                                <select class="form-control" name="category">
                                  <option value="1">Fácil</option>
                                  <option value="2">Medio</option>
                                  <option value="3">Dificil</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <?php 
                                  foreach ($ing as $key => $value) { ?>
                                    <input class="form-control" type="checkbox" name="ingredientes" value="<?php echo $value['idIngredient']; ?>"><?php echo $value['nameIngredient']; ?>
                                    
                                <?php  }
                                ?>
                              </div> 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Pasos..." name="steps" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Descripción corta" name="description" type="text" value="">
                              </div>
                              <input class="primary-btn d-inline-flex align-items-center" style="color:white" type="submit" value="Agregar receta" name="register" >

                          </fieldset>
                          </div>  
                      </form>
                      <br>
                    </center>
                  </div>

               </div>
               <!---->
            </div>
              <!---->
         </div>
    




        <footer>
          <div class="container">
            <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">

              <div class="logo">
                <a href="index.html"><img src="img/f-logo.png" alt=""></a>
              </div>
              <div class="copy-right-text">Copyright &copy; 2017  |  All rights reserved. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
            </div>
          </div>
        </footer>
      </section>
      <!-- End Footer Widget Area -->

    </div>




    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
