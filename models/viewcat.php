<?php
include_once("conexion.php");

function traercategoria($id){
    $buscar = 'SELECT * FROM CATEGORIA WHERE ID_CATEGORIA ="'.$id.'" ';
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        ECHO "CONEXION FALLIDA";
    }
    else {
        // ECHO  $buscar;
        // var_dump($result);
            return $result;
    }
}


function buscaproductos($id){
    $buscar2 = 'SELECT * FROM PRODUCTOS WHERE CATEGORIA="'.$id.'" AND ESTATUS ="ACTIVO"';
    $result2 =  $GLOBALS["conn"]->query($buscar2);

    if ($result2 == FALSE){
        ECHO "CONEXION FALLIDA";
    }
    else {
            return $result2;
    }
}

function buscaproductofin($id){
    $buscar2 = 'SELECT * FROM PRODUCTOS WHERE ID_PRODUCTO="'.$id.'"';
    $result2 =  $GLOBALS["conn"]->query($buscar2);

    if ($result2 == FALSE){
        ECHO "CONEXION FALLIDA";
    }
    else {
            return $result2;
    }
}

?>