<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Nuestros Eventos</TItle>
    <style>
        .active{color:red;}
    </style>
    <!-- FINAL DEL HEAD INICIO DEL BODY HEADER  -->

        <?php include '../Partials/header.php'; ?>
        <?php header('Content-Type: text/html; charset=utf-8');?>


    <!-- TAMBIEN INCLUYE EL FINAL DEL  HEADER  -->

    <div class="container carrouselpad">

        <div class="row">

            <div class="col-md-6 mt-md-0 mt-6">
            <!-- <a href="leer_mas.php?nombre=evento1"> -->
            <div class="caja padd-img">
                <img class="plearning_banner2 hvr-underline-from-center" src="../../img/slide/slide-4.jpg" alt="">
                <div class="texto_eventos">
                <h5 style="font-weight: bold;" class="text-uppercase">Primer Congreso de Cultura Empresarial</h5>
                <p style="color: black;">Expositores Nacionales e Internacionales</p>
                <p style="color: black;">Día: 27,28,29 de Febrero</br>Temas: Teatro Salud Organización Literatura, Arte, Cultura Empresarial</p>
                </div>
            </div>
            <!-- </a> -->
            </div>

            <div class="col-md-6 mt-md-0 mt-6">
            <!-- <a href="leer_mas.php?nombre=evento2"> -->
                <div class="caja padd-img">
                <img class="plearning_banner2 hvr-underline-from-center" src="../../img/culturaempresarial/baner6.png" alt="">
                    <div class="texto_eventos">
                    <h5 style="font-weight: bold;" class="text-uppercase">MEDUCA Seminario, 2020</h5>
                    <p style="color: black;">Día: Feb 3 al 7 y Feb 10 al 14</p>
                    <p style="color: black;">Temas: Tecnología como herramienta educativa, Administración de Emociones</p>
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div>
    </div>

<?php include '../Partials/footer.php'; ?>

</body>
</html>