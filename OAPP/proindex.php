
<?php 
	require_once("cusuarios.php");
	$objUsuario=new usuarios();
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
        <a class="dropdown-toggle element" data-original-title="Registrate" href="register.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-key"></i>
        </a>
    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Entrar" href="entrar.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-user"></i>
        </a>
    </li>
    </div>
    <!--

     END SUPPORT 

    -->
    <!--

     BEGIN USER LOGIN DROPDOWN 

    -->
   
    <li class="dropdown-2">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">

            <img alt="" src="img/avatar1_small.jpg"></img>
            <span class="username"><a href="acerca.php">Nosotros</a></span>
            <b class="caret"></b>

        </a>

        <ul class="dropdown-menu extended logout">
           
        </ul>
    </li>
</ul>
</div>

<section>

 <?php 
$objUsuario =new usuarios();
$result=$objUsuario->consultar_id("");





while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
	
        echo "<a href='proindex.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imgggg" src="imgproductos/'.$arr["imagen"].'">
                <div class="portfolio-text-infoo">
                  <h4 class="tituloarr">'.$arr["nombre"].' | Articulo: '.$arr["estado_articulo"].'  </h4>
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

                <input class='inputvendedor' type='text'>

              <label class='labelss'>Apellido</label>

              <input class='inputvendedor' type='text'>

              <label class='labelss'>Mensaje</label>
                <textarea class='textareaa'>
                </textarea><br><br>
                <input class='botoninfocliente' type='submit' value='Enviar'>
              </form>
            </div>

            
               
              </div>";
              
}
 ?>
        