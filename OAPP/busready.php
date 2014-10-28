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
    $arreglo=$objUsuario->estado($usuario);
    $perfil=$arreglo[0];


	include 'log.php';

?>
<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/buscar.css">
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
       
            <span class="usuariosesion" ><a class="username" href="top.php">Inicio<a></span>
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
<div class="barrabuscar">
	<div class="palabrabuscar">
		<p id="wordbuscar">Buscar</p>
		<br>

	<script>

$(function() {

  $( "#tags" ).autocomplete(
  {
     source:'buscarprc.php',
  })

});
</script>

	<div id="misdatos">
	<form id="fmrbuscar" method="GET" action="busready.php">
		<div class="ui-widget">


<input class="inputbuscar" type="search" id="tags" placeholder="<?php 
	echo $_GET["buscar"];
 ?>" name="buscar"><br>
<button type="submit" class="inputbuscarboton" ><i class=" icon-search"></i> Buscar</button>
	</div>
</div>
<?php 
	echo "<p class='result'>Mostrando Resultados Para:  ".$_GET["buscar"]."</p>"
 ?>
<?php

$objConexcion = new DBmanager();
			if ($objConexcion->conectar()==true){
$req = "SELECT nombre,precio,exsistencias,imagen,id
 "."FROM anuncios "."WHERE nombre LIKE '%".$_GET['buscar']."%' LIMIT 4"; 

$query = pg_query($req);
require_once("cusuarios.php");
 $objUsuario =new usuarios();
$result=$objUsuario->consultar("");
echo "<div class='expremir'";

while($arr = pg_fetch_array($query)){
	
	echo "<a href='productos.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imggg" src="imgproductos/'.$arr["imagen"].'">
                <div class="portfolio-text-info">
                  <h4 class="tituloarr">'.$arr["nombre"].' </h4>
               
                  </div>
                  </div>
                  ';
        echo "<div class='span8'>
           <div class='product-info'>
                 Vendidos
                 <span>0</span>
            </div>
            <div class='product-info'>
                 Existentes
            <span>".$arr['exsistencias']."</span>
            </div>
            <div class='product-info'>
                 Precio
            <span>".$arr['precio']."</span>
            </div>
            
             </div>
        </div>";
        echo "</a>";

}
echo "</div>";
}

?>
</body>
</html>
