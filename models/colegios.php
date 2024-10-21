<?php
header('Content-Type: application/json');
include_once("conexion.php");

function getall(){
    $buscar = 'SELECT * FROM colegios ORDER BY nombre';
        $result =  $GLOBALS["conn"]->query($buscar);
    try{
        return  $result;
    }catch(Exception $ex){
        echo "ALGO PASÓ";
    }
        

}



?>