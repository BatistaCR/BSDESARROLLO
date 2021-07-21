<?php
$to = "bsdesarrollo.cr@gmail.com";
$subject = "Contacto sitio web";
$txt = ($_POST['comentario']);
$headers = "From:" . ($_POST['correo']) . "\r\n";
header('Location: index.php');

     if(@mail($to, $subject, $txt, $headers))
     {
        echo '<script language="javascript">';
        echo 'alert("El mensaje ha sido enviado")';
        echo '</script>';
      }
     else{
        echo '<script language="javascript">';
        echo 'alert("El mensaje no se pudo enviar")';
        echo '</script>';
     }
     exit;
?>