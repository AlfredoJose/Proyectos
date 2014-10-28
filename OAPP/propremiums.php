

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

  include 'visit.php';

?>
<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
  <link rel="stylesheet" type="text/css" href="css/vistanunpre.css">
  <!--<link rel="stylesheet" type="text/css" href="css/vistaproindex.css">-->


	<link rel="stylesheet" type="text/css" href="css/usuariospremium.css">


	<link rel="shortcut icon" href="img/m.png">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!--<script src="js/common-scripts.js"></script>-->


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

 	 <?php 
$objUsuario =new usuarios();
$result=$objUsuario->consultar_id_p("");



while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
	
        echo "<a href='productos.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imgggg" src="imgproductosp/'.$arr["imagen"].'">
               
                <div class="portfolio-text-infoo">
                  <h4 class="titulopremiums">'.$arr["nombre"].' | Articulo: '.$arr["estado_articulo"].' </h4>
                  <hr>
                  <br>
                  <h4 class="titulopremiums">Detalles del Anuncio </h4>
                   <hr>
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

           

            <div class='item-highlights price'>
              <strong>".$arr['precio']."</strong>
            </div>
            <a href='javascript:history.back();'><button class='botonsus'>Volver</button></a>

             </div>
        </div>
       ";
       echo "</a>";
        
        echo " <div class='gris'> <h4 class='tituloarru'>Informacion Del Vendedor</h4></div><br>

        <div class='lineaentodo'>
        <div class='nombre_cliente'><br>
        <label class='labels'>Nombre: </label>
              <p class='nombre'><i class='icon-user'></i> ".$arr['nombre_clientee']."</p>
            </div>
            
             <div class='nombre_cliente'>
             <label class='labels'>Telefono:</label>
              <p class='nombre'> <i class='icon-mobile-phone'></i> ".$arr['telefono_clientee']."</p>
            </div>
            
            <div class='nombre_cliente'>
            <label class='labels'>Enviele un Email:</label><br>
              <form class='fmrsend' method='POST'>
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
            </div>

            
               
              </div>";
              
}
 ?>  
  
 
</ul>

</div>

   <script src="js/jquery-1.8.3.min.js"></script>
	 <script src="js/common-scripts.js"></script>
	 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
</body>
</html>

