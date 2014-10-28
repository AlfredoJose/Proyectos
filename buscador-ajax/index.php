<?php 
	require_once('conn/connnect.php');
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
		<div class="center" id="logo"> 
		<br><br><br><br>
			<img src="img/logo.png" width="200px" alt="Buscador" title="Buscador">
			<br><br><br>
		</div>
		<div class="form center">
			<form action="" method="POST" name="buscador" id="buscador">
				<input type="search" name="buscar" id="buscar">
				
			</form>
		</div>
		<div id="resultados"></div>
		<br><br><br><br><br><br><br><br><br><br><br>
		<div class="footer center">
			<footer>Alfredo Jose 2014-2015<br> <a href="">wwww.alfredo.com</a></footer>
		</div>
	</div>
</body>
</html>