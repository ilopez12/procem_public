<?php
    include_once("../Models/busquedas_principal.php");

    $busqueda = buscacategorias();
    $cantidad = mysqli_num_rows($busqueda);
    $a =0;

    while($value = mysqli_fetch_array($busqueda)){
        $nombre[$a] = $value['NOMBRE'];
        $imagen[$a] = substr($value['IMG'],10);
        $id[$a]     = $value['ID_CATEGORIA'];
        $a  = $a+1;
    }
?>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/principal.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/animaciones.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <script src="../js/tienda.js"></script>
    <script src="../controller/carrito.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</HEAD>
<body>
    <div class="row">
        <div id="pag_pricipal" class="col-12">

    <header>
        <div class="logo_panel ">
                <div class="row">
                <div class="col-5">
                <div class="padd-img">
                    <a target="_blank" href="mailto:info@fundacion-procem.org"><img src="../img/f-icons/email.png" alt="" style="width: 25px; height: 25px;"></a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=[507][62786234]"><img src="../img/f-icons/whats.png" alt="" style="width: 25px; height: 25px;"></a>
                    <a target="_blank" href="https://www.facebook.com/fundeprocem/"><img src="../img/f-icons/fb.png" alt="" style="width: 25px; height: 25px;"></a>
                    <a target="_blank" href="https://www.instagram.com/fundacion_procem/"><img src="../img/f-icons/ig.png" alt="" style="width: 25px; height: 25px;"></a>
                </div>
                </div>
                <div class="col-2">
                    <a class="navbar-brand" href="../index.php"><img class="icop" src="../img/procem/logo.jpg" alt=""></a>
                </div>
                <div class="col-5">
                    <!-- <div class="contact-info float-left">
                    <i class="icofont-envelope"></i><a href="mailto:info@fundacion-procem.org">info@fundacion-procem.org</a>
                    <i class="icofont-phone"></i> <a href=" https://api.whatsapp.com/send?phone=[507][63176684] ">+507 6317-6684</a>
                    </div> -->
                    <div class="social-links float-right">
                        <a href="https://twitter.com/fprocem/ " class="twitter"><i class="icofont-twitter"></i></a>
                        <a href="https://www.facebook.com/fundeprocem/ " class="facebook"><i class="icofont-facebook"></i></a>
                        <a href="https://www.instagram.com/fundacion_procem/" class="instagram"><i class="icofont-instagram"></i></a>
                        <div class="padd-img">
                            <!-- <a href=""><img src="../img/f-icons/user.png" alt="" style="width: 25px; height: 25px;"></a> -->
                            <a href="" id="carr" data-toggle="modal" data-target="#myModal"><img src="../img/f-icons/shop1.png" alt="" style="width: 25px; height: 25px;"></a>
                        </div>
                    </div>
                </div>
        </div>
       
            <nav id="navt" class="navbar navbar-expand-lg navbar-light navbarventas">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="height: 100%;">
                <div class="container" style="height: 100%;">
                    <ul class="navbar-nav" style="height: 100%;">
                    <?php

                    for($b = 0; $b < $cantidad; $b++){
                        // echo $nombre[$b];
                        ?>
                         <li class="nav-item lista active"><a class=" text-uppercase" style="color:white;" href="categorias.php?mn=<?php echo $id[$b] ?>&nom=<?php echo $nombre[$b]?>"> <?php echo $nombre[$b]?> </a></li>
                        <?php
                    }

                    ?>
                    </ul>
                </div>
                  
                </div>
            </nav>
     
                </header>
    <!-- End Header -->