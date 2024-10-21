<?php
$amount = $_GET['amt'];

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <TItle>Procem Internacional</TItle>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/animaciones.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/principal.css" rel="stylesheet">
    <script src="../js/tienda.js"></script>
    <script src="../controller/carrito.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://secure.paguelofacil.com/HostedFields/vendor/scripts/PFScript.js"></script>
    <script src="https://checkout.paguelofacil.com/pf_collect.min.js"> </script> 
</head>
<body>

<div class="container general cajapago">
    
    <h4>Información de Cliente</h4>
    <form action="../Models/pay.php" method="POST">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-6">
        <div class="form-row">
        <input type="hidden" class="form-control" id="monto" name="monto" value="<?php echo $amount?>">
                <div class="form-group col-12">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo@correo.com">
                </div>
                <div class="form-group col-6">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" requerid>
                </div>
                <div class="form-group col-6">
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido" requerid>
                </div>
                <div class="form-group col-12">
                <input type="text" class="form-control" id="org" name="org" placeholder="Organización/Empresa" >
                </div>
                <div class="form-group col-6">
                <input type="text" class="form-control" id="pais" name="pais" placeholder="Pais">
                </div>
                <div class="form-group col-6">
                <input type="text" class="form-control" id="prov" name="prov" placeholder="Provincia">
                </div>
                <div class="form-group col-12">
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                </div>
                <div class="form-group col-6">
                <input type="text" class="form-control" id="Telefono" name="telefono" placeholder="Telefono">
                </div>

        </div>
<hr>
<h4>Información de Pago</h4>
        <div class="form-row">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="carType" id="exampleRadios1" value="VISA" >
            <img src="../img/f-icons/visa.png" alt="" style="height: 40px;">
            <!-- <label class="form-check-label" for="exampleRadios1">
               Visa
            </label> -->
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="carType" id="exampleRadios1" value="MASTERCARD" >
            <img src="../img/f-icons/mc.png" alt="" style="height: 40px;">
            <!-- <label class="form-check-label" for="exampleRadios1">
                Mastercard
            </label> -->
            </div>

                <div class="form-group col-12">
                <input type="text" class="form-control" id="credit_card" name="credit_card" placeholder="Número de Trajeta">
                </div>
                <div class="form-group col-12">
                <input type="text" class="form-control" id="nombre_titular" name="nombre_titular" placeholder="Nombre del titular">
                </div>
                <div class="form-group col-6">
                <input type="text" class="form-control" id="fecha_v" name="fecha_v" placeholder="Fecha de vencimiento (MM/AA)">
                </div>
                <div class="form-group col-6">
                <input type="password" class="form-control" id="credit_card_cvc" name="credit_card_cvc" placeholder="Código de seguridad">
                </div>
        </div>
        </div>

<!-- FIN ROW -->
        <!-- </div> -->

        <div class="col-md-6 mt-md-0 mt-6">
            <div class="id_venta" >
            <div class="container" style="text-align:center">
            <img src="../img/procem/logo.jpg" alt="">
            <hr>
            <div class="row">
            <div class="col-6">
                <h3 >Total: </h3>
                </div>
                <div class="col-6">
                <H3>$ <?php echo $amount?></H3>
                </div>
            </div>

            </div>
            </div>
        </div>
    </div>
    <button type="submit" formaction="principal.php" class="btn btn-primary">Volver</button>
    <button type="submit" class="btn btn-primary">Realizar Pago</button>
    </form>
</div>


    <!-- <div class="row">
        <div class="col-md-6 mt-md-0 mt-6">
        <form action="../Models/pay.php" method="POST"> -->
  <!-- <label for="fname">First name:</label> -->

  <!-- <input type="text" id="monto" name="monto" value="120.00" placeholder="nombre"><br><br>
  <input type="text" id="monto" name="monto" value="120.00" placeholder="nombre"><br><br>
  <input type="text" id="nombre" name="nombre" value=""><br><br> -->
  <!-- <input type="hidden" id="descripcion" name="descripcion"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br> -->
  <!-- <input type="submit" value="Submit">
</form>
        </div>
        <div class="col-md-6 mt-md-0 mt-6">
            <script>arr()</script>
        </div>

    </div> -->

 <script src="../js/bootstrap.min.js"></script>
        <script src="../js/funciones.js"></script>
        <script src="../js/tienda.js" ></script>
        <script src="../controller/carrito.js"></script>

        <script src="../js/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>