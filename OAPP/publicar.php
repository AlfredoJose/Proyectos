<?php	

	require_once("sesion.php");
	require_once("DBManager.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("nombre");
	
	if( $usuario == false ){	
		header("Location: index.html");		
	}
	
	//consultando perfil del usuario
	require_once("cusuarios.php");
	$objUsuario=new usuarios();


	if(!isset($_POST["consultar"])){
	}
		else{ 
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	


    
								
	$objUsuario=new usuarios();						
	$result=$objUsuario->insertar_p($nombre,$descripcion,$precio);
	if($result)
		header("Location: publicar.php");
	else
		echo "Tienes un dato incorrecto .";
							
							}



							if(!isset($_POST["consultar"])){							
							echo "<br/><br/><br/><br/><br/>";
							
								$objAnuncio = new anuncios();
								
								if(!isset($_POST["consultar"])){//El usuario no envio el formulario de consulta individual
									
									$arreglo=$objAnuncio->consultar_a("");
								}
								else{
									echo "filtro activado";
									$arreglo=$objAnuncio->consultar($_POST["Nombre"]);
									
									
								}
								if($arreglo){
									echo "<table>
											<tr>
												<td><b>Nombre</b></td>
												<td><b>Descripcion</b></td>
												<td><b>Precio</b></td>
												
											</tr>";
									while($row = pg_fetch_row($arreglo)) {
										echo "<tr>";
											echo "<td>";
												echo $row[0];
											echo "</td>";
											
											echo "<td>$row[1];</td>";
												
											echo "<td> $row[2];</td>";
											
											echo "<td>";
												echo "<td>";
											echo "</td>";
											
											echo "<td>";
												echo "<td>";
											echo "</td>";
											
										echo "</tr>";
									}
									echo "</table>";
								}
							}
						
	
?>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">

</head>
<body>
	<header>
		<a href="top.php"><h1 class="titulares">TopShop Online.</h1></a>
		<div style="clear: bont;"></div>
		<a href=""><h1 class="titulares">Bienvenido <?php echo $nombre; ?></h1></a>
		<div style="clear: bont;"></div>
		<a href="index.html"><h1 id="top">Nueva Publicacion.</h1></a>
		<nav>
			<ul>
				<a href="top.php"><li>Inicio.</li></a>
				<a href="premium.php"  onclick="alert('Cambiate a Premium para llegar a mas Ventas en tus Publicaciones...!!')"><li>Premium.</li></a>
				<a href="publicara.php"><li>Publicar.</li></a>
				<a href="buscar.php"><li>Buscar.</li></a>
				<a href="seguridad.php"><li>Seguridad.</li></a>
				<a href="cerrarsesion.php"><li>Cerrar.</li></a>
			</ul>
		</nav>

	</header>

	<form id="fmrp" method="POST" action=" <?php $_SERVER['PHP_SELF'] ?>">
		<label>Nombre</label><br>
		<input name="nombre" class="nombrep" type="text" required><br>
		<label>Precio</label><br>
		<input  name="precio" class="nombrep" type="text" required><br>
		<label>Imagen</label><br>
		<input name="imagen" class="file" type="file" ><br>
		<label>Descripcion</label><br>
		<textarea name="descripcion" class="descripcion"></textarea>
		<div style="clear: bont;"></div>
		<input type="submit" id="boton" name="consultar" value="Publicar">

	</form>
	<footer>
		<p class="piedepagina1"> © 2014 TopShop. Todos los derechos reservados.</p>
		<a href="https://twitter.com/topshop" class="links"><p class="piedepagina"></p></a>
	</footer>
</body>
</html>