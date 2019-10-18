<?php 

//LLAMANDO LOS CAMPOS
$myFile = $_POST['myFile'];
$nombre = "mio";
$msm = "HOLA EJEMPLO";

// DATOS PARA EL CORREO
$destinatario = "williamvaldez16@gmail.com";
$asunto = "EJEMPLO DE ENVIO";

$carta = "DE: $nombre \n";
$carta = "DE: $msm";

// ENVIANDO MENSAJE
mail($destinatario, $asunto, $carta);
header('Location:index.html')

?>