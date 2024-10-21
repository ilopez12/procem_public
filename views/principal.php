<?php
    include_once("../Models/busquedas_principal.php");

    $busqueda = buscabanner();
    $cant2= mysqli_num_rows($busqueda);
    $d =0;
    while($value = mysqli_fetch_array($busqueda)){
        $imagen2[$d] = substr($value['IMAGEN'],10);

        $d =$d+1;
    }

    $busqueda2 = buscadescuento();
    $cant3= mysqli_num_rows($busqueda2);
    $f =0;
    while($value = mysqli_fetch_array($busqueda)){
        $imagen3[$f] = substr($value['IMAGEN'],10);

        $f =$f+1;
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

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
                for ($c= 0; $c <$cant2; $c++){
                    if($c == 0){
                    ?>
                    <div class="carousel-item active">
                    <img src="../img/CulturaEmpresarial/<?php echo $imagen2[$c] ?>" class="plearning_banner d-block w-100" alt="...">
                    </div>
                    <?php
                    }
                    else{
                        ?>
                        <div class="carousel-item">
                        <img src="../img/CulturaEmpresarial/<?php echo $imagen2[$c] ?>" class="plearning_banner d-block w-100" alt="...">
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </header>
        <!-- PROMOCIONES -->
        <div class="container">
            <div class="row">
<!-- TITULO -->
                <div class="col-md-4 mt-md-0 mt-4 categorias hidden"><p></p></div>
                <div class="col-md-4 mt-md-0 mt-4 categoriash2 hidden text-uppercase"><h2>PROMOCIONES</h2></div>
                <div class="col-md-4 mt-md-0 mt-4 categorias hidden"><p></p></div>
<!-- FIN TITULO -->
                <div class="col-md-6 mt-md-0 mt-6 general">
                    <img src="../Img/Procem/principal.jpg" alt="" class="general" style="width: 100%;height: 700px;">
                </div>
                <div class="col-md-6 mt-md-0 mt-6 general">
                    <div class="row">
                        <div class="col-md-12 mt-md-0 mt-6 general" >
                        <img src="../Img/Procem/second.jpg" alt="" style="padding-left: 5px; width: 100%">
                        </div>
                        <div class="col-md-12 mt-md-0 mt-6" >
                        <img src="../Img/Procem/Third.jpg" alt="" style="padding-left: 5px; width: 100%">
                            </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- FIN PROMOCIONES -->

        <!-- TEMPORAL -->
        <div id="volver" class="sombra" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-md-0 mt-4 categorias hidden"><p></p></div>
                <div class="col-md-4 mt-md-0 mt-4 categoriash2 hidden text-uppercase"><h2>Categorías</h2></div>
                <div class="col-md-4 mt-md-0 mt-4 categorias hidden"><p></p></div>
                <?php
                    for($e =0; $e<$cantidad; $e ++){
                        ?>
                        <div class="col-md-3 mt-md-0 mt-3">
                        <a href="categorias.php?mn=<?php echo $id[$e] ?>&nom=<?php echo $nombre[$e]?>">
                        <img src="../Img/Procem/<?php echo $imagen[$e]?>" class="imagen-cat" alt="">
                        </a>
                    </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        </div>
        <!-- FIN TEMPORAL -->



    <?php include 'Partials/footer_ventas.php'; ?>


<script src="../js/bootstrap.min.js"></script>

<script src="../js/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 3000
        });
    });
</script>
</body>
</HTML>