<?php 
$id_cat = $_GET['asd'];
// echo $nombre;

include_once("../../models/busquedas_principal.php");

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
   header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Galeria</TItle>
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <!-- <script type="text/javascript" src="../dist/js/fresco.js"></script> -->
	<script type="text/javascript" src="../../fresco-2.3.0/dist/js/fresco.js"></script>
    <link rel="stylesheet" type="text/css" href="../dist/css/fresco.css" />
    <link rel="stylesheet" type="text/css" href="../../fresco-2.3.0/dist/css/fresco.css" />

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="robots" content="noindex,nofollow" />
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
		<div id="page">
                <div class="row">
				
                    <?php 
                    for ($a = 0; $a<$num; $a++){
                    ?>
				<div class="col-md-3 mt-md-0 mt-3">	
					 <a
          href="../../img/eventosgaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>"
          class="fresco"
          data-fresco-group="example"
          data-fresco-caption="<?php echo $alt[$a];?>"
        >
          <img class="imagen_galeria " src="../../img/eventosgaleria/<?php echo $carpeta;?>/<?php echo $imagen[$a];?>" alt="foto">
        </a>
        </div> 
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
