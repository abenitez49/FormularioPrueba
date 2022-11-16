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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Select Number Rows</h4>
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width:150px">
                <option value="8000">Todos</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="10">10</option>            
            </select>
        </div>
        <table id="mytable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Pgone</th>
                    <th>Address</th>
                </tr>
          
            </thead>
            <tbody>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr>
                <tr><td>Felix</td><td>agafdhgdfsahg@gmail.com</td><td>0985645789</td><td>pijay</td></tr> 

            </tbody>
        </table>
        <div class="pagination-container">
            <nav>
                <ul class="pagination"></ul>
            </nav>
        </div> 

    </div>
        <script src="js/funciones.js"></script> 
        <script src="js/jQuery 3.6.0.js"></script> 
        <script src="js/alertify.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
        var table = '#mytable'
        $('#maxRows').on('change', function () {
            $('.pagination').html('')
            var trnum = 0;
            var maxRows = parseInt($(this).val());
            var totalRows = $(table+' tbody tr').length;
            $(table+' tr:gt(0)').each(function(){
                trnum++
                if (trnum > maxRows) {
                    $(this).hide()
                }
                if (trnum <= maxRows) {
                    $(this).show()
                }
            })
            if (trnum > maxRows) {
                var pagenum = Math.ceil(totalRows/maxRows)
                for (var i = 1; i <= pagenum; i++) {
                    console.log(i);
                    $('.pagination').append('<li id="'+i+'" class="page-item">\<span><span class="page-link">'+i+' </span></span>\</li>').show() 
                }
            }
            $('.pagination li:first-child').addClass('active')
            $('.pagination li').on('click', function() {
                var pageNum = $(this).attr('id')
                var trIndex = 0;
                $('.pagination li').removeClass('active')
                $(this).addClass('active')
                $(table+' tr:gt(0)').each(function(){
                    trIndex++
                    if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)) {
                        $(this).hide()
                    } else {
                        $(this).show()
                    }
                })
                console.log('cantidad maxima pagination: '+maxRows+' Numero pagination elegida: '+ pageNum, ' trIndex cantidad de item total : '+ trIndex );
            })
        })
        $(function () {
            $('table tr:eq(0)').prepend('<th>Id</th>')
            var id = 0;
            $('table tr:gt(0)').each(function () {
                id++
                $(this).prepend('<td>'+id+'</td>')
            })
        })
    </script>
</body>
</html>