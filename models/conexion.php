<?php

$servername = "localhost";
$username = "fundaci_admin";
$password = "hR6nfZTEHLle";
// $username = "root";
// $password = "";
$database1 = "fundaci_procem";


$GLOBALS["conn"] = mysqli_connect($servername, $username, $password, $database1);
mysqli_set_charset($GLOBALS["conn"],"utf8");
if (!$GLOBALS["conn"]) {
    echo json_encode('ERROR EN LA CONEXION A LA BASE DE DATOS');
}


?>