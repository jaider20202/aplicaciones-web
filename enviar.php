<?php

$destinatario = 'kevin219646gmail.com';
$asunto = 'Informaciòn actualizada de futbol';

$usuario = $_POST['nombre'];
$usuarioa = $_POST['apellido'];
$remitente = $_POST['mail'];
$proyecto = $_POST['comentarios'];
$liga = $_POST['liga'];
$edad =  $_POST['edad']."€";

if (!$_POST){
?>
<?php
}else{

  $cuerpo = "<span style='color:#781D22'>
    Petición de información de
  </span>: " . $usuario . "<br>"; 

  $cuerpo .= "<span style='color:#781D22'><b>
    Email
  </b></span>: " . $remitente . "<br><br><dd>";

  $cuerpo .= "<span style='color:#781D22'>
    Descripción del proyecto
  </span>: " . $proyecto . "<br>";

  $cuerpo .= "<span style='color:#781D22'>
    Estado actual</span>: " .
  $estado . "<br>";

  $cuerpo .= "<span style='color:#781D22'><b>
    Presupuesto aproximado
  </b></span>: " . $presu . "</dd>";

  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From:".$remitente."\r\n";

  mail($destinatario, '=?UTF-8?B?'.base64_encode($asunto).'?=',
  $cuerpo, $headers);
    
  include 'confirma.html';
}
?>