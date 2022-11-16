<?php
//$mysqli = new mysqli("localhost", "root", "", "alexis");
$mysqli = new mysqli("127.0.0.1", "crmti", "0ct0Pass2222!!","8443", "crmti");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

$consulta = "SELECT telephone,calldate, billsec, disposition, calltype, accountcode FROM asterisk.ast_cdr WHERE telephone=0981345622 LIMIT 5";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
        printf ("%s (%s)\n", $fila["telephone"], $fila["calldate"]);
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

/* cerrar la conexión */
$mysqli->close();
?>