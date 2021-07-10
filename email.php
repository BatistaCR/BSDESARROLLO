<?php
  $emailCC  = ($_POST['correo']);
  $destinatario = "alexbatistacr@gmail.com";
 
  $asunto = "Contacto de sitio web";
  
  $mensaje = ($_POST['comentario']);
   
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
  $cabeceras .= 'To:<alexbatistacr@gmail.com>' . "\r\n";
  $cabeceras .= 'From:<'.$emailCC.'>' . "\r\n";
  
  if(@mail($destinatario, $asunto, $mensaje, $cabeceras))
  {
      echo "El email se envió correctamente a ".$destinatario.".";
   }
  else{
      echo "El email no se pudo enviar.";
  }
?>