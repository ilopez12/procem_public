<?php 
$id_cat = $_GET['asd'];
// echo $nombre;

include_once("../../Models/busquedas_principal.php");

    $traer = buscaimagenes($id_cat);
    $cant  = mysqli_num_rows($traer);
    // echo $cant;
    $num =0;
    while($value = mysqli_fetch_array($traer)){
            $titulo         = $value['titulo'];
            $descrip        = $value['descripcion'];
            $carpeta        = $value['carpeta'];
            $imagen[$num]   = substr($value['nombre_img'], 10);
            $alt[$num]      = $value['alt'];
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
    <TItle>Galeria</TItle>

    <?php include '../Partials/header.php'; ?>

    <div class="container carrouselpad">
        <div class="general">
            <h3><strong><?php echo $titulo;?></strong></h3>
        </div>
        <div class="row">
            <div class="col-md-4 mt-md-0 mt-4 general">
                <p><?php echo $descrip;?></p>
            </div>
            <div class="col-md-8 mt-md-0 mt-8 general">
                <div class="row">
                    <?php 
                    for ($a = 0; $a<$num; $a++){
                    ?>

<a href="../../Img/EventosGaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>"
   class="fresco"
   data-fresco-group="unique_name"><img class="imagen_galeria " src="../../Img/EventosGaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>" alt=""></a>

                    <!-- <a href="../../Img/EventosGaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>"
   class="fresco"
   data-fresco-caption="Caption on top of the image"
   data-fresco-options="ui: 'inside'"><img class="imagen_galeria " src="../../Img/EventosGaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>" alt=""></a> -->
<!--                     
                    <div id="lightgallery" class="col-md-3 mt-md-0 mt-3">
                        <a href="../../Img/EventosGaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>">
                        <img class="imagen_galeria " src="../../Img/EventosGaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>" alt="">
                        </a>
                        
                    </div>  -->
                    <?php
                    }
                    ?>


                </div>
            </div>

        </div>
    </div>

</script>
    <script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
          "hasModal" : true,
          // "fullHeight" : false
        });
      });
    </script>
    <?php include '../Partials/footer.php'; ?>
</body>
</html>