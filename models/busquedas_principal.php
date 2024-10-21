<?php
include_once("conexion.php");
function buscaractivos(){
    $buscar = 'SELECT * FROM galeria_encabezado';
    $result =  $GLOBALS["conn"]->query($buscar);

   if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }   
}

function buscaimagenes($id){
    $buscar = 'SELECT a.titulo, a.descripcion, b.* FROM galeria_encabezado a';
    $buscar .=' INNER JOIN galeria_detalle b on b.categoria = a.Id ';
    $buscar .=' where a.Id = "'.$id.'" ';
    $buscar .=' ORDER by b.orden';
    // echo $buscar;
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }
}

function buscacategorias(){
    $buscar = 'SELECT * FROM CATEGORIA WHERE ESTATUS ="ACTIVO" ORDER BY ID_CATEGORIA';

    // echo $buscar;
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }
}

function buscabanner(){
    $buscar = 'SELECT * FROM BANNER WHERE ESTATUS ="ACTIVO" AND SECCION ="PRINCIPAL" ORDER BY ID_BANNER';

    // echo $buscar;
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }
}

function buscadescuento(){
    $buscar = 'SELECT * FROM BANNER WHERE ESTATUS ="ACTIVO" AND SECCION ="PROMO" ORDER BY ID_BANNER';

    // echo $buscar;
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }
}


function buscaproductos($categoria){
    $buscar = 'SELECT * FROM PRODUCTOS WHERE ESTATUS ="ACTIVO" AND CANTIDAD > 0';
    $buscar .= ' AND CATEGORIA ="'.$categoria.'"';
    $buscar .= ' ORDER BY ID_PRODUCTO';

    // echo $buscar;
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }
}

function buscaproductoid($id){
    $buscar = 'SELECT * FROM PRODUCTOS WHERE ESTATUS ="ACTIVO" AND CANTIDAD > 0';
    $buscar .= ' AND ID_PRODUCTO ="'.$id.'"';
    $buscar .= ' ORDER BY ID_PRODUCTO';

    // echo $buscar;
    $result =  $GLOBALS["conn"]->query($buscar);

    if ($result == FALSE){
        echo "ALGO PASÓ";
    }
    else{
        return  $result;
    }
}
?>