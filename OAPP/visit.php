<?php 



	require_once("DBManager.php");
	require_once("sesion.php");
	
	$sesion = new sesion();

	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("nombre");
	
	if( $usuario == false ){	
		header("Location: index.php");		
	}
	
	require_once("cusuarios.php");
	$objUsuario=new usuarios();
 



	
	if (isset($_GET["id"])){
		$objConexion = new DBManager();
		if ($objConexion->conectar()==true){ 
		$consulta = " SELECT * FROM anuncios_premium WHERE id='".$_GET["id"]."'";
		$result = pg_query($objConexion->getCon(), $consulta);

		while ($fila = pg_fetch_array($result)) {
			$incremento = $fila["vist"];

			$incremento++;


		}
	}
}

if (isset($_GET["id"])){

	$incrementopad = str_pad($incremento,10, "0", STR_PAD_LEFT);
		$objConexion = new DBManager();
		if ($objConexion->conectar()==true){ 


	$consulta = "UPDATE anuncios_premium SET vist ='".$incrementopad."' WHERE id='".$_GET['id']."' ; ";
	$result = pg_query($objConexion->getCon(), $consulta);

	}
}
	
 ?>