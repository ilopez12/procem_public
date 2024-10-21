<?php
include_once("../../models/conexion.php");
$correo = $_GET['nos'];

if ( ($correo == 'csalud') or ($correo == 'ctecnologica')or ($correo == 'ceducanda')or ($correo == 'cpopular')or ($correo == 'cexportadora')or ($correo == 'bilingue')){
   ?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Más</TItle>
    <link href="../../img/favicon.png" rel="icon">
    <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link href="../../css/general.css" rel="stylesheet">
    <link href="../../css/animaciones.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/principal.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/principal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body>
    <div class="caja">
        <img class="plearning_banner2 hvr-underline-from-center" src="../../img/slide/slide-4.jpg" alt="">
            <div class="texto1 text-uppercase"><a href="cultural.php#<?php echo $correo?>">Volver a las Culturas</a></div>
    </div>
    <div class="container">
        <div class="row">
            <div style="text-align: center;" class="col-md-6 mt-md-0 mt-6 general">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                if ($correo == 'ceducanda'){
                ?>
                <div class="carousel-item active">
                        <img src="../../img/culturaempresarial/ceducanda.jpg" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ceducanda1.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ceducanda2.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ceducanda3.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ceducanda4.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ceducanda5.png" class=" d-block w-50" alt="...">
                        </div>

                <?php
                }
                if ($correo == 'csalud'){
                    ?>
                                    <div class="carousel-item active">
                        <img src="../../img/culturaempresarial/csalud.jpg" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/csalud1.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/csalud2.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/csalud3.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/csalud.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/csalud5.png" class=" d-block w-50" alt="...">
                        </div>
                    <?php
                }
                if ($correo == 'ctecnologica'){
                    ?>
                        <div class="carousel-item active">
                        <img src="../../img/culturaempresarial/ctecnologica.jpg" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ctecno1.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ctecno2.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ctecno3.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ctecno5.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/ctecno6.png" class=" d-block w-50" alt="...">
                        </div>
                    <?php
                }
                if ($correo == 'cpopular'){
                    ?>
                        <div class="carousel-item active">
                        <img src="../../img/culturaempresarial/cpopular.jpg" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/cpopular1.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/cpopular2.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/cpopular3.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/cpopular4.png" class=" d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../img/culturaempresarial/cpopular1.png" class=" d-block w-50" alt="...">
                        </div>
                    <?php
                }
                if ($correo == 'exportadora'){
                    ?>
                        <img src="../../img/culturaempresarial/cexportadora.jpg" class="d-block w-50" alt="...">
                    <?php
                }
 				 if ($correo == 'bilingue'){
                    ?>
                        <img src="../../img/culturaempresarial/cbilingue1.png" class="d-block w-50" alt="...">
                    <?php
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
            </div>
            <div class="col-md-6 mt-md-0 mt-6 general">
                <?php
                if ($correo == 'ceducanda'){
                ?>
                <h3><strong>CULTURA EDUCANDA</strong></h3>
                    <H4>SOSTENIBILIDAD</H4>
                    <p>Es una Cultura de Liderazgo y un modelo para las futuras generaciones. </p>
                <?php
                }
                if ($correo == 'csalud'){
                    ?>
                    <h3><strong>CULTURA SALUD</strong></h3>
                    <h4> Integridad</h4>
                    <p>Ambiente en el que el cumplimiento es un enfoque y compromiso fundamental.</p>
                    <?php
                }
                if ($correo == 'ctecnologica'){
                    ?>
                    <h3><strong>CULTURA TECNOLOGÍCA</strong></h3>
                    <h3> Personas</h3>
                    <p>Nos preocupamos y respetamos a todos los Individuos. <br>Utilizamos nuestros conocimientos para apoyar a las demas culturas a desarrollarse de una mejor manera.</p>
                    <?php
                }
                if ($correo == 'cpopular'){
                    ?>
                    <h3><strong>CULTURA POPULAR</strong></h3>
                    <h3> Clientes</h3>
                    <p>Una Cultura Centrada en el Pueblo. <br>Representa esa ecología del espíritu imprescindible para la reproducción de un socio-cultura.</p>
                    <?php
                }
                if ($correo == 'exportadora'){
                    ?>
                    <h3><strong>CULTURA EXPORTADORA</strong></h3>
                    <h3> Resultados</h3>
                    <p>Pasión por lograr objetivos y cumplir metas que ayuden al pueblo a crecer.</p>
                    <?php
                }
  				if ($correo == 'bilingue'){
                    ?>
                    <h3><strong>CULTURA BILINGUE</strong></h3>
                    <h3> Panamá País de Numerosas lenguas</h3>
                    <p>La cultura Bilingue esta enfocada en estos momentos en el idioma "Inglés"<br>
Históricamente en Panamá este idioma lo asociamos comunmente con los Estados Unidos de América no siendo así la veracidad total, podemos decir que parte de la cultura bilingue (inglés) se lo debemos a nuestros afro descendientes.
              <br>En el siglo XIX la inmigración de ellos, por la contrucción del Ferrocaril, y el Canal a fines del siglo XX, teniendo su idioma el Inglés.<br>Nuestros afro descendientes han aportado, no solamente en lo cultural, también en el idioma, su lengua nativa, religión, social, económico y politíco.<br>
              Podemos mencionar en literatura, a nuestro primer poeta de ascendencia africana, José Dolores Urrriola (1834-1883), quien a su vez luchó por la Independencia de Panamá.<br>El mulato Urriola, en su lucha por nuestra patria, escribío "El Poema Satírico contra el General Mosquera" presidente.</p>
                    <?php
                }
                ?>

            </div>

        </div>

    </div>
    <script src="../../js/principal.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/funciones.js"></script>

        <script src="../../js/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                });
            });
        </script>
