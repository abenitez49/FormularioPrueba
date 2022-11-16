<?php session_start(); ?> 
<br> <br>
<div class="container">
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Logueo</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/alertify.css">

    </head>
    <body>

    <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">Registrarse</div>

                      <div class="card-body">
                          <form action="validarLogueo.php" method="POST">

                              <div class="row mb-3">
                                  <label class="col-md-4 col-form-label text-md-end">Usuario</label>

                                  <div class="col-md-6">
                                      <input id="nuevousuario" type="Text" class="form-control " name="usuario" value=""  autofocus>
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                                  <div class="col-md-6">
                                      <input id="nuevopassword" type="password" class="form-control" name="password" required autocomplete="current-password">
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                                  <div class="col-md-6">
                                      <input id="repetidopassword" type="password" class="form-control" name="password" required autocomplete="current-password">
                                  </div>
                              </div>

                              <div class="row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <a class="btn btn-info" onclick="registro()" role="button">Registrarme</a>
                                      <a href="index.php" class="btn btn-success col-md-4 col-form-label text-md-end"" role="button">Iniciar sesion</a>
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <script src="js/funciones.js"></script> 
      <script src="js/jQuery 3.6.0.js"></script> 
      <script src="js/alertify.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
  </html>
  <?php include("whatsappapi.php") ?> 
</div>