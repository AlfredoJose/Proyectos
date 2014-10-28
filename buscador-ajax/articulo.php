<?php 
	require_once('conn/connnect.php');
 ?>

 <?php 
 	$buscar = '';

	if (isset($_GET['buscar'])) {

		$buscar = $_GET['buscar'];
	}

	$id = '';
	if (isset($_GET['id'])) {

		$id = $_GET['id'];
	}
	$consulta = "SELECT * FROM art WHERE id= ".$id."";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);




  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscador Por Alfredo</title>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="center">
		<br><br><br><br>
			<img src="img/logo.png" width="200px" alt="Buscador" title="Buscador">
			<br><br><br>
		</div>
		<div class="form center">
			<a href="javascript:history.back(1);">Ir a Tras</a>
		</div>
		<div id="resultados">
			
			<h1><?php echo strtoupper( utf8_encode( $fila['nombre']))?></h1>
			<p><?php echo  str_replace($buscar, '<strong>'.$buscar.'</strong>',substr( utf8_encode( $fila['articulo']),0,150))?></p>


		</div>
		<br><br><br><br><br><br><br><br><br><br><br>
		<div class="footer center">
			<footer>Alfredo Jose 2014-2015<br> <a href="">wwww.alfredo.com</a></footer>
		</div>
	</div>
</body>
</html>