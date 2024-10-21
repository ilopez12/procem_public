<?php

header('Content-Type: application/json');
include_once("conexion.php");

$busqueda = $_POST['busqueda'];

if ($busqueda === 'galerias' ){
    buscartodos();
}


function buscartodos(){
    $buscar = 'SELECT * FROM galeria_encabezado ';
    $result =  $GLOBALS["conn"]->query($buscar);

        $resultado = array();

        while ($rows = mysqli_fetch_array($result)) {
            $str = mb_convert_encoding($rows, "UTF-8", "iso-8859-1");
            array_push($resultado,$str);
        }

        $json = json_encode($resultado);

        if ($json)
            echo $json;
        else
            echo json_last_error_msg();
}


?>