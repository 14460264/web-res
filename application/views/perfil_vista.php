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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
     <link rel="stylesheet" href="../../css/estilos.css">
  </head>
  <body>
    <div class="main-wrapper">
      <header>
        <div class="container">
          <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
              <div class="logo">
               <!-- <a href="#"><img src="../../img/logo1.png" style="width:20%;" alt=""></a>-->
              </div>
              <div class="main-menubar d-flex align-items-center">
                <nav class="hide">
                  <a href="<?php echo base_url('index.php/user/perfil_inicio');?>">Inicio</a>
                  <a href="generic.html">Recetas</a>
                  <a href="<?php echo base_url('index.php/user/agregar');?>">Agregar</a>
                  <a href="<?php echo base_url('index.php/user/vista_perfil');?>">Perfil</a>
                  <a href="<?php echo base_url('index.php/user/user_logout');?>">Salir</a>
                </nav>
                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
  
    <div class="main-wrapper">

      <!-- Start Amazing Works Area -->
      <section class="amazing-works-area">       
        ​ <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                    <!-- Grid column -->
              <div class="col-lg-5 text-center text-lg-left content">

                <center>
                 <br><br>
                <img  class="img-fluid " src="../../img/perfil.png" style="width:20%;" alt="perfil">
                  <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo $_SESSION['name']; ?></h2>

            <!-- Section description -->
                <p class="lead grey-text text-center w-responsive mx-auto mb-5"><?php echo $_SESSION['email']; ?></p>
                </center>
              </div>
              </th>
              <th>
                       <!-- Grid column -->
          <div class="select_box">
              <!-- Grid column -->
              <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Todas</h5>
                    
                    <!--inicio-->
                    <label class="switch">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
              

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Baja</h5>
                   
                     <label class="switch">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!--Grid row-->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Media</h5>
                   
                     <label class="switch">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
                  </div>
                  <!-- Grid column -->

                </div>
                <!--Grid row-->
            <!--Grid row-->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Dificil</h5>
                     <label class="switch dificultad">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
                  </div>
                  <!-- Grid column -->
                </div>
                <!--Grid row-->
              </div>
              <!--Grid column-->
              </th>
              <th>       <!-- Grid column -->
          <div class="select_box">
              <!-- Grid column -->
              <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Todas</h5>
                    
                    <!--inicio-->
                    <label class="switch">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
              

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Baja</h5>
                   
                     <label class="switch">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!--Grid row-->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Media</h5>
                   
                     <label class="switch">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
                  </div>
                  <!-- Grid column -->

                </div>
                <!--Grid row-->
            <!--Grid row-->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-1">
                    <i class="fa fa-mail-forward fa-lg indigo-text"></i>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-xl-10 col-md-11 col-10">
                    <h5 class="font-weight-bold mb-3">Dificil</h5>
                     <label class="switch dificultad">
                     <input type="checkbox" name="">
                     <span class="slider round"></span>
                    </label>
                  </div>
                  <!-- Grid column -->
                </div>
                <!--Grid row-->
              </div>
              <!--Grid column--></th>
            </tr>
          </thead>
        </table>  
          <!-- Section: Features v.3 -->
          <section class="my-5">


          </div>
          </section>
          <!-- Section: Features v.3 -->              
        </section>
    </div>




    <script src="../../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../../js/vendor/bootstrap.min.js"></script>
    <script src="../../js/jquery.ajaxchimp.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.nice-select.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/main.js"></script>
  </body>
</html>
