<?php
    include_once("../Models/busquedas_principal.php");
    $categoriaid = $_GET['mn'];

    if ($categoriaid == '1005'){
        $nombrecategoria = 'SOUVENIR';
    }
    if ($categoriaid == '1006'){
        $nombrecategoria = 'JUEGOS Y ARTÍCULOS VARIOS';
    }
    if ($categoriaid == '1007'){
        $nombrecategoria = 'LITERATURA Y CURSOS';
    }
    if ($categoriaid == '1008'){
        $nombrecategoria = 'SERVICIOS';
    }
    


    $buscaprod = buscaproductos($categoriaid);
    $cantprod  = mysqli_num_rows($buscaprod);
    $h = 0;

    while ($value = mysqli_fetch_array($buscaprod)){
        $id_producto[$h]    = $value['ID_PRODUCTO'];
        $categoria[$h]      = $value['CATEGORIA'];
        $nombrecat[$h]      = $value['CATEGORIA'];
        $nombreprods[$h]    = $value['NOMBRE'];
        $descripcion[$h]    = $value['DESCRIPCION'];
        $imagenprod[$h]     = substr($value['IMAGEN'],10);
        $precio[$h]         = $value['PRECIO'];
        $carpeta[$h]        = $value['CARPETA'];

        $precio_format[$h] = number_format($precio[$h], 2, '.', '');
// 1234.57

        $h = $h +1;
    }

?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Procem Internacional</TItle>

    <?php include 'partials/header_ventas.php'; ?>
        <div class="container">
            <div class="row">
            <div class="col-md-4 mt-md-0 mt-4 categorias hidden"><p></p></div>
                <div class="col-md-4 mt-md-0 mt-4 categoriash2 hidden text-uppercase"><h2><strong><?php echo $nombrecategoria?></strong></h2></div>
                <div class="col-md-4 mt-md-0 mt-4 categorias hidden"><p></p></div>
                <?php
                for($i = 0; $i < $cantprod ; $i++){
                ?>
                    <div class="col-md-3 mt-md-0 mt-3 hvr-underline-from-left">
                        <div class= "contenedor" style="text-align: center;">
                            <a href="producto.php?mdip=<?php echo $id_producto[$i] ?>">
                            <img src="../Img/ventas/<?php echo  $carpeta[$i] ?>/<?php echo  $imagenprod[$i] ?>" alt="" class="general imagen_ventas  ">
                            </a>
                            <p class="text-uppercase"><?php echo  $nombreprods[$i] ?></p>
                            <p>B/.<?php echo  $precio_format[$i] ?></p>
                    </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>

    <?php include 'partials/footer_ventas.php'; ?>

    </body>
</HTML>


