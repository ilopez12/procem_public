<?php
include_once("../../models/conexion.php");

 $buscar = 'select * from miembros_procem ORDER BY NUMERO';

$result =  $GLOBALS["conn"]->query($buscar);

$cantidad = mysqli_num_rows($result);
$b = 0;

while($value = mysqli_fetch_array($result)){
            $nombre[$b]  = $value['nombre']." ".$value['apellido'];
            $puesto[$b]  = $value['posicion'];
            $correo[$b]  = $value['email'];
            $imagen[$b]  = substr($value['imagen'],11);
            $id[$b]      = substr($value['email'],0, -21);
            $b = $b + 1;
}

?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Nosotros</TItle>


    <?php include '../Partials/header.php'; ?>



    <!-- NUESTRO PROPOSITO -->
    <div>
        <div class="container">
        <img class="plearning_banner carrouselpad" src="../../img/culturaempresarial/baner1.png" alt="" style="background-color: #e8ced2e3;">

        </div>
    </div>
  
    <div class="container general">
        <div class="align-items-center">
                <!-- <div class="offset-lg-1 col-lg-5" style="text-align:justify;">-->
                <div class="" id="proposito">
                    <h2> <strong>Nuestro Propósito</strong> </h1>
                        <p>La fundación PROCEM Internacional - Panamá, tiene como prioridad promover la Cultura Empresarial. Para llevar a cabo este propósito hemos investigado el gran potencial didáctico y metodológico a través de las artes, prestando especial
                            atención las diversidades y singularidades metodológicas de las cinco expresiones del Arte.</p>
                        <p>La fundación contribuye decididamente a educar, formar y capacitar al individuo en todos los conceptos de la Cultura Empresarial, iniciando por la educación, desde el maternal hasta la universidad.
                        </p>
                        <p>También nos dirigimos al área científica, promoviendo la <strong> creatividad</strong> para el logro de una autosuficiencia y autogestión de nuestros afiliados.</p>
                        <p>Además, nos enfocamos en darle ayuda a las micro, pequeña y mediana empresa con sus colaboradores, para que tengan éxitos en sus funciones y así lograr un capital humano próspero y con sentido de pertenencia.</p>
                        <p>Estos propósitos los lograremos por medio del interés y apoyo de nuestros directores, voluntarios, patrocinadores y la Sociedad Nacional e Internacional.</p>
                        <p>Defendemos la educación como derecho fundamental para todo el género humano.</p>
                    <h3><strong>Misión</strong></h3>
                    <p>Educar, Consolidar, Fortalecer y Dinamizar la autogestión en la ejecución de las Artes que estimulen y motiven el fortalecimiento y la creatividad de manera que contribuyan en forma directa a la Cultura Empresarial atravéz de las Artes.
                    </p>

                    <h3><strong>Visión</strong></h3>
                        <p> Ser creadores de un espiritu, energÍa y entusiasmo desbordante en las personas, de manera que se conviertan en INNOVADORES - EMPRENDEDORES.
                        </p>
                    <h3 class="general"><strong>Nuestros Principios</strong></h3>
                        <div class="row">
                            <div class="col-md-2 mt-md-0 mt-2 general" style="text-align: center;">
                                <img class="img-ino2 hvr-bounce-out " src="../../img/f-icons/participacion.png" alt="">
                                <h6 class="general"> <strong>Participación</strong> </h6>
                            </div>
                            <div class="col-md-2 mt-md-0 mt-2 general" style="text-align: center;">
                            <img class="img-ino2 hvr-bounce-out " src="../../img/f-icons/transparencia.png" alt="">
                                <h6 class="general"> <strong>Transparencia</strong> </h6>
                            </div>
                            <div class="col-md-2 mt-md-0 mt-2 general" style="text-align: center;">
                            <img class="img-ino2 hvr-bounce-out" src="../../img/f-icons/igualdad.png" alt="">
                                <h6 class="general"> <strong>Igualdad</strong> </h6>
                            </div>
                            <div class="col-md-2 mt-md-0 mt-2 general" style="text-align: center;">
                            <img class="img-ino2 hvr-bounce-out" src="../../img/f-icons/fraternidad.png" alt="">
                                <h6 class="general"> <strong> Fraternidad</strong></h6>
                            </div>
                            <div class="col-md-2 mt-md-0 mt-2 general" style="text-align: center;">
                            <img class="img-ino2 hvr-bounce-out" src="../../img/f-icons/utopia.png" alt="">
                                <h6 class="general"> <strong> Utopía Transformadora</strong></h6>
                            </div>
                            <div class="col-md-2 mt-md-0 mt-2 general" style="text-align: center;">
                            <img class="img-ino2 hvr-bounce-out " src="../../img/f-icons/centralidad.png" alt="">
                                <h6 class="general"> <strong>Centralidad de la persona</strong> </h6>
                            </div>
                        </div>

                    </div>
            </div>
    </div>
    <!-- MISION Y VISION -->
