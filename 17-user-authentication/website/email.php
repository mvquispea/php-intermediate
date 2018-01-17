<?php

if(!empty($_POST)) {
  $nombre = $_POST['name'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $cuerpo = "Solicitud de información";
  $cuerpo .= "Nombre: $nombre";
  $cuerpo .= "Correo: $correo";
  $cuerpo .= "Mensaje: $mensaje";

  mail("marco.milon@gmail.com", "Solicitud de información", $cuerpo);

  header("Location: gracias.php");

}

?>
