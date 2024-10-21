<?php
// $ruta = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$ruta = $_SERVER["REQUEST_URI"];

    if ($ruta == '/' || $ruta == '/index.php' ){
    ?>
<link rel="shortcut icon" href="img/procem/logo.png">
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link href="css/general.css" rel="stylesheet">
    <link href="css/animaciones.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.bsPhotoGallery.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<link  rel = " stylesheet " href = " https://unpkg.com/aos@next/dist/aos.css " />
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/principal.js"></script>
    <script src="js/jquery.bsPhotoGallery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
    <body>
    <header>
        <div class="divnavbar">
        <div style="background-color: #1B4F72; height: 50px;">
        <div class="row">

            <div class="col-10" style=" text-align: center;">
            <span class="text"><a  href="https://p-campus.fundacionprocem.org/" style="color: #fcfcfc;font-size: 18px;" > CONOCE P-CAMPUS</a>
            </div>
            <div class="col-1">
                <a href="views/principal/pronto.php"><img style="width: 50px;" src="img/f-icons/tienda.png" alt=""></a>
            
            </div>

        </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light sombra">
                        <a class="navbar-brand" href="/index.php"><img class="icop" style="width: 115px;" src="img/procem/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li id="index.php" class="nav-item active ">
                                    <a class="nav-link text-uppercase " href="../../index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li id="nosotros.php" class="nav-item"><a class="nav-is nav-link text-uppercase" href="views/principal/nosotros.php">Quienes Somos</a></li>
                                <li id="cultural.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/cultural.php ">CULTURA EMPRESARIAL</a></li>
                                <li id="vecto.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/vecto.php">Vector Empresarial Estudiantil</a></li>
                                <li id="inolace.php " class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/inolace.php ">INOLACE</a></li>
                                <li id="Eventos.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/Eventos.php">Eventos</a></li>
                                <li id="EventosGaleria.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/EventosGaleria.php">Galeria</a></li>
                                <li id="donaciones.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/donaciones.php">Donaciones</a></li>
                                <!-- <li id="principal.php" class="nav-item"><a class="nav-link text-uppercase" href="views/principal.php">Ventas</a></li> -->
                                <li id="contactenos.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="views/principal/contactenos.php">Contáctanos</a></li>
                                <!-- <li id="contactenos.php" class="nav-item"><a class="nav-link text-uppercase " href="views/Principal/contactenos.php"><img src="../img/f-icons/store.png" alt=""></a></li> -->
                            </ul>
                        </div>
                </nav>
                <div class="row">
    <div class="col-md-10 mt-md-0 mt-10">
    </div>

    <div class="col-md-2 mt-md-0 mt-2 dona">
        <a class="text-uppercase " href="views/principal/donaciones.php">Haz una donación</a>
    </div>

</div>
        </div>

    </header>
        <!--  FIN NAVBAR -->

        <?php
    }
    else{
    ?>
    <link rel="shortcut icon" href="../../img/procem/logo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link href="../../css/general.css" rel="stylesheet">
    <link href="../../css/animaciones.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/principal.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/general.css" rel="stylesheet">
    <link href="../../css/jquery.bsPhotoGallery.css" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../../js/fresco.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/fresco.css"/>
          
          <link  rel = " stylesheet " href = " https://unpkg.com/aos@next/dist/aos.css " />

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/principal.js"></script>
    <script src="../../js/jquery.bsPhotoGallery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
    <body>
    <header>
    <div class="divnavbar">
        <div style="background-color: #1B4F72; height: 50px;">
        <div class="row">

            <div class="col-10"style=" text-align: center;">
            <span class="text"><a href="https://p-campus.fundacionprocem.org/" style="color: #fcfcfc;font-size: 18px;" > CONOCE P-CAMPUS</a>
            </div>
            <div class="col-1">
            <a href="pronto.php"><img style="width: 50px;" src="../../img/f-icons/tienda.png" alt=""></a>
            <!-- <img style="width: 50px;" src="../../img/f-icons/store.png" alt=""> -->
            </div>

        </div>
                
        </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light sombra">
                        <a class="navbar-brand" href="../../index.php"><img class="icop" style="width: 115px;" src="../../img/procem/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li id="index.php" class="nav-item">
                                    <a class="nav-is nav-link text-uppercase " href="../../index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li id="nosotros.php" class="nav-item"><a class=" nav-is nav-link text-uppercase "  href="nosotros.php">Quienes Somos</a></li>
                                <li id="cultural.php" class="nav-item"><a class=" nav-is nav-link text-uppercase " href="cultural.php ">CULTURA EMPRESARIAL</a></li>
                                <li id="vecto.php" class="nav-item"><a class=" nav-is nav-link text-uppercase " href="vecto.php">Vector Empresarial Estudiantil</a></li>
                                <li id="inolace.php " class="nav-item"><a class="nav-is nav-link text-uppercase " href="inolace.php ">INOLACE</a></li>
                                <li id="Eventos.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="eventos.php">Eventos</a></li>
                                <li id="EventosGaleria.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="eventosgaleria.php">Galeria</a></li>
                                <li id="donaciones.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="donaciones.php">Donaciones</a></li>
                                <!-- <li id="principal.php" class="nav-item"><a class="nav-link text-uppercase" href="views/principal.php">Ventas</a></li>../img/f-icons/store.png -->
                                <li id="contactenos.php" class="nav-item"><a class="nav-is nav-link text-uppercase " href="contactenos.php">Contáctanos</a></li>
                                <!-- <li id="contactenos.php" class="nav-item"><a class="nav-link text-uppercase " href="contactenos.php"><img src="../../img/f-icons/store.png" alt=""></a></li> -->
                            </ul>
                        </div>
                </nav>
                <div class="row">
    <div class="col-md-10 mt-md-0 mt-10">
    </div>

    <div class="col-md-2 mt-md-0 mt-2 dona">
        <a class="text-uppercase " href="donaciones.php">Haz   una   donación</a>
    </div>
        </div>
    </header>
    <?php
    }

?>