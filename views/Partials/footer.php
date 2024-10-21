<?php
$ruta = $_SERVER["REQUEST_URI"];
   if ($ruta == '/' || $ruta == '/index.php' ){
    ?>
    <!-- FOOTER -->
        <footer class="page-footer font-small blue pt-4" style="background-color: #1B4F72; color: white;">
        <!-- Footer Links -->
        <div class="container container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
            <div class="col-md-4 mt-md-0 mt-4 general">
                    <!-- Content -->
                    <h5 class="text-uppercase hvr-underline-from-left">Procem Internacional</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="views/principal/nosotros.php">Quienes Somos</a></li>
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="https://p-campus.fundacionprocem.org/">Procem P-CAMPUS</a></li>
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="views/principal/vecto.php">Vector Empresarial</a></li>
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="views/principal/inolace.php">INOLACE</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-md-0 mt-4">
                <h5 class="centro text-uppercase hvr-underline-from-left">Contáctanos</h5>
                <div class="general">
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="https://api.whatsapp.com/send?phone=[507][62786234]" data-toggle="tooltip" data-placement="bottom" title="+507 62786234">
                            <img class="redicon" src="img/f-icons/bwhats.png" alt=""></a>
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="mailto:info@fundacionprocem.org" data-toggle="tooltip" data-placement="bottom" title="info@fundacionprocem.org">
                            <img class="redicon" src="img/f-icons/bemail.png" alt=""></a>
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="https://www.facebook.com/fundeprocem/" data-toggle="tooltip" data-placement="bottom" title="fundeprocem">
                            <img class="redicon" src="img/f-icons/bfb.png" alt=""></a>
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="https://www.instagram.com/fundacion_procem/" data-toggle="tooltip" data-placement="bottom" title="@fundacion_procem">
                            <img class="redicon" src="img/f-icons/big.png" alt=""></a>
                </div>
                </div>
                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-4 general" style="padding-left: 20px;">
                    <!-- Content -->
                    <h5 class="text-uppercase hvr-underline-from-left">Ubicación</h5>
                    <ul class="list-group list-group-flush">
                        <p class="p_animatio hvr-float-shadow" >Panamá</p>
                        <p class="p_animatio hvr-float-shadow" >Brisas del Golf, Plaza Providence, N° 3-10</p>
                    </ul>
                    <h5 class="text-uppercase hvr-underline-from-left">Horario</h5>
                    <ul class="list-group list-group-flush">
                        <p class="p_animatio hvr-float-shadow" href="#">Lun - Vie: 8:00 AM 5:00 PM </p>
                        <p class="p_animatio hvr-float-shadow" href="#">Sábados: 9:00 AM 12:00 PM</p>
                    </ul>

                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="sombra text-center py-3">&copy; 2021 Copyright: Fundación PROCEM</div>
        <!-- Copyright -->
        </footer>
        <!-- FIN FOOTER -->
        <script src="js/principal.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/funciones.js"></script>
        

        <script src="js/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script  src=" jquery.min.js"> </script>

        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                });
            });
        </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <?php
    }else{
    ?>
        <!-- FOOTER -->
        <footer class="page-footer font-small blue pt-4" style="background-color: #1B4F72; color: white;">
        <!-- Footer Links -->
        <div class="container container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
            <div class="col-md-4 mt-md-0 mt-4 general">
                    <!-- Content -->
                    <h5 class="text-uppercase hvr-underline-from-left">Procem Internacional</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="views/principal/nosotros.php">Quienes Somos</a></li>
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="https://p-campus.fundacionprocem.org/">Procem P-CAMPUS</a></li>
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="views/principal/vecto.php">Vector Empresarial</a></li>
                        <li class="list-group-item"><a class="p_animatio hvr-float-shadow text-uppercase" href="views/principal/inolace.php">INOLACE</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-md-0 mt-4">
                <h5 class="centro text-uppercase hvr-underline-from-left">Contáctanos</h5>
                <div class="general">
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="https://api.whatsapp.com/send?phone=[507][62786234]" data-toggle="tooltip" data-placement="bottom" title="+507 62786234">
                            <img class="redicon" src="../../img/f-icons/bwhats.png" alt=""></a>
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="mailto:info@fundacionprocem.org" data-toggle="tooltip" data-placement="bottom" title="info@fundacionprocem.org">
                            <img class="redicon" src="../../img/f-icons/bemail.png" alt=""></a>
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="https://www.facebook.com/fundeprocem/" data-toggle="tooltip" data-placement="bottom" title="fundeprocem">
                            <img class="redicon" src="../../img/f-icons/bfb.png" alt=""></a>
                        <a class="padd-all p_animatio hvr-float-shadow" target="_blank" href="https://www.instagram.com/fundacion_procem/" data-toggle="tooltip" data-placement="bottom" title="@fundacion_procem">
                            <img class="redicon" src="../../img/f-icons/big.png" alt=""></a>
                </div>
                
                </div>
                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-4 general" style="padding-left: 20px;">
                    <!-- Content -->
                    <h5 class="text-uppercase hvr-underline-from-left">Ubicación</h5>
                    <ul class="list-group list-group-flush">
                        <p class="p_animatio hvr-float-shadow" >Panamá</p>
                        <p class="p_animatio hvr-float-shadow" >Brisas del Golf, Plaza Providence, N° 3-10</p>
                    </ul>
                    <h5 class="text-uppercase hvr-underline-from-left">Horario</h5>
                    <ul class="list-group list-group-flush">
                        <p class="p_animatio hvr-float-shadow" href="#">Lun - Vie: 8:00 AM 5:00 PM </p>
                        <p class="p_animatio hvr-float-shadow" href="#">Sábados: 9:00 AM 12:00 PM</p>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="sombra text-center py-3">&copy; 2021 Copyright: Fundación PROCEM</div>
        <!-- Copyright -->
        </footer>
        <!-- FIN FOOTER -->
        <script src="../../js/principal.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/funciones.js"></script>

        <script src="../../js/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        
    <!-- <! - Un complemento de jQuery que agrega compatibilidad con la rueda del mouse entre navegadores. (Opcional) ->  -->
    <script  src = " https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js "> </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<script script  src = "js/lightgallery.min.js" > </script>

<!-- <! - complementos de la galería de luz ->  -->
<script script  src = "../../js/lg-thumbnail.min.js" > </script> 
<script script  src = "../../js/lg-fullscreen.min.js" > </script> 

    <?php
    }
?>

