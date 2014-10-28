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


	if(!isset($_POST["actualizar"])){
		}
	else{
		$usuario= $_POST["usuario"];
		$newusuario = $_POST["newusuario"];
																
		$objUsuario=new  usuarios();						
		$result= $objUsuario->actualizar($newusuario,$usuario);
		if($result)
			header("Location: top.php");
		else
			echo "usuario no fue insertado con exito";
}


?>

<!DOCTYPE html>
<html lang="es" >
<head>
	<title>OAPP.</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">
	<link rel="shortcut icon" href="img/m.png">

</head>
<body>
	<header>
		<a href="top.php"><h1 class="titulares">OAPP Online.</h1></a>
		<div style="clear: bont;"></div>
		<a href=""><h1 class="titulares">Bienvenido <?php echo $nombre; ?></h1></a>
		<div style="clear: bont;"></div>
		<a href="top.php"><h1 id="top">Cambiar usuario.</h1></a>
		<nav>
			<ul>
				<a href="top.php"><li>Inicio.</li></a>
				<a href="error.php"  onclick="alert('Cambiate a Premium para llegar a mas Ventas en tus Publicaciones...!!')"><li>Premium.</li></a>
				<a href="publicara.php"><li>Publicar.</li></a>
				<a href="buscar.php"><li>Buscar.</li></a>
				<a href="seguridad.php"><li>Seguridad.</li></a>
				<a href="cerrarsesion.php"><li>Cerrar.</li></a>
			</ul>
		</nav>

	</header>
	<div id="actualizar">
	<form id="fmractualizar" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label name="nombre">Usuario:</label><br>
		<input class="input" name="usuario" type="text" required><br>
		<label>Nuevo Usuario:</label><br>
		<input class="input" name="newusuario" type="text" required><br>
		
		<!--<label>Repite Contraseña</label><br><br>
		<input class="input" type="password" required checked="password"><br><br>-->
		<input id="boton" type="submit" name="actualizar" value="Actualizar"><br>

	</form>
	</div>
	<footer>
		<p class="piedepagina1"> © 2014 OAPP. Todos los derechos reservados.</p>
		<a href="soporte.php" class="links">Soporte Tecnico<p class="piedepagina"></p></a>
</footer>
</body>
</html>