<DIV class="none hvr-underline-from-center">
    <div class="container" style="text-align: center;">
    <h2 class="general" >Nuestros Proyectos</h2>
    <p>Se enmarcan en dos grandes ejes de actuación</p>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-6 ">
                    <h4>Educación</h4>
                    <p>Dotar de habilidades en el aprendizaje de la Cultura Empresarial para lograr el éxito personal y profesional, con la metodología a través de las expresiones del Arte.</p>
                    <p>Con la colaboración de Instituciones Educativas, Técnicas, Cientificas, Tecnologicas del sector gubernamental, privado e internacional. La fundación PROCEM une esfuerzos para lograr formar, educar y cultivar la Cultura Empresarial.
                    </p>
            </div>
            <div class="col-md-6 mt-md-0 mt-6 ">
                        <div class="columnas">
                        <h4>Integracion Social</h4>
                        <p>Aportamos en el desarrollo de las Culturas Artísticas, Sociales, Económicas y RSE las cuales forman una Cultura Empresarial. Hemos estalecido un espacio de expresión motivación y cultura el cual es el camino para la transformación
                                social.</p>
                            <p>Esta trasnformación social está diseñada para la autogestión, autosuficiencia y socioeconomica.</p>
                        </div>
            </div>
        </div>
    </div>
</DIV>

<!-- NUESTROS MIEMBROS -->
<div class="team" id="team">
    <div class="container" id="equipo">
<!-- FUNDADORES -->
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-6">
           
        <img class="mostrar" src="../../img/perfiles/DanielVAguirre1.jpeg" alt="" id="daniel"> 
        </div>
        <div class="col-md-6 mt-md-0 mt-6">   
        <div id="texto-d">
            <h2><strong>Daniel Villa Aguirre</strong></h2>
            <h3>Presidente de la Fundación</h3>
            <p>Distinguidos amigos,
            </br>
            </p>
                <p>La Cultura Empresarial a través de las Artes es útil en el campo de la innovación, también existen las rutas de inspiración para encontrar nuevas ideas.</p>
                <p>El arte fomenta, el desarrollo personal, elemento que ayuda a las empresas a motivar, comprometer y empoderar y a su vez, a trabajar en el liderazgo de los directivos</p>
                <p>El arte origina nuevas vías de comunicación, nuevas comunidades y formas de relacionarse y conectarse con la audiencia, con la sociedad como marco de una Cultura Empresarial.</p>
                <p>Panamá tiene el privilegio de contar con panameños creativos, emprendedores y nuestra misión es lograr que se empoderen de estos atributos con nuestra guías.</p>
                <p>Los invito a formar parte de nuestra fundación, brindandonos su apoyo, siendo parte de ese granito de arena que necesitamos para llegar cada vez más lejos.</p>
                </br>
                <p>Magister. Daniel Villa Aguirre</p>
            </div>
        </div>
        <div class="col-md-6 mt-md-0 mt-6 " >
        <img class="mostrar" src="../../img/perfiles/Yomare.jpg" alt=""  id="yomare"> 
            </div>
        <div class="col-md-6 mt-md-0 mt-6">
            <div class="centro" id="texto-y">
                <br>
                <br>
                <h3>Yomare Vega de Bustos</h3>
                <p>
                Nuestra Fundadora es escritora e investigadora, fue trabajadora Social Maestra y Profesora de Inglés, colaborando como asesora en los conceptos de Cultura Empresarial.
                En 2011 inicia a la creación de la FUNDACIÓN PROCEM a través de las Artes, con el fin de apoyar, crear y difundir la Cultura Empresarial y las Artes.
                Asi mismo, logra rendir un homenaje a todos los rostros a nivel Nacional e Internacional de educadores, empresarios, deportistas, médicos, escritores y activistas de las diferentes culturas que forman una cultura Empresarial.
                Actualmente está dedicada a exponer sus obras de Cultura Empresarial, Novelas y la realización de proyectos de la Fundación.
                </p>
                <br>
                <p>
                Le agrádesemos a nuestra gestora la generosidad de Donar las ganancias de sus libros de enseñanza de la Cultura Empresarial y sus materiales didácticos a la Fundación Procem Internacional de Panamá, para que se lleven a cabo todos los proyectos y que la Fundación sea autosostenible.
                </p>
            </div>
        </div>

    </div>
</div>
</div>
</div>



<!-- FIN NUESTROS MIEMBROS -->

<?php include '../Partials/footer.php'; ?>


</body>
</html>