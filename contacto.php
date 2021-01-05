<?php
$name = $_POST['name'];
echo "name";
$mail = $_POST['mail'];
echo "mail";
$consulta = $_POST['asunto'];
echo "asunto";

$para = 'hola.hop@hotmail.com';
$asunto = 'Hop';

mail($para, $asunto, $header);

header("Location:index.html");
?>
