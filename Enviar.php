<?php
  $destino="franciscocharrisc@gmail.com";
  $NOMBRE = $_POST["nombre"];
  $CORREO = $_POST["correo"];
  $TELEFONO = $_POST["telefono"];
  $Mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre ."\nCorreo" .$correo. "\nTelefono".$telefono. "\nMensaje: . $mensaje";
  mail($destino,"Contacto",$contenido);
  header("Location:gracias.html");
?>