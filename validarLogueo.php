<?php
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
 
include("conexion.php");

$con = conectar(); 

$sql = "SELECT * FROM administrador WHERE nombreAdmin = '$usuario' and passAdmin = '$pass' ";
$resul = mysqli_query($con, $sql);

$fila = mysqli_fetch_array($resul); 
var_dump($sql); 
var_dump($fila);
if($fila['idrol']>0) {
    session_start();
    $_SESSION['nombreUsuario'] = $usuario; 
    $_SESSION['idusuariologueado'] = $fila['idrol'];

    header("location:formulario.php");
}
if($fila==null){
  header("location:index.php");
}

    /*if($fila['idrol']==1 || $fila['idrol']==2 ){        
      session_start();
      $_SESSION['nombreUsuario'] = $usuario; 
      $_SESSION['idusuariologueado'] = $fila['idrol'];
      
      header("location:formulario.php");
    }
    if($fila['idrol']==3) {
      header("location: index.php");
      echo "Usuario inhabilitado";
    }
    if($fila['idrol'].lenght<1) {
      header("location: index.php");
      echo "Datos incorrectos";
    }*/

    mysqli_free_result($resul);
    mysqli_close($con);

?>
