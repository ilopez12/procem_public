<?php
include_once("conexion.php");

function traerbanner(){
    $buscar = 'SELECT * FROM BANNER WHERE ESTATUS ="ACTIVO" AND SECCION="PRINCIPAL"';
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


function traercategorias(){
    $buscar2 = 'SELECT * FROM CATEGORIA WHERE ESTATUS ="ACTIVO"';
    $result2 =  $GLOBALS["conn"]->query($buscar2);

    if ($result2 == FALSE){
        ECHO "CONEXION FALLIDA";
    }
    else {
        // ECHO  $buscar;
        // var_dump($result);
            return $result2;
    }
}

?>