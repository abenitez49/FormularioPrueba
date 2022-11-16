<?php
session_start();

if (!isset( $_SESSION['nombreUsuario'])) {
  header("Location: index.php");
}else{
 // print_r ($_SESSION);
}
include("conexion.php");
include("navegador.php");

$con = conectar();
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/alertify.css">
  </head>
  <body>
    <div class="class container">
        <div class="class row"></div>
          <div class="class col-md-4">
              <form action="insertar.php" id="datosInput" method ="POST">
              <h2>Bienvenido: <?php echo $_SESSION['nombreUsuario'] ?> <br> </h2>
              <input hidden='' id='idusuariologueado' value="<?php echo $_SESSION['idusuariologueado'] ?>"> </input>
              <p>Crear nuevo usuario</p>
              <label>Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control input-sm">
              <label>rol:</label>
              <input type="text" name="rol" id="rol" class="form-control input-sm"><br>
              <button  type="button" class="btn btn-success col-4" id="guardarNuevo" data-toggle="modal" data-target="#modalNuevo">Nuevo</button>            
              
              </form>
          </div>
          <br> 
          <h4>Lista de usuarios agregados:</h4> <hr>
        <div id="tabla"></div>

<!-- Modal editar -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" id="id" name="">
      <label>Nombre:</label>
        <input type="text" name="" id="nombreUsuario" name="nombreUsuario" class="form-control input-sm">
        <label>rol:</label>
        <input type="text" name="" id="rolUsuario" name="rolUsuario"  class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="actualizaDatos" data-dismiss="modal">Actualizar</button>        
      </div>
    </div>
  </div>
</div>

<!-- Botones -->
    </div>
    <script src="js/funciones.js"></script> 
    <script src="js/jQuery 3.6.0.js"></script> 
    <script src="js/alertify.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>

<script type="text/javascript">
      $(document).ready(function(){
        $('#tabla').load('tabla.php');
        console.log('inicio desde formulario');

        $('#guardarNuevo').click(function(){      
          var nombre= $('#nombre').val();
          var rol= $('#rol').val();
          if (nombre.length<1 || rol.length<1) {
            alertify.error('Complete todos los campos para agregar usuario');
          } else {
            agregarDatos(nombre, rol);
          }
        });
        $('#actualizaDatos').click(function(){      
          var nombreUsuario= $('#nombreUsuario').val();
          var rolUsuario= $('#rolUsuario').val();
          if (nombreUsuario.length<1 || rolUsuario.length<1) {
            alertify.error('No puede dejar campos vacios.');
          }else{
            actualizarDatos();
          }  
        });
      }); 
</script>
<?php include("whatsappapi.php") ?> 
