<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$mensaje = $_POST['message'];

$header = "Enviado desde la pagina web";
$mensajecompleto= $mensaje. "\nAtentamente: " . $nombre. "\nTelefono: ". $telefono;



$para = 'josue.castillo@tecsup.edu.pe';


mail($para,$asunto,$mensajecompleto,$header);
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='https://proyectojosue1.herokuapp.com';</script>";

 ?>