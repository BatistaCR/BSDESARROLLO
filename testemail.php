<?php 
     $emailCC  = "soyrandall@hotmail.es";
     $destinatario = "randall_trejos@hotmail.com";
    
     $asunto = "PREGUNTA EN INLECTRIC";
     
     $mensaje = "PREGUNTA EMITIDA<br><br>";
      
     $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
     $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       
     $cabeceras .= 'To:<randall_trejos@hotmail.com>' . "\r\n";
     $cabeceras .= 'From:<'.$emailCC.'>' . "\r\n";
     
     if(@mail($destinatario, $asunto, $mensaje, $cabeceras))
     {
         echo "El email se envió correctamente a ".$destinatario.".";
      }
     else{
         echo "El email no se pudo enviar.";
     }
?>