<?php 
	
	$host = "localhost";
	$user = "root";
	$pass = "123456789";
	$db   = "buscador-ajax";

	$connect = new mysqli($host,$user,$pass,$db) or die ("Error" . mysqli_errno($connect)); 

 ?>