<?php
    include_once("../../models/busquedas_principal.php");

    $traer = buscaractivos();
    $cant  = mysqli_num_rows($traer);
    // echo $cant;
    $num =0;
    while($value = mysqli_fetch_array($traer)){
            $titulo[$num] = $value['titulo'];
            $imagen[$num] = substr($value['imagen'], 10);
            $id[$num]     = $value['Id'];
            // echo $titulo[$num];
            $num = $num +1;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Cultura Empresarial</TItle>

    <?php include '../Partials/header.php'; ?>

    <div class="container carrouselpad">
        <div class="row">
            <?php
            for($a =1; $a<= $cant; $a++ ){
                // echo $titulo[$a];
                $cuatro = $a / 4;
                $cinco = $a / 5;
                // $siete = $a / 7;
                if ((is_int($cuatro) == FALSE ) and (is_int($cinco) == FALSE)){
                    ?>
                    <a href="galeria.php?asd=<?php echo $id[$a-1]?>">
                    <div class="col-md-4 mt-md-0 mt-4 general hvr-float-shadow">
                    <div class="caja_galeria ">
                        <img id="<?php echo $cuatro?>" class="imagen_galeria sombra" src="../../img/banner_galeria/<?php echo $imagen[$a-1]?>" alt="">
                        <div class="texto_galeria2 text-uppercase"><?php echo $titulo[$a-1]?></div>
                    </div>
                    </a>
                    </div>

                    <?php

                }
                else{
                    ?>
                <a href="galeria.php?asd=<?php echo $id[$a-1]?>">
                    <div class="col-md-6 mt-md-0 mt-6 general hvr-float-shadow">
                        <div class="caja_galeria">
                        <img  id="<?php echo $cuatro?>" class="imagen_galeria sombra" src="../../img/banner_galeria/<?php echo $imagen[$a-1]?>" alt="">
                        <div class="texto_galeria text-uppercase"><?php echo $titulo[$a-1]?></div>
                        </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>

        </div>
    </div>


    <?php include '../Partials/footer.php'; ?>


    </body>
</html>