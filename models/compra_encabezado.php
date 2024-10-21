<?php
header('Content-Type: application/json');
include_once("conexion.php");

function insertenc($item){
    $conn =  $GLOBALS["conn"];

    $gsent =  $conn->prepare('INSERT INTO compra_encabezado
    (nombre, email, direccion, fecha_compra, estatus,tipo_entrega, colegio, telefono_colegio, direccion_colegio, pago, revision_pago, total, subtotal ) 
    VALUES(:nombre, :email, :direccion, :fecha_compra, :estatus,:tipo_entrega, :colegio, :telefono_colegio, :direccion_colegio, :pago, :revision_pago, :total, :subtotal)');

    $gsent->bindParam(':nombre', $item['nombre'],PDO::PARAM_STR, 100);
    $gsent->bindParam(':email', $item['email'],PDO::PARAM_STR, 100);
    $gsent->bindParam(':direccion',  $item['direccion'], PDO::PARAM_LOB);
    $gsent->bindParam(':fecha_compra', date("Y-m-d H:i:s"), PDO::PARAM_STR, 100);
    $gsent->bindParam(':estatus', 'COMPRADO', PDO::PARAM_STR, 20);
    $gsent->bindParam(':tipo_entrega', $item['tipo_entrega'],PDO::PARAM_INT);
    $gsent->bindParam(':colegio', $item['colegio'],PDO::PARAM_INT);
    $gsent->bindParam(':telefono_colegio', $item['telefono_colegio'],PDO::PARAM_INT);
    $gsent->bindParam(':direccion_colegio',  $item['direccion_colegio'], PDO::PARAM_LOB);
    $gsent->bindParam(':pago', $item['pago'], PDO::PARAM_STR, 100);
    $gsent->bindParam(':revision_pago', $item['revision_pago'], PDO::PARAM_STR, 2);
    $gsent->bindParam(':total', $item['total']);
    $gsent->bindParam(':subtotal', $item['subtotal']);

    $gsent->execute();


        if ($gsent == FALSE){
            return json_encode(array('mensaje' => 'ERROR'));
        }else {
            return $gsent;
        }

}

?>