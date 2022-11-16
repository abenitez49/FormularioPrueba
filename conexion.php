<?php


function conectar(){
       
        $mysqli = new mysqli('localhost', 'root', '', 'alexis');
            
       // mysqli_select_db($con, $bd);
        
        
        return $mysqli;

}
?>