<?php
include("conexion.php");

$con = conectar();

$opcion=$_POST['opcion'];

switch ($opcion) {
    case 'registro':
        $nuevousuario= $_POST['nuevousuario']; $nuevopassword=  $_POST['nuevopassword']; 
        $sql = "INSERT INTO administrador (`nombreAdmin`, `passAdmin`) VALUES ('$nuevousuario', '$nuevopassword') ";
        echo $query = mysqli_query($con, $sql);

    break;
    case 'actualizaradmin':
        $valorcheck=  $_POST['valorcheck']; $idadmin=  $_POST['idadmin']; $nombreAdmin=  $_POST['nombreAdmin'];
        $sql = "UPDATE administrador SET nombreAdmin='$nombreAdmin', superadmin = '$valorcheck' WHERE `idrol` = '$idadmin' ";
        echo $query = mysqli_query($con, $sql);

    break;
    case 'actualizarusuario': //retornar true o false que edito correctamente!!
        $id = $_POST['id']; $nombre=  $_POST['nombre']; $rol=  $_POST['rol']; //variables recibidas para usar, optimizar a futuro
        $sql = "UPDATE usuarios SET nombre='$nombre', rol = '$rol' WHERE id='$id' ";
        echo $query = mysqli_query($con, $sql);

    break;
    case 'eliminarusuario':
        $id = $_POST['id'];
        $sql = "DELETE FROM usuarios WHERE id=$id";
        echo $query = mysqli_query($con, $sql);

    break;
    case 'insertar':
        $nombre=  $_POST['nombre']; $rol=  $_POST['rol'];
        $sql = "INSERT INTO  usuarios (nombre, rol) VALUES ('$nombre', '$rol')";
        echo $query = mysqli_query($con, $sql);

    break;
    case 'limitar':
        $limite=  $_POST['limite'];
        $query = $con->query("SELECT idrol, nombreAdmin, superAdmin, CASE WHEN superadmin=0 THEN 'No' WHEN superadmin=1 THEN 'Si' END AS Admin FROM administrador ORDER BY idrol DESC LIMIT $limite");
        if($query->num_rows > 0){
            $userData = $query->fetch_all(MYSQLI_ASSOC);
            $data['status'] = 'ok';
            $data['result'] = $userData;
        }else{
            $data['status'] = 'err';
            $data['result'] = '';
        }
        echo json_encode($data);
        
    break;
    case 'cargarmodal':
        $idrol=  $_POST['idrol']; $superadmin=  $_POST['superadmin'];
        $query = $con->query("SELECT * FROM administrador WHERE idrol=$idrol");

        if($query->num_rows > 0){
            $userData = $query->fetch_all(MYSQLI_ASSOC);
            $data['status'] = 'ok';
            $data['result'] = $userData;
        }else{
            $data['status'] = 'err';
            $data['result'] = '';
        }
        echo json_encode($data);
        
    break;
}

?>
