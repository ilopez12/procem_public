<?php
include_once("conexion.php");

class Busqueda extends DB{
  
  function buscamiebros(){
    
    echo 'aqui';
    echo $this->connect();
     $buscar = 'select * from miembros_procem ORDER BY NUMERO';
     $result =  $this->connect()->query($buscar);
    
    print_r($result);
    return $result;
  }
  
}

?>