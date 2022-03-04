<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PROCESO</title>
</head>

<body>
<?php
$Apellidos=$_POST['Apellidos'];
$Nombres=$_POST['Nombres'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];
$Consulta=$_POST['Consulta'];
	
$mailsend = send ('graphics@impactopublications','BBC/CONTACTO', "Apellidos: $Apellidos\r\nNombres: $Nombres\r\nCorreo: $Correo\r\nTelefono: $Telefono\r\nConsulta: $Consulta);	
if ($mailsend) ( 

echo 'Hola $Nombres Gracias por escribirnos, nos contactaremos contigo a la brevedad posible';
)

else (
 echo 'Lo sentimos su correo no fue enviando';)
 ?/>
 </body>
</html>