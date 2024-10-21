<?php 
$nombre = $_GET['nombre'];
// echo $nombre;
if ($nombre == 'lee_procem'){
    // echo $nombre;
    $titulo = "Ley 128 del 3 de marzo de 2020";
    $imagen = '../../img/culturaempresarial/procem.png';
    $parrafo= '<p class="general"> Establece la enseñanza obligatoria de la cultura empresarial y del emprendimiento como eje transversal en asignaturas afines en los planes de estudio del sistema educativo panameño.</p>';
    $parrafo.='<p>Luego de 15 años de gestionar el proyecto de esta ley, se hace realidad, como una herramienta educativa cónsona con la realidad global.</p>';
    $parrafo.='<p >Esta Ley con la metodología de las Artes logrará que nuestros niños, jóvenes y adultos desarrollen su creatividad para autosuficiencia por medio de una educación de autogestión.</p>';
    $parrafo.='<p >Agradecemos a los diputados creyentes de una mejor educación siendo participes en lograr su aprobación, <strong >H.D. TITO RODRIGUEZ</strong> , <strong>H.D. LEANDRO AVILA</strong>, <strong>H.D. JUAN DIEGO VAZQUEZ, H.D. ANA GISELLE ROSAS, H.D HECTOR BRAN</strong>. </p>';
    $parrafo.='<p >Y un eterno agradecimiento al <strong>Exelentisímo Presidente de la República de Panamá Laurentino Cortizo Cohen</strong> refrendar la ley en busca de una estrella  en la educación.</p>';
    // echo $imagen;
}

if  ($nombre == 'evento1'){
    $titulo = "Primer Congreso de Cultura Empresarial";
    $imagen = '../../img/slide/slide-4.jpg';  
    $parrafo= '<p class="general">Fecha: 27,28,29 de Febrero de 2020</p>';
    $parrafo.='<p>Horario: 9-10 PM</p>';
    $parrafo.='<p >Expositores:  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quo animi. Iusto, soluta! Sapiente dicta laudantium nemo a reiciendis magnam consequuntur? Numquam illo accusantium ea, sit inventore aut unde quam?</p>';
    $parrafo.='<p > Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quo animi. Iusto, soluta! Sapiente dicta laudantium nemo a reiciendis magnam consequuntur? Numquam illo accusantium ea, sit inventore aut unde quam?</p>';
    $parrafo.='<p > Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quo animi. Iusto, soluta! Sapiente dicta laudantium nemo a reiciendis magnam consequuntur? Numquam illo accusantium ea, sit inventore aut unde quam?.</p>';
}
if  ($nombre == 'evento2'){
    $titulo = "MEDUCA Seminario, 2020";
    $imagen = '../../img/slide/slide-4.jpg';  
    $parrafo= '<p class="general">Día: Feb 3 al 7 y Feb 10 al 14</p>';
    $parrafo.='<p>Temas: Tecnología como herramienta educativa, Administración de Emociones</p>';
    $parrafo.='<p >Expositores:  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quo animi. Iusto, soluta! Sapiente dicta laudantium nemo a reiciendis magnam consequuntur? Numquam illo accusantium ea, sit inventore aut unde quam?</p>';
    $parrafo.='<p > Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quo animi. Iusto, soluta! Sapiente dicta laudantium nemo a reiciendis magnam consequuntur? Numquam illo accusantium ea, sit inventore aut unde quam?</p>';
    $parrafo.='<p > Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quo animi. Iusto, soluta! Sapiente dicta laudantium nemo a reiciendis magnam consequuntur? Numquam illo accusantium ea, sit inventore aut unde quam?.</p>';
}

?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Más</TItle>

    <?php include '../Partials/header.php'; ?>


    <div class="caja carrouselpad">
    <img class="plearning_banner2 hvr-underline-from-center" src="../../img/slide/slide-4.jpg" alt="">
        <div class="texto1 text-uppercase carrouselpad"><?php echo $titulo;?></div>
    </div>

    <div class="container">
        <div class="row general">

            <div class="col-6">
                <h3><?php echo $titulo;?></h3>
                <?php echo $parrafo;?>
            </div>
            <div class="col-6">
                <div class="imagen_principal general">
                    <img class="principal" src="<?php echo $imagen;?>" alt="">
                </div>
            </div>

        </div>

    </div>

    <?php include '../Partials/footer.php'; ?>
</body>
</html>