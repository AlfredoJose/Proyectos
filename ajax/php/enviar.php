<?php 
	 require_once '../conn/conn.php';

	 //Insertar los datos con ajax sin recargar la pagina.

	 if (isset($_POST['nombre']) && ($_POST['apellido']!="")) {

	 	$nombre = $_POST["nombre"];
	 	$apellido = $_POST["apellido"];

	 	$consulta ='INSERT INTO personas VALUES("'.$nombre.'", "'.$apellido.'")';
	 	$resultado = mysqli_query($conexion,$consulta);
	 	//Para poner un mensaje de ready or Error.
	 	echo 1;
	 }

	 

	

 ?>