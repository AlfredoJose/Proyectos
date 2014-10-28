

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


   $objUsuario=new usuarios();
    $arreglo=$objUsuario->estado($usuario);
    $perfil=$arreglo[0];
 	//include 'autohists.php';
	include 'log.php';

?>
<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/boot2.css">
  <link rel="stylesheet" type="text/css" href="css/vistaproindex.css">
	<link rel="shortcut icon" href="img/m.png">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />


</head>
<body>

	
	 <div class="panel">
    <div class="sidebar-toggle-box hidden-phone">

    <div class="icon-reorder"></div>

</div>
<a class="brand" href="index.php" style="color:#FFF">

    
    <p class="op">OAPP Online La mejor Forma de Comprar y Vender</p>
           

</a>
</div>
<div class="m">
<ul class="nav pull-right top-menu">

    <!--

     BEGIN SUPPORT 

    -->
    <div class="dropmover">
     <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="misanuncios.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-bookmark-empty"></i>
       </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="premium.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-star"></i>
       </a>


    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="publicara.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-bullhorn"></i>
        </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="cerrarsesion.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-minus-sign"></i>


    </li>
      <li class="dropdown-2">
       
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
   

	<section>
<!--
		<a href="./pedidos.php?id=1">
		<article class="articlee">
		<div class="zoom">
			<div class="con">
				<span class="titulo">Computadora DDR3</span>
			</div>
			<img src="img/4.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
		</article>
		</div>
		</a>

		<a href="./pedidos.php?id=2">
		<article class="articlee">
			<div class="con">
				<span>Galaxi S4</span>
			</div>
			<img src="img/8.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
		</article>
		</a>

		<a href="./pedidos.php?id=3">
		<article class="articlee">
			<div class="con">
				<span class="titulo">Patineta</span>
			</div>
			<img src="img/7.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
		</article class="articlee">
		</a>

		<a href="./pedidos.php?id=4">
		<article class="articlee">
			<div class="con">
				<span class="titulo">Laptop</span>
			</div>
			<img src="img/3.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
			</article>
			</a>-->
 <?php 
$objUsuario =new usuarios();
$result=$objUsuario->consultar_id("");



while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
	
        echo "<a href='productos.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imgggg" src="imgproductos/'.$arr["imagen"].'">
               
                <div class="portfolio-text-infoo">
                  <h4 class="tituloarr">'.$arr["nombre"].' | Articulo: '.$arr["estado_articulo"].' </h4>
                  <hr>
                  <br>
                  <h4 class="tituloarr">Detalles del Anuncio </h4>
                  <div class="p">
                  <p class="descripciontitulo">'.$arr["descipcion"].'</p>
                  </div>
                  </div>
                  </div>
                  ';
        echo "<div class='span8'>
           <div class='product-info'>
                 Vendidos
                 <span>0</span>
            </div>

            <div class='product-info'>
                 Restantes
            <span>".$arr['exsistencias']."</span>
            </div>

            <div class='item-highlights price'>
              <strong>".$arr['precio']."</strong>
            </div>
            <a href='javascript:history.back();'><button class='botonsus'>Volver</button></a>

             </div>
        </div>
       ";
       echo "</a>";
        
        echo " <div class='gris'> <h4 class='tituloarru'>Informacion Del Vendedor</h4></div><br>

        
        <div class='nombre_cliente'><br>
        <label class='labels'>Nombre: </label>
              <p class='nombre'><i class='icon-user'></i> ".$arr['nombre_cliente']."</p>
            </div>
            
             <div class='nombre_cliente'>
             <label class='labels'>Telefono:</label>
              <p class='nombre'> <i class='icon-mobile-phone'></i> ".$arr['telefono_cliente']."</p>
            </div>
            
            <div class='nombre_cliente'>
            <label class='labels'>Enviele un Email:</label><br>
              <form method='POST'>
              <label class='labelss'>Nombre</label>

                <input class='inputvendedor' type='text'  placeholder='Introduce Tu Nombre'>

              <label class='labelss' >Apellido</label>

              <input class='inputvendedor' type='text' placeholder='Introduce Tu Apellido'>

              <label class='labelss'>Mensaje</label>
                <textarea class='textareaa'>
                
                </textarea><br><br>
                <input class='botoninfocliente' type='submit' value='Enviar'>
              </form>
            </div>

            
               
              </div>";
              
}
 ?>
        