<?php
header('Content-Type: application/json');
// include_once("../models/conexion.php");
include_once("../models/busquedaProd.php");
include_once("response.php");



$tipo = $_POST['tipo'];

if($tipo == 'insertcompra'){
    $api = new Apirespuesta;
    // VERIFICAR DISPONIBILIDAD 
    $resultado= buscabyProd($_POST['product']);
    $datos = mysqli_fetch_array($resultado);
    
    if($datos['DISPONIBLE'] < $_POST['cant']){
        echo '<script>alert("Usuario registrado correctamente, en breve le llegará un correo con las instrucciones a seguir."); </script>';

        // var_dump($datos['DISPONIBLE']);
    }else{
        // var_dump($datos);
    }
   
    if($_POST['metodo_ent'] == 'envio'){
        // VERIFICAR LOS DATOS 
        // echo $_POST['metodo_ent'];
        if($_POST['direccionenvio'] == ''|| $_POST['telefono'] == ''){
            $api->error($titulo, $mensaje);
        }
    }

    // GUARDAR LA COMPRA 


    // ENVIAR CORREO 

    // echo json_encode($_POST['tipo']);
}

?>