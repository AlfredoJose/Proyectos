<?php 
	$utc       = date("U");
	$anio      = date("Y");
	$mes       = date("m");
	$dia       = date("d");
	$hora 	   = date("H");
	$minuto    = date("i");
	$segundo   = date("s");

	$usuario   = $_SESSION['usuario'];
	@$ip       = getenv(REMOTE_ADDR);
	@$navegador = $_SERVER["HTTP_USER_AGENT"];

	$conexcion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");
	$consulta  = "INSERT INTO logs(utc,anio,mes,dia,hora,minuto,segundo,usuario,url,ip,navegador,extra1,extra2,extra3,extra4) VALUES ('".$utc."','".$anio."','".$mes."','".$dia."','".$hora."','".$minuto."','".$segundo."','".$usuario."','','".$ip."','".$navegador."','','','','');";
	$resultado = pg_query($conexcion, $consulta);

	pg_close($conexcion);
 ?>