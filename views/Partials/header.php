<?php
// Unifica HEAD/JS y usa SIEMPRE Bootstrap 5.3.3.
// Detecta si estás en la home para resolver rutas relativas correctamente.
$ruta   = $_SERVER["REQUEST_URI"] ?? '/';
$isHome = ($ruta === '/' || $ruta === '/index.php');
$prefix = $isHome ? '' : '../../';
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PROCEM</title>

  <!-- Favicon / Icons -->
  <link rel="icon" href="<?= $prefix ?>img/favicon.png" sizes="32x32">
  <link rel="apple-touch-icon" href="<?= $prefix ?>img/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?= $prefix ?>img/procem/logo.png">

  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 (MISMO EN TODAS LAS PÁGINAS) -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  >

  <!-- Vendors opcionales -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    integrity="sha512-b7fQj8a9G4b9j3QwVfP1xK1m2o9F5Vbqz3cIuCk3rW8r3G3xqCwqf8YxGm8Yc9iO3nZ1m7C7h7b6k9X2Y5h4gw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"
  >
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

  <!-- Tus CSS (NO incluir bootstrap.min.css local) -->
  <link href="<?= $prefix ?>css/general.css" rel="stylesheet">
  <link href="<?= $prefix ?>css/animaciones.css" rel="stylesheet">
  <link href="<?= $prefix ?>css/principal.css" rel="stylesheet">
  <link href="<?= $prefix ?>css/style.css" rel="stylesheet">
  <link href="<?= $prefix ?>css/jquery.bsPhotoGallery.css" rel="stylesheet">
</head>

<body>
  <header>
    <!-- Barra superior (opcional) -->
    <div style="background-color:#1B4F72; height:50px;"></div>

    <!-- NAVBAR Bootstrap 5 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sombra">
      <div class="container">
        <a class="navbar-brand" href="<?= $prefix ?>index.php">
          <img class="icop" style="width:115px;" src="<?= $prefix ?>img/procem/logo.png" alt="PROCEM">
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/nosotros.php">Quienes Somos</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/cultural.php">Cultura Empresarial</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/vecto.php">Vector Empresarial Estudiantil</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/inolace.php">INOLACE</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/Eventos.php">Eventos</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/EventosGaleria.php">Galería</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/donaciones.php">Donaciones</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?= $prefix ?>views/principal/contactenos.php">Contáctanos</a></li>
          </ul>

          <!-- Botón donación (derecha) -->
          <div class="d-none d-lg-block">
            <a class="btn btn-primary text-uppercase" href="<?= $prefix ?>views/principal/donaciones.php">Haz una donación</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- CONTENIDO -->
  <main class="container my-4">
    <?php
      // Aquí va el contenido de cada página
      // include ... o tu HTML/PHP específico
    ?>
  </main>

  <!-- FOOTER (opcional)
  <footer class="bg-light py-4 mt-auto">
    <div class="container text-center">
      <small>&copy; <?= date('Y') ?> PROCEM. Todos los derechos reservados.</small>
    </div> -->
  <!-- </footer> -->

  <!-- ======== JS al final (mismo Bootstrap) ======== -->

  <!-- jQuery (solo si tus plugins lo requieren, p.ej. bsPhotoGallery) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
          integrity="sha512-v2CJ7UaYy4JwqLDsGQ9GQ5nqQ7Qe2wzO3n8ZfGfE1Gk1S0Yx1I3X3JmE9gZC1mNw2e5mG3Vw5XKk6x3lZ8a5wQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Bootstrap 5 bundle (incluye Popper) -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous" defer
  ></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>

  <!-- Plugins locales -->
  <script src="<?= $prefix ?>js/jquery.bsPhotoGallery.js" defer></script>

  <!-- SMTP.js (si lo usas para formulario de contacto) -->
  <script src="https://smtpjs.com/v3/smtp.js" defer></script>

  <!-- Script propio -->
  <script src="<?= $prefix ?>js/principal.js" defer></script>

  <!-- Inicializaciones -->
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      if (window.AOS) AOS.init({ once: true });

      // Ejemplo: inicializar tu galería si corresponde
      // if (window.jQuery && typeof jQuery.fn.bsPhotoGallery === 'function') {
      //   jQuery('.gallery').bsPhotoGallery({ classes: 'col-xl-3 col-lg-4 col-md-6', hasModal: true });
      // }
    });
  </script>
</body>
</html>
