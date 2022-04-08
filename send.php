<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['msg'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'natanael.96.01@gmail.com';
$asunto = 'Mensaje de mi PORTAFOLIO';

mail($para, $asunto, utf8_decode($msg), $header);

header("Location:index.html");
?>