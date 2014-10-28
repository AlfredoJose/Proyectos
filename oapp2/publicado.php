	<?php 
	require_once'conn/conexcion.php';

	@$ip  = $_SERVER[REMOTE_ADDR];
	$resultado = mysql_query("INSERT INTO paginas (nombre,pagina,descripcion,nombre_usuario,ip,correo) 
	VALUES ('".$_GET['nombre']."','".$_GET['pagina']."','".$_GET['descripcion']."','".$_GET['nombre_usuario']."','".$ip['ip']."','".$_GET['correo']."')");



	?>
<meta http-equiv="refresh" content="2; url=paginas.php"> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listo</title>
	<meta http-equiv="refresh" content="2; url=paginas.php"> 
	<link rel="shortcut icon" href="img/icono.jpg">
	
</head>
<body>

</body>
</html>