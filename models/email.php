<?php
require("class.phpmailer.php");
require("class.smtp.php");

$nombre     = $_POST['nombre'];
$telefono   = $_POST['tel'];
$email      = $_POST['email'];
$asunto     = $_POST['asunto'];
$mensaje    = $_POST['mensaje'];

$asunto1    = '[Correo generado desde la web] '.$asunto;
$mensaje1 .= $nombre.' Desea comunicarse con la Fundación';
$mensaje1 .= '<br><br> Asunto: '.$asunto;
$mensaje1 .= '<br> Mensaje: '.$mensaje;
$mensaje1 .= '<br><br><br> Comunicar su respuesta al correo: '.$email. ' o a la línea '.$telefono ;
// $Mensaje .= 'Correo: '.$nombre ;

echo $nombre .''.$telefono.' - '.$nombre.' - '.$asunto.' - '. $mensaje ;


$mail = new PHPMailer();
// $mail->IsSMTP();
$mail->SMTPAuth = true;
// $mail->SMTPSecure = "ssl";
// $mail->Mailer = "smtp";
$mail->Host = "panel5.servidoresrapidos.net";
// $mail->Port = 465;
$mail->Username = "contacto@fundacionprocem.org";
$mail->Password = "Contacto-2022";

$mail->From = "contacto@fundacionprocem.org";

//nombre cliente
$mail->FromName = 'Consulta Enviada por '.$nombre;
$mail->Subject  = $asunto;
$mail->AltBody  = "";
echo $mail->Password;
$mail->MsgHTML($mensaje1);
$mail->AddAddress("contacto@fundacionprocem.org", "Contacto Procem");

$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';

if($mail->Send()){
   
    header("Location: ../views/principal/contactenos.php?df=1");
    
    }else{
  //    echo "Mal";
    }


?>