<?php
header('Content-Type: application/json');
include_once("conexion.php");

$busqueda  = $_POST['busqueda'];

if ($busqueda === 'miembros' ){
    buscartodos();
}

if ($busqueda === 'insertar' ){
    $nombre         = $_POST['nombre'];
    $apellido       = $_POST['apellido'];
    $cedula         = $_POST['cedula'];
    $correo         = $_POST['correo'];
    $imagen         = $_POST['imagen'];
    $estado_civil   = $_POST['estado_civil'];
    $puesto         = $_POST['puesto'];
    $estudios       = $_POST['estudios'];
    $experiencia    = $_POST['experiencia'];
    $aficion        = $_POST['aficion'];
    $vista          = $_POST['vista'];
    $nacionalidad   = $_POST['nacionalidad'];
    insertarmiebro($nombre, $apellido, $cedula, $correo, $imagen, $estado_civil, $puesto, $estudios, $experiencia, $aficion, $vista, $nacionalidad);
}


function buscartodos(){
    $buscar = 'SELECT * FROM MIEMBROS_PROCEM ORDER BY APELLIDO';
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

function insertarmiebro($nombre, $apellido, $cedula, $correo, $imagen, $estado_civil, $puesto, $estudios, $experiencia, $aficion, $vista, $nacionalidad){
    $buscar = 'INSERT INTO MIEMBROS_PROCEM(NOMBRE, APELLIDO, CEDULA, EMAIL, IMAGEN, ESTADO_CIVIL, POSICION, ESTUDIOS, EXPERIENCIA, AFICION, MOSTRAR, NACIONALIDAD) ';
    $buscar .= 'VALUES("'.$nombre.'", "'.$apellido.'","'.$cedula.'","'.$correo.'","'.$imagen.'","'.$estado_civil.'","'.$puesto.'","'.$estudios.'","'.$experiencia.'","'.$aficion.'","'.$vista.'","'.$nacionalidad.'")';
    $result =  $GLOBALS["conn"]->query($buscar);
    if ($result == FALSE){
        echo json_encode('NO SE GUARDO');
    }else{
        echo json_encode($result);
    }
    
}


function mostraractivos(){
    $buscar = 'SELECT * FROM MIEMBROS_PROCEM WHERE MOSTRAR = "SI" ORDER BY NUMERO';
    $result =  $GLOBALS["conn"]->query($buscar);

    // return $result;

    if ($result == FALSE){
        ECHO "CONEXION FALLIDA";
    }
    else {
        return $result;
    }
}


?>