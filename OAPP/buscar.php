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

	$clave = $sesion->get("clave");

?>

<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/buscar.css">
    <link rel="stylesheet" type="text/css" href="css/buscardefault.css">
	<link rel="stylesheet" type="text/css" href="css/usuariospremium.css">
	<link rel="shortcut icon" href="img/m.png">
	<link rel="stylesheet" type="text/css" href="js/jsb/jquery-ui.css">
	<script src="js/jsb/jquery.js"></script>
	<script src="js/jsb/jquery-ui.js"></script>
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />

</head>
<body>

	 <div class="panelp">
<div class="sidebar-toggle-boxp hidden-phone">

    <div id="iconp" class="icon-star"></div>

</div>
<a class="brandp" href="index.php" style="color:#FFF">

    
    <p class="opp">Bienvenido A OAPP Premium</p>
           

</a>
</div>
<div class="m">
<ul class="nav pull-right top-menu">

    <!--

     BEGIN SUPPORT 

    -->
    <div class="dropmover">
     <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="buscar.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-search"></i>
       </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="panelcontrolp.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-dashboard"></i>
       </a>


    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="publicara.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-bullhorn"></i>
        </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="cerrarsesion.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-off"></i>


    </li>
      <li class="dropdown-2p">
       
            <span class="usuariosesion" ><a class="username" href="top.php">Inicio</a></span>
            <b class="caret"></b>

        

        <ul class="dropdown-menu extended logout">
           
        </ul>
    </li>

    </div>

   
  
    <!--

     END USER LOGIN DROPDOWN 

    -->

</ul>

</div>
	<script>
$(function() {

  $( "#tags" ).autocomplete(
  {
     source:'buscarprc.php',
  })

});
</script>

</div>
<div class="barrabuscar">
	<div class="palabrabuscar">
		<p id="wordbuscar">Buscar</p>

<div id="misdatos">
	<form id="fmrbuscar" method="GET" action="busready.php">
		<div class="ui-widget">


<input class="inputbuscar" type="search" id="tags" placeholder="Busca Un Producto" name="buscar"><br>
<button type="submit" class="inputbuscarboton" ><i class=" icon-search"></i> Buscar</button>
	</div>
</div>

	
	</div>
	<!--<footer>
		<p class="piedepaginabuscar"> © 2014 OAPP. Todos los derechos reservados.</p>
		<a href="soporte.php" class="links">Soporte Tecnico<p class="piedepagina"></p></a>
</footer>-->
</body>
</html>