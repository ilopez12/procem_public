<?php
 
$amount             = $_POST['monto'];
$description        = $_POST['nombre'].' '.$_POST['apellido'];
$credit_card        = $_POST['credit_card'];
$credit_card_cvc    = $_POST['credit_card_cvc'];
$credit_card_month  = substr($_POST['fecha_v'],0,2);
$credit_card_year   = substr($_POST['fecha_v'],3,2);


$urlConfig = "https://sandbox.paguelofacil.com/rest/processTx/AUTH_CAPTURE";

$cclw = '8935DA0CC99B36FEC26A5CFB27965D89FD50D74952245689A2D999342A8D7C34B8017D6F211D518096D1F731D7BE57E2BBE9AAD2028894BE1600ADC39EC7CB84';
// $amount=3.50;//El monto o valor total de la transacción a realizar. NO PONER
// $description='Nro-Order-523';//MaxLength:150 ;Es la descripción o el motivo de la transacción en proceso
// $credit_card='4916000000000000';
$carType = $_POST['carType'];
// $credit_card_month="12";//Mes de expiración de la tarjeta, siempre 2 dígitos
// $credit_card_year="32";//Numeric Ej.:02 Año de expiración de la tarjeta.
// $credit_card_cvc="003";//Código de Seguridad de la tarjeta Numeric MaxLength:3

$name       =  $_POST['nombre'];//String MaxLength:25 Nombre del tarjeta habiente
$lastname   =  $_POST['apellido'];//String MaxLength:25 Apellido del Tarjeta habiente
$email      =  $_POST['correo'];//String MaxLength:100 Email del
$address    =  $_POST['direccion'];//String MaxLength:100 Dirección del Tarjeta
$phone      =  $_POST['telefono'];//Numeric MaxLength:16 Teléfono del Tarjeta habiente

    $data = array(
        "cclw" =>  $cclw ,
        "amount" => $amount,
        "taxAmount" => 1.00,
        "email" => $email,
        "phone" => $phone,
        "address" => $address,
        "concept" => $description,
        "description" => $description,
        "ipCheck" => '100.23.45.51',
        "lang" => 'ES', //EN
        "customFieldValues"  => [["id"=>"idOrder","nameOrLabel"=>"Nro de Orden","value"=>"OD-234567"],
                            ["id"=>"idUser","nameOrLabel"=>"User","value"=>"24"],
                              ["id"=>"idTx","nameOrLabel"=>"Txtx","value"=>"678643"],
                                ["id"=>"reference","nameOrLabel"=>"Referencia","value"=>"6754"],
                            ["id"=>"activo","nameOrLabel"=>"estado","value"=>"true"]],
        "cardInformation" => array(
            "cardNumber" => $credit_card,
            "expMonth" => $credit_card_month,
            "expYear" => $credit_card_year,
            "cvv" => $credit_card_cvc,
            "firstName" => $name,
            "lastName" => $lastname,
            "cardType" => $carType,
        )
    );


$json=json_encode($data);

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $urlConfig);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','authorization:WT5hTaUcpa4J3h4AmrZa2EXXJs8boUVa|DIRd852djHbq2j5Fca5VDUkDbExTBCVf'));
curl_setopt($ch,CURLOPT_POSTFIELDS,$json);

$result = curl_exec($ch);


$result = json_decode($result, true);
// var_dump($result);
if( $result['success']== true){
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

    <script src="../js/tienda.js"></script>
    <script src="../controller/carrito.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://secure.paguelofacil.com/HostedFields/vendor/scripts/PFScript.js"></script>
    <script src="https://checkout.paguelofacil.com/pf_collect.min.js"> </script> 
</head>
<body>
<div class="container" style="text-align:center">
    <img src="../img/procem/logo.jpg" alt="">
    <H3>Transacción Aprobada</H3>
</div>

<script src="../js/bootstrap.min.js"></script>
        <script src="../js/funciones.js"></script>
        <script src="../js/tienda.js" ></script>
        <script src="../controller/carrito.js"></script>

        <script src="../js/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php

}else{
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

    <script src="../js/tienda.js"></script>
    <script src="../controller/carrito.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://secure.paguelofacil.com/HostedFields/vendor/scripts/PFScript.js"></script>
    <script src="https://checkout.paguelofacil.com/pf_collect.min.js"> </script> 
</head>
<body>
<div class="container" style="text-align:center">
<img src="../img/procem/logo.jpg" alt="">
    <H3>TRANSACCIÓN RECHAZADA</H3>
    <p>Favor verificar los datos ingresados</p>
</div>
<script src="../js/bootstrap.min.js"></script>
        <script src="../js/funciones.js"></script>
        <script src="../js/tienda.js" ></script>
        <script src="../controller/carrito.js"></script>

        <script src="../js/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
}



// $hash = $credit_card.$credit_card_cvc.$email;
// $data = array(
// "CCLW" => $cclw ,
// "txType" => 'SALE',
// "CMTN" => $amount,
// "CDSC" => $descrition,
// "CCNum" => $credit_card,
// "ExpMonth" => $credit_card_month,
// "ExpYear" => $credit_card_year,
// "CVV2" => $credit_card_cvc,
// "Name" => $name,
// "LastName" => $lastname,
// "Email" => $email,
// "Address" => $address,
// "Tel" => $phone,
// "Ip"=>$ip,
// "SecretHash" => hash('sha512', $hash),
// );
// $postR="";
// foreach($data as $mk=>$mv) { $postR .= "&".$mk."=".$mv; }
// $ch = curl_init();
// curl_setopt($ch,CURLOPT_URL, "https://sandbox.paguelofacil.com/rest/ccprocessing/");
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
// curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Accept: */*'));
// curl_setopt($ch,CURLOPT_POSTFIELDS,$postR);
// $result = curl_exec($ch);
?>

