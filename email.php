<?php
  $emisor  = ($_POST['correo']);
  $receptor = "bsdesarrollo.cr@gmail.com";
  $asunto = "Contacto de sitio web";
  $mensaje = ($_POST['comentario']);

  $cabeceras = 'From:<'.$emisor.'>' . "\r\n" .
    'To:<'.$receptor.'>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  
  if(@mail($emisor, $receptor, $asunto, $mensaje, $cabeceras))
  {
      echo "El email se envió correctamente a ".$receptor;
   }
  else{
      echo "El email no se pudo enviar.";
  }
?>