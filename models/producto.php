<?php
header('Content-Type: application/json');
include_once("conexion.php");

// $resultados = $_POST['producto'];
// $busqueda   = $_POST['busqueda'];

if ($busqueda == 'busqueda'){
    buscarproducto();

}

if ($busqueda == 'buscaporid'){
    $id =$_POST['id'];
    buscarporid($id);
    // echo json_encode($busqueda);
}

if ($resultados === 'categorias'){
    echo json_encode($resultados);
}

if ($busqueda === 'guardar'){
    $nombre = $_POST['nombre'];
    $categoria  = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $estatus  = $_POST['estatus'];
    $precio = $_POST['precio'];
    $costo  = $_POST['costo'];
    $cantidad = $_POST['cantidad'];
    $imagen  = $_POST['imagen'];
    $fecha = date("yy/m/d") ;
    $hora =  date("H:i:s");
    guardar($nombre, $categoria, $descripcion, $estatus, $precio, $costo, $cantidad, $imagen, $fecha);
}


if ($busqueda === 'actualizar'){
    $id           =$_POST['id_prod'];
    $nombre       =$_POST['nombre'];
    $categoria    =$_POST['categoria'];
    $descripcion  =$_POST['descripcion'];
    $estatus      =$_POST['Estatus'];
    $precio       =$_POST['precio'];
    $costo        =$_POST['costo'];
    $cantidad     =$_POST['cantidad'];
    $imagen       =$_POST['imagen'];

    $fecha        = date("yy/m/d") ;
    $hora         =  date("H:i:s");
    actualizaprod($id, $nombre, $categoria, $descripcion, $estatus, $precio, $costo, $cantidad, $imagen, $fecha);
    // echo json_encode($busqueda);
}

function actualizaprod($id, $nombre, $categoria, $descripcion, $estatus, $precio, $costo, $cantidad, $imagen, $fecha){
    $buscar = 'UPDATE PRODUCTOS SET NOMBRE ="'. $nombre.'", DESCRIPCION ="'.$descripcion.'", IMAGEN="'.$imagen.'",';
    $buscar .= 'CANTIDAD="'. $cantidad.'", COSTO ="'.$costo.'", PRECIO="'.$precio.'",';
    $buscar .= 'FECHA_MODIFICACION="'. $fecha.'", ESTATUS ="'.$estatus.'", CATEGORIA="'.$categoria.'"';
    $buscar .= 'WHERE ID_PRODUCTO ="'.$id.'"';
    $result =  $GLOBALS["conn"]->query($buscar);
    echo json_encode($result);
}

function buscarporid($id){
    $buscar = 'SELECT * FROM PRODUCTOS WHERE ID_PRODUCTO ="'.$id.'"';
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

function buscarproducto(){
    $buscar = 'SELECT * FROM PRODUCTOS ORDER BY ESTATUS';
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
function buscabycat($id){
    $buscar = '
    SELECT * FROM productos WHERE CATEGORIA = '.$id.' ORDER BY ESTATUS';
        $result =  $GLOBALS["conn"]->query($buscar);
    try{
        return  $result;
    }catch(Exception $ex){
        echo "ALGO PASÓ";
    }
        // if ($result == FALSE){
        //     echo "ALGO PASÓ";
        // }
        // else{
        //     return  $result;
        // }

}

function guardar($nombre, $categoria, $descripcion, $estatus, $precio, $costo, $cantidad, $imagen, $fecha){
    $buscar  = 'INSERT INTO PRODUCTOS(NOMBRE, CATEGORIA, DESCRIPCION, IMAGEN, CANTIDAD, COSTO, PRECIO, ESTATUS, FECHA_CREACION) ';
    $buscar .= 'VALUES("'.$nombre.'", "'.$categoria.'","'.$descripcion.'","'.$imagen.'","';
    $buscar .= ''.$cantidad.'","'.$costo.'","'.$precio.'","'.$estatus.'", "'.$fecha.'")';
    $result  =  $GLOBALS["conn"]->query($buscar);
    echo json_encode( $result);
}





?>