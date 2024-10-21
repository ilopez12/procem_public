<?php
    include_once("../Models/busquedas_principal.php");
    $id_producto = $_GET['mdip'];


    $buscaprodid = buscaproductoid($id_producto);
    $cantprodid  = mysqli_num_rows($buscaprodid);
    $h = 0;

    $value = mysqli_fetch_array($buscaprodid);
        $id_producto        = $value['ID_PRODUCTO'];
        $categorianomb          = $value['CATEGORIA'];
        $nombreprod         = $value['NOMBRE'];
        $descripcionprod    = $value['DESCRIPCION'];
        $imagenprod         = substr($value['IMAGEN'],10);
        $precio             = $value['PRECIO'];
        $carpeta            = $value['CARPETA'];


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
            <div class="col-md-6 mt-md-0 mt-6">
                <img src="../Img/ventas/<?php echo  $carpeta?>/<?php echo  $imagenprod ?>" alt="" class="general imagen_ventas  ">
            </div>
            <div class="col-md-6 mt-md-0 mt-6 general">
                <h3><strong><?php echo  $nombreprod?></strong></h3>
                <p class=" general">DESCRIPCIÓN:</p>
                <p class=" text-uppercase"><?php echo  $descripcionprod?></p>
                <p>PRECIO:</p>
                <p class=" text-uppercase">$<?php echo number_format( $precio, 2, '.', ',')?></p>
                <!-- <h1 class="animate__animated animate__rubberBand   ">An animated element</h1> -->
                <form >
                    <label for="">CANTIDAD:</label>
                    <!-- <button>-</button> -->
                    <input type="number" placeholder="1" name="cant" id="cant" min='0' required>
                    <!-- <button>+</button> -->
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo  $nombreprod?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo  $precio?>">
                    <input type="hidden" name="precio" id="img" value="../Img/ventas/<?php echo  $carpeta?>/<?php echo  $imagenprod ?>">
                    <div>
                    <!-- <a style="color: black" href="pago.php"> ADQUIRIR</a> -->
                    <a id="add" onclick="anadecarrido()" class="boton btn btn-primary">AÑADIR A CARRITO</a>
                    <!-- <a style="color: black" href="pago">AÑADIR A CARRITO</a> -->
                    </div>
                </form>


            </div>
            </div>

        </div>

    <?php include 'partials/footer_ventas.php'; ?>
<script>
$( "#add" ).click(function() {
    var cantidad = document.getElementById("cant").value;
        console.log(cantidad);
  alert( cantidad );
});
</script>
    </body>
</HTML>