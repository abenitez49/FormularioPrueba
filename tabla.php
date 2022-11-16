
<?php
include("conexion.php");
$con = conectar();
?>
<table id="datostabla" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Rol</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    $query = mysqli_query($con, $sql);
      while($row = mysqli_fetch_array($query)){   
        $datos=  $row[0]."||".
                 $row[1]."||".
                 $row[2];
    ?>
    <tr>
        <td><?php echo $row['0']?></td>
        <td><?php echo $row['1']?></td>
        <td><?php echo $row['2']?></td>
        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregarFormularioEditar('<?php echo $datos ?>')" >
                Editar
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" onclick="pregunta('<?php echo $row['0'] ?>')">
                 Eliminar
          </button>
        </td>        
    </tr>
    <?php
      } 
    ?>
  </tbody>
</table>
