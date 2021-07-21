<?php
$to = "bsdesarrollo.cr@gmail.com";
$subject = "Contacto sitio web";
$txt = ($_POST['comentario']);
$headers = "From:" . ($_POST['correo']) . "\r\n";

if(@mail($to, $subject, $txt, $headers))
{
   echo'<script type="text/javascript">
   alert("Tu mensaje a sido enviado 😁");
   window.location.href="index.php";
   </script>';
 }
 
else{
   echo'<script type="text/javascript">
   alert("Uuups, parece que hubo un error 🙁");
   window.location.href="index.php";
   </script>';
}
exit;
?>