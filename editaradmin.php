<?php

include("conexion.php");
include("navegador.php");
$con = conectar();
?>

<!doctype html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/alertify.css">
  </head>
  <body>

    <!-- moda editar admin -->
    <div class="modal fade" id="modaeditarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="text" hidden="" id="idadmin">
            <label>Nombre:</label>
            <input type="text" id="nombreAdmin" class="form-control input-sm"> <br>
            <p>Super Usuario</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="idchecksuperadmin">
                <label class="form-check-label" for="flexRadioDefault1">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="idchecksuperadminNO" checked>
                <label class="form-check-label" for="flexRadioDefault2">No</label>
            </div>
        </div>
        <div class="modal-footer">
            <a onclick="actualizarDatosAdmin()" type="button" class="btn btn-info" id="btnactualizaradmin" data-dismiss="modal">Actualizar</a>       
            <a onclick="" type="button" class="btn btn-info" data-dismiss="modal">Descartar cambios</a>     
        </div>
        </div>
    </div>
    </div>
    
    <div  class="container">
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width:150px">
                <option value="">Elija la cantidad</option>    
                <option value="2">2</option>
                <option value="5">5</option>
                <option value="10">10</option> 
                <option value="1000">Todos</option> 
            </select>
        </div>
        <!-- aca va tabla !-->
        <h4>Lista de administradores:</h4> <hr>
        <div class="table table-striped">
            <div  id="tablaadministradores"></div>
        </div>

        <!--<nav aria-label="Page navigation example">
            <ul class="pagination">

            </ul>
        </nav>!-->

    </div>
    

<script src="js/funciones.js"></script> 
<script src="js/jQuery 3.6.0.js"></script> 
<script src="js/alertify.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
        console.log('inicio desde editar admin');
        //$('#maxRows').val(2)
        $('#maxRows').on('change', function () {    
        let limite = $('#maxRows').val();
        var cadena = {"limite": limite, "opcion" : 'limitar'}            
            $.ajax({
                type: "POST",
                url: "consultas.php",
                data:cadena,
                success:function(data){
                    var dataparseado = JSON.parse(data);
                    //console.log(dataparseado.status);
                    if(dataparseado.status == 'ok'){
                        //console.log('retorno correcto a peticion');
                        //console.log(dataparseado.result.length);
                        for (let i = 0; i < dataparseado.result.length; i++) {
                            const element = dataparseado.result[i];
                            let vartabla = " <table id='datostablaadmin' class='table table-striped'> ";
                            vartabla += "     <thead>  ";
                            vartabla += "         <tr> ";
                            vartabla += "         <th scope='col'>ID</th> ";
                            vartabla += "         <th scope='col'>NOMBRE</th> ";
                            vartabla += "         <th scope='col'>ADMIN</th> ";
                            vartabla += "         </tr> ";
                            vartabla += "     </thead> ";
                            vartabla += " <tbody> ";
                            for (let i = 0; i < dataparseado.result.length; i++) {
                                const element = dataparseado.result[i];
                                vartabla += " <tr> ";
                                vartabla += "     <td>"+element.id+"</td> ";
                                vartabla += "     <td>"+element.nombreAdmin+"</td> ";
                                vartabla += "     <td>"+element.Admin+"</td> ";
                                vartabla += "<td>";
                                //enviar correctamente como array fila seleccionada!
                                var obj = {1: 11, 2: 22};
                                var arr =$.map(element, function(value) {
                                            return [value];
                                        });
                                console.log(arr);
                                na1= [ arr[0], arr[2] ];
                                na2= arr[2];
                                
                                //console.log(na1);
                                
                                vartabla += "    <button onclick='agregarFormularioEditarAdmin("+na1+")' class='btn btn-info glyphicon glyphicon-pencil' data-toggle='modal' data-target='#modaeditarusuario'>";
                                vartabla += "        Editar";
                                vartabla += "    </button>";
                                vartabla += "</td>";
                                vartabla += " </tr> ";

                                $('#editar'+na1).on('click', function () { 
                                    console.log('clickeaste el id '+arr['0'] );
                                });
                            }
                            vartabla += "  </tbody> </table>";
                            $('#tablaadministradores').html(vartabla);
                        }
                    }else{
                        console.log('error en el retorno de la consulta');
                    } 
                  
                } 
            });
        });
        
    });
</script>

<?php include("whatsappapi.php") ?> 
