<?php
header('Content-Type: application/json');
include_once("conexion.php");

// $resultados = $_POST['categoria'];
$busqueda  = $_POST['busqueda'];

$fecha = date("yyyy/mm/dd") ;
$hora =  date("H:i:s");

    //OPCION DE BUSCA TODO
    if ($busqueda == 'todo'){
        buscarcategoria();
    }
    //OPCION DE BUSCA SOLO ID Y NOMBRE
    if ($busqueda == 'solocat'){
        buscauna();
    }
    //OPCION DE GUARDAR NUEVO
    if ($busqueda == 'guardar'){
        $nombre  = $_POST['nombre_cat'];
        $estatus  = $_POST['Estatus'];
        $img  = $_POST['imagen'];
        guardarcat($nombre,  $estatus, $img );
        // echo json_encode($nombre);
    }
    //OPCION DE BUSQUEDA POR ID
    if ($busqueda == 'buscaporid'){
    $id = $_POST['id'];
    buscaporid($id);
    }
    //OPCION DE ACTUALIZAR
    if ($busqueda == 'actualizar'){
        $id      = $_POST['id'];
        $nombre  = $_POST['nombre_cat'];
        $estatus = $_POST['Estatus'];
        $img     = $_POST['imagen'];

        actualiza($id, $nombre, $estatus, $img);
        }



function actualiza($id, $nombre, $estatus, $img){

    $buscar = 'UPDATE CATEGORIA SET NOMBRE ="'. $nombre.'", ESTATUS ="'.$estatus.'", IMG="'.$img.'"';
    $buscar .= 'WHERE ID_CATEGORIA ="'.$id.'"';
    $result =  $GLOBALS["conn"]->query($buscar);
    echo json_encode($result);

}

function buscaporid($id){
    $buscar = 'SELECT * FROM CATEGORIA WHERE ID_CATEGORIA = "'.$id.'"';
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

function  guardarcat($nombre,  $estatus, $img ){

    $buscar = 'INSERT INTO CATEGORIA(NOMBRE, ESTATUS, IMG) VALUES("'.$nombre.'", "'.$estatus.'","'.$img.'")';
    $result =  $GLOBALS["conn"]->query($buscar);
    echo json_encode($result);
}

function buscauna(){
    $buscar = 'SELECT NOMBRE, ID_CATEGORIA FROM CATEGORIA ORDER BY NOMBRE';
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

function buscarcategoria(){
    $buscar = 'SELECT * FROM CATEGORIA ORDER BY ESTATUS';
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