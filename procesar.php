<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    mail("tu_correo@dominio.com", "Nuevo mensaje de contacto", $mensaje);
    echo "Mensaje enviado.";
  }
?>
