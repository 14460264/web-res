<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" media="screen" title="no title">
<link rel="stylesheet" href="css/estilos.css">


  </head>
  <body>

<span style="background-color:red;">
<center class="div-rl">
<div class="div-lr">
  <div class="container " >
      <div class="row" >
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-success" >
                  <div class="panel-heading">
                      <h4 class="panel-title">Registro</h4>
                      <br>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                              </div>


                              <input class="btn btn-lg btn-secondary btn-block" type="submit" value="Registrar" name="register" >

                          </fieldset>
                      </form>
                      <center><a style="color: black" href="<?php echo base_url('user/login_view'); ?>">Ingresar</a></center>
                  </div>
              </div>
          </div>
      </div>
  </div>

</date>


</center>


</span>




  </body>
</html>
