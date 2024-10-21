<?php
header('Content-Type: application/json');
// include_once("../models/conexion.php");
include_once("../models/busquedaProd.php");



$tipo = $_POST['tipo'];


if($tipo == 'getcantidad'){
    $resultado= buscabyProd($_POST['producto']);
    $datos = mysqli_fetch_array($resultado);
    // var_dump($datos);
    echo json_encode($datos);

    // echo $resultado;
}

if($tipo == 'insertcompra'){
    echo json_encode($_POST['tipo']);
}

?>