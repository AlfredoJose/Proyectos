<?php
	require_once("sesion.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");	
	if( $usuario == false )
	{	//lo redireccionamiento a index.php dado a que no ha iniciado sesion
		header("Location: ../index.php"); 
	}
	else 
	{
		$sesion->termina_sesion();	
		header("Location: ../index.php"); 
	}
?>