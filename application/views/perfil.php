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
                  <a href="index.html">Inicio</a>
                  <a href="generic.html">Recetas</a>
                  <a href="<?php echo base_url('index.php/user/login_view');?>">Agregar</a>
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
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="section-title text-center">
                <h3>Bienvenid@ <?php echo $_SESSION['name']; ?></h3>
            
              </div>
            </div>
          </div>
          <div class="active-works-carousel mt-40">
            <div class="item">
              <div class="thumb" style="background: url(../../img/logo1.png); width: 50%"></div>
              
            </div>
            <div class="item">
              <div class="thumb" style="background: url(../../img/g8.jpg);"></div>
            
            </div>
            <div class="item">
              <div class="thumb" style="background: url(../../img/inc.jpg);"></div>
             
            </div>
            <div class="item">
              <div class="thumb" style="background: url(../../img/chef.jpg);"></div>
             
            </div>
            <div class="item">
              <div class="thumb" style="background: url(../../img/platillos.png);"></div>
            
            </div>
          </div>
        </div>
      </section>
      


      <section class="footer-widget-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="single-widget d-flex flex-wrap justify-content-between">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="lnr lnr-pushpin"></span>
                </div>
                <div class="desc">
                  <h6 class="title text-uppercase">Dirección</h6>
                  <p>1 A.P. 10 y 128 Avenida Tecnológico <br> Villa de Álvarez, 28976, <br> Villa de Álvarez, Col.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-widget d-flex flex-wrap justify-content-between">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="lnr lnr-earth"></span>
                </div>
                <div class="desc">
                  <h6 class="title text-uppercase">Correo electronico</h6>
                  <div class="contact">
                    <a href="mailto:14460264@itcolima.edu.mx">14460264@itcolima.edu.mx</a> 
                    <a href="mailto:14460266@itcolima.edu.mx">14460266@itcolima.edu.mx</a> 
                    <a href="mailto:14460268@itcolima.edu.mx">14460268@itcolima.edu.mx</a> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-widget d-flex flex-wrap justify-content-between">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="lnr lnr-phone"></span>
                </div>
                <div class="desc">
                  <h6 class="title text-uppercase">Numero telefonico</h6>
                  <div class="contact">
                    <a href="tel:1545">044  312 264 51 44</a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer>
          <div class="container">
            <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
              <div class="logo">
                <a href="index.html"><img src="img/f-logo.png" alt=""></a>
              </div>
              <div class="copy-right-text">Copyright &copy; 2017  |  All rights reserved. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
              <div class="footer-social">
                <!--<a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>-->
              </div>
            </div>
          </div>
        </footer>
      </section>
      <!-- End Footer Widget Area -->

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
