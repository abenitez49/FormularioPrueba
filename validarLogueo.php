<?php
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
 
include("conexion.php");

$con = conectar(); 

$sql = "SELECT * FROM administradores WHERE nombreAdmin = '$usuario' and passAdmin = '$pass' ";
$resul = mysqli_query($con, $sql);

$fila = mysqli_fetch_array($resul); 
var_dump($sql); 
var_dump($fila);
if($fila['id']>0) {
    session_start();
    $_SESSION['nombreUsuario'] = $usuario; 
    $_SESSION['idusuariologueado'] = $fila['id'];

    header("location:formulario.php");
}
if($fila==null){
  header("location:index.php");
}

    /*if($fila['id']==1 || $fila['id']==2 ){        
      session_start();
      $_SESSION['nombreUsuario'] = $usuario; 
      $_SESSION['idusuariologueado'] = $fila['id'];
      
      header("location:formulario.php");
    }
    if($fila['id']==3) {
      header("location: index.php");
      echo "Usuario inhabilitado";
    }
    if($fila['id'].lenght<1) {
      header("location: index.php");
      echo "Datos incorrectos";
    }*/

    mysqli_free_result($resul);
    mysqli_close($con);

?>
