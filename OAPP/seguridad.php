<?php	

	require_once("sesion.php");
	require_once("DBManager.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("nombre");
	
	if( $usuario == false ){	
		header("Location: index.php");		
	}
	
	require_once("cusuarios.php");
	$objUsuario=new usuarios();

?>

<!DOCTYPE html>
<html lang="es" >
<head>
	<title>OAPP.</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">
	<link rel="stylesheet" type="text/css" href="css/error.css">
	<link rel="shortcut icon" href="img/m.png">

</head>
<body>
	<header>
		<a href="top.php"><h1 class="titulares">OAPP Online.</h1></a>
		<div style="clear: bont;"></div>
		<a href=""><h1 class="titulares">Bienvenido <?php echo $nombre; ?></h1></a>
		<div style="clear: bont;"></div>
		<a href="top.php"><h1 id="top">Seguridad.</h1></a>
		<nav>
			<ul>
				<a href="top.php"><li>Inicio.</li></a>
				<a href="error.php"  onclick="alert('Cambiate a Premium para llegar a mas Ventas en tus Publicaciones...!!')"><li>Premium.</li></a>
				<a href="publicara.php"><li>Publicar.</li></a>
				<a href="buscar.php"><li>Buscar.</li></a>
				<a href="error.php"><li>Seguridad.</li></a>
				<a href="cerrarsesion.php"><li>Cerrar.</li></a>
			</ul>
		</nav>

	</header>
	<div id="datos">
	<form id="fmraseguridad" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<a href="misdatos.php"><input id="boton" type="button" name="actualizar" value="Mis datos"></a><br>
		<a href="cambiarusuario.php"><input id="boton" type="button" name="actualizar" value="Cambiar Usuario"></a><br>



	</form>
	</div>
	<footer>
		<p class="piedepagina1"> © 2014 OAPP. Todos los derechos reservados.</p>
		<a href="soporte.php" class="links">Soporte Tecnico<p class="piedepagina"></p></a>
</footer>
</body>
</html>