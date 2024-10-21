<?php
header('Content-Type: application/json');
include_once("conexion.php");

$busqueda  = $_POST['busqueda'];

if ($busqueda === 'banner' ){
    buscartodos();
}

if ($busqueda === 'insertar' ){
    $imagen       = $_POST['imagen'];
    $seccion      = $_POST['seccion'];
    $descripcion  = $_POST['descrip'];
    $estatus      = $_POST['Estatus'];
    insertar($imagen, $seccion, $descripcion, $estatus);
   // echo json_encode($busqueda);
}

if ($busqueda === 'buscaporid' ){
    $id       = $_POST['id'];
    buscarporid($id);
}

if ($busqueda === 'actualizar' ){
    $id       = $_POST['id'];
    $estatus  = $_POST['nombre_bann'];
    actualizar($id, $estatus);

}



function buscartodos(){
    $buscar = 'SELECT * FROM BANNER ORDER BY ESTATUS';
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

function insertar($imagen, $seccion, $descripcion){
    $buscar = 'INSERT INTO BANNER(IMAGEN, SECCION, DESCRIPCION, ESTATUS) VALUES("'.$imagen.'", "'.$seccion.'","'.$descripcion.'","ACTIVO")';
    $result =  $GLOBALS["conn"]->query($buscar);
    echo json_encode($result);
}

function buscarporid($id){
    $buscar = 'SELECT * FROM BANNER WHERE ID_BANNER = "'.$id.'"';
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

function actualizar($id, $estatus){
    $buscar = 'UPDATE BANNER SET ESTATUS ="'. $estatus.'"';
    $buscar .= 'WHERE ID_BANNER ="'.$id.'"';
    $result =  $GLOBALS["conn"]->query($buscar);
    echo json_encode($result);
}

?>