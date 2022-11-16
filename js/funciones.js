function agregarDatos(nombre, rol){
    var cadena = {"nombre": nombre,"rol": rol, "opcion" : 'insertar'}            
    $.ajax({
        type: "POST",
        url: "consultas.php",
        data:cadena,   
        success:function(r){
            console.log(r);
            if (r==1) {
                $('#tabla').load('tabla.php');
                alertify.success('Inserto correctamente usuario');
            } else {
                console.log(r);
            }
        }  
    });
    datosInput.reset();
}
function agregarFormularioEditar(datos){  //agrega el valor de la fila a los input para editar
    console.log(datos);
    d=datos.split('||');
   // console.log(d);
    $('#id').val(d[0]);
    $('#nombreUsuario').val(d[1]);
    $('#rolUsuario').val(d[2]);  
}
function agregarFormularioEditarAdmin(idrol, superadmin){   //agrega el valor de la fila a los input para editar
    //var datos = JSON.parse(datos);

    console.log('desde funcion '+idrol, superadmin);

    var cadena = {"idrol" : idrol, "superadmin" : superadmin, "opcion" : 'cargarmodal' }
    $.ajax({
        type: "POST",
        url: "consultas.php",
        data:cadena,
        success:function(data){
            //console.log(data);
            var dataparseado = JSON.parse(data);
            $('#idadmin').val(dataparseado.result[0]['idrol'] );
            $('#nombreAdmin').val(dataparseado.result[0]['nombreAdmin'] );

            //asignar check correcto de super admin
            if ( dataparseado.result[0]['superadmin'] == 1 ) {
                $('#idchecksuperadmin').prop("checked", true);
                console.log('es si');
            } else {
                $('#idchecksuperadminNO').prop("checked", true);
                console.log('es no');
            }
        }     
    });

}
function actualizarDatos(){ //actualiza datos de usuario
    id=$('#id').val();
    nombre=$('#nombreUsuario').val();
    rol=$('#rolUsuario').val();
    var cadena = {"id" : id, "nombre" : nombre, "rol" : rol, "opcion" : 'actualizarusuario' }  
    $.ajax({
        type: "POST",
        url: "consultas.php",
        data:cadena,
        success:function(r){
            console.log(r);
            if (r==1) {
                $('#tabla').load('tabla.php');
                alertify.success('Editado correctamente');
            } else {
                $('#tabla').load('tabla.php');
                alertify.error('Hubo un error comuniquese con el administrador');
            }
        }     
    });
}
function actualizarDatosAdmin(){
    idadmin=$('#idadmin').val();
    nombreAdmin=$('#nombreAdmin').val();  
    if ( $('#idchecksuperadmin').prop('checked')  ) {
        console.log('esta marcada');
        valorcheck=1;
    }else{
        console.log('NO esta marcada');
        valorcheck=0;
    } //enviar peticion para actualizar valor y recargar tabla
    var cadena = {"idadmin" : idadmin, "nombreAdmin" : nombreAdmin, "valorcheck" : valorcheck, "opcion" : 'actualizaradmin'  }  
    $.ajax({
        type: "POST",
        url: "consultas.php",
        data:cadena,
        success:function(r){
        console.log(r);
        if (r==1) {
            $('#tablaadmin').load('editaradmin.php');   
            alertify.success('Editado correctamente');
        } else {
            $('#tablaadmin').load('editaradmin.php');
            alertify.error('Hubo un error comuniquese con el administrador');
        }
        }    
    });
    console.log(cadena);

}
function pregunta(id){
    idusuariologueado=$("#idusuariologueado").val();
    alertify.confirm('Eliminar datos', '¿Estas seguro de eliminar?', 
                function(){ eliminar(id, idusuariologueado) }
                , function(){ alertify.error('cancelado')});
}

function eliminar(id, idusuariologueado){    
    var cadena = {"id" : id , "idusuariologueado" : idusuariologueado, "opcion" : 'eliminarusuario' }  
    $.ajax({
        type: "POST",
        url: "consultas.php",
        data:cadena,
        success:function(r){
            console.log(r);
            if (r==1) {
                $('#tabla').load('tabla.php');
                alertify.success('Eliminado correctamente');
            } else {
                $('#tabla').load('tabla.php');
                console.log(r);
            }
        }     
    });
    console.log(cadena);
}

function registro(){    
    nuevousuario=$("#nuevousuario").val();
    nuevopassword=$("#nuevopassword").val();
    repetidopassword=$("#repetidopassword").val();

    if (nuevopassword==repetidopassword) {
        var cadena = {"nuevousuario" : nuevousuario , "nuevopassword" : nuevopassword, "opcion" : 'registro' }  
        $.ajax({
            type: "POST",
            url: "consultas.php",
            data:cadena,
            success:function(r){
                console.log(r);
            if (r==1) { //si esta correcto redirecciona al login para loguearse
                    window.location.href = "index.php";
                    alert('Usuario creado correctamente, puede iniciar sesion');
                } else { //si esta incorrecto mustra error
                    console.log(r);
                    console.log('Hubo un error al cerar usuario contacte con su administrador de sistema');
                }
            }     
        }); 
    }else{
        alert('Contraseñas no coinciden')
    }
}

