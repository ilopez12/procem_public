<?php
header('Content-Type: application/json');
include_once("conexion.php");

function buscabycat($id){
    $buscar = 'SELECT * FROM productos WHERE CATEGORIA = '.$id.' ORDER BY ESTATUS';
        $result =  $GLOBALS["conn"]->query($buscar);
    try{
        return  $result;
    }catch(Exception $ex){
        echo "ALGO PASÓ";
    }
        

}

function buscabyProd($id){
    $buscar = 'SELECT * FROM productos WHERE ID_PRODUCTO = '.$id;
        $result =  $GLOBALS["conn"]->query($buscar);
    try{
        return  $result;
    }catch(Exception $ex){
        echo "ALGO PASÓ";
    }
        

}

?>