</body>
</html>
   
   <?php
}
else{
    header('Content-Type: text/html; charset=UTF-8');
    $buscar = 'SELECT * FROM miembros_procem WHERE EMAIL = "'.$correo.'" ORDER BY NUMERO';
    $result =  $GLOBALS["conn"]->query($buscar);
    
    $value = mysqli_fetch_array($result);
    
                $nombre         = $value['nombre']." ".$value['apellido'];
                $origen         = $value['nacionalidad'];
                $Estado_civil   = $value['estado_civil'];
                $Estudios       = $value['estudios'];
                $Experiencia    = $value['experiencia'];
                $aficion        = $value['aficion'];
                $foto           = substr($value['imagen'],11);
           //     echo $foto;

?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Más</TItle>
    <link href="../../img/favicon.png" rel="icon">
    <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link href="../../css/general.css" rel="stylesheet">
    <link href="../../css/animaciones.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/principal.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/principal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body>
    <div class="caja">
        <img class="plearning_banner2 hvr-underline-from-center" src="../../img/slide/slide-4.jpg" alt="">
            <div class="texto1 text-uppercase"><a href="nosotros.php#<?php echo $correo?>">Volver a Nosotros</a></div>
    </div>
    <div class="container">
        <div class="row">
            <div style="text-align: center;" class="col-md-6 mt-md-0 mt-6 general">
                <img style="width: 50%;height: 100%;" class="imagen_donaciones general" src="../../img/perfiles/<?php echo $foto ?>" alt="">
            </div>
            <div class="col-md-6 mt-md-0 mt-6 general">
                <h3 class="general"><strong><?php echo $nombre ?></strong></h3>
                <p>Origen: <?php echo $origen ?></p>
                <p>Estado Civil: <?php echo $Estado_civil ?></p>
                <p>Estudios: <?php echo $Estudios ?></p>
                <p>Experiencia: <?php echo $Experiencia ?></p>
                <p>Aficiones: <?php echo $aficion ?></p>
            </div>

        </div>

    </div>
</body>
</html>
<?php

}
?>

