<?php
// header('Content-Type: application/json');
// include_once("../models/conexion.php");
include_once("../models/busquedaProd.php");

class Apirespuesta{

    function error($titulo, $mensaje){
        echo '<script>alert("'.$mensaje.'"); </script>';

    }

}
?>
