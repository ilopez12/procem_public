<?php
header('Content-Type: application/json');
include_once("conexion.php");

function insertdetalle($item){
    $conn =  $GLOBALS["conn"];

    $gsent =  $conn->prepare('INSERT INTO compra_detalle
    (n_compra, producto, cantidad) VALUES(:n_compra, :producto, :cantidad)');

    $gsent->bindParam(':n_compra', $item['n_compra'], PDO::PARAM_INT);
    $gsent->bindParam(':producto',  $item['producto'], PDO::PARAM_INT);
    $gsent->bindParam(':cantidad', $item['cant'], PDO::PARAM_INT);

    $gsent->execute();


        if ($gsent == FALSE){
            return json_encode(array('mensaje' => 'ERROR'));
        }else {
            return $gsent;
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