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
	<link rel="stylesheet" type="text/css" href="css/usuariospremium.css">
	<link rel="shortcut icon" href="img/m.png">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!--<script src="js/common-scripts.js"></script>-->


</head>
<body>

	 
	
	
    <?php

       if ($perfil==0){?>
       <div id="sidebar" class="panel">
		<div class="sidebar-toggle-box hidden-phone">

    <div class="icon-reorder">
    </div>

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
            <i class="icon-bookmark-empty"><span class="starcaja">Anuncios</span></i>
       </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="premium.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-star"><span class="starcaja">Premium</span></i>
       </a>


    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="publicara.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-bullhorn"><span class="starcaja">Publicar</span></i>
        </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="cerrarsesion.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-minus-sign"><span class="starcaja">Cerrar</span></i>


    </li>
      <li class="dropdown-2u">
       
            <span class="usuariosesion" ><a class="username" href="acerca.php" data-placement="bottom"></a><?php echo "Hola, $usuario"; ?></span>
            <b class="caret"></b>


        
    </li>

    </div>

   
  
    <!--

     END USER LOGIN DROPDOWN 

    -->

</ul>

</div>



	<section>

		<a href="./propremiums.php?id=1">
		<article class="articlee">
		<div class="zoom">
			<div class="con">
				<span class="titulo">Google Glass</span>
			</div>
			<img src="img/4.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
		</article>
		</div>
		</a>

		<a href="./propremiums.php?id=2">
		<article class="articlee">
			<div class="con">
				<span>Note ONE</span>
			</div>
			<img src="img/8.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
		</article>
		</a>

		<a href="./propremiums.php?id=3">
		<article class="articlee">
			<div class="con">
				<span class="titulo">Scoot WOOD</span>
			</div>
			<img src="img/7.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
		</article class="articlee">
		</a>

		<a href="./propremiums.php?id=4">
		<article class="articlee">
			<div class="con">
				<span class="titulo">Android Werawle</span>
			</div>
			<img src="img/3.jpg">
			<div class="con">
				<span class="titulo">Ver Mas</span>
			</div>
			</article>
			</a>
            <h3 class="premium"><i id="flecha" class="icon-bullhorn"></i>  ¿No Sabes Como Publicar?</h3>
<h3 class="premium"> Entra<a href="publicara.php"> Aqui....</a>!</h3>
<!--<div id="sidebar">
    <ul>Visible</ul>
    <div id="container">
        <div class="sidebar-closed"></div>
    </div>
</div>-->

       <!-- <div class="space20"></div>
       
        <div class="barraproductos">
        <div class="row-fluid product-search">

                                          <div class="span4 product-text">
                                                    <img alt="" class="imggg" src="img/1.jpg">
                                                    <div class="portfolio-text-info">
                                                        <h4 class="tituloar">Reproductores MP3</h4>
                                                        <p>Reproductores De alta Calidad con Bateria Unica e Audifonos</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                <div class="product-info">
                                                        Vendidos
                                                        <span>500</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Restantes
                                                        <span>40</span>
                                                    </div>
                                                    
                                                    <div class="product-info">
                                                        Precio
                                                        <span>$20.00</span>
                                                    </div>
                                                    
                                                    <button class="btn btn-large"><i class="icon-eye-open"></i><strong class="ver"> Ver</strong></button>
                                                    <div class="mg">
                                                    <i class="icon-thumbs-down"></i>
                                                    </div>
                                                    <div class="mgd">
                                                    <i class="icon-thumbs-up"></i>
                                                    </div>
                                                    <div class="com">
                                                    <i class="icon-comment"></i>
                                                    </div>
                                                </div>
        </div>
        </div>
        <div class="row-fluid product-search">
                                                 <div class="span4 product-text">
                                                    <img alt="" class="imggg" src="img/3.jpg">
                                                    <div class="portfolio-text-info">
                                                        <h4>Laptop HP</h4>
                                                        <p>Esta laptop es muy buena ya que provee de un precesador. Caro</p>
                                                    </div>
            </div>
            <div class="span8">
                                                    <div class="product-info">
                                                        Vendidos
                                                        <span>5</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Restantes
                                                        <span>3</span>
                                                    </div>
                                                    
                                                    <div class="product-info">
                                                        Precio
                                                        <span>$5.000</span>
                                                    </div>
                                                    <button class="btn btn-large"><i class="icon-eye-open"></i><strong class="ver"> Ver</strong></button>
                                                    <div class="mg">
                                                    <i class="icon-thumbs-down"></i>
                                                    </div>
                                                    <div class="mgd">
                                                    <i class="icon-thumbs-up"></i>
                                                    </div>
                                                    <div class="com">
                                                    <i class="icon-comment"></i>
                                                    </div>
            </div>
        </div>
        <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" class="imggg" src="img/4.jpg">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Vendidos
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Restantes
                                                        <span>300</span>
                                                    </div>
                                                    
                                                    <div class="product-info">
                                                        Precio
                                                        <span>$12.30</span>
                                                    </div>
                                                    <button class="btn btn-large"><i class="icon-eye-open"></i><strong class="ver"> Ver</strong></button>
                                                    <div class="mg">
                                                    <i class="icon-thumbs-down"></i>
                                                    </div>
                                                    <div class="mgd">
                                                    <i class="icon-thumbs-up"></i>
                                                    </div>
                                                    <div class="com">
                                                    <i class="icon-comment"></i>
                                                    </div>


                                                </div>
        </div>
        <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img alt="" class="imggg" src="img/6.gif">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Vendidos
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Restantes
                                                        <span>300</span>
                                                    </div>
                                                    
                                                    <div class="product-info">
                                                        Precio
                                                        <span>$12.30</span>
                                                    </div>
                                                    <button class="btn btn-large"><i class="icon-eye-open"></i><strong class="ver"> Ver</strong></button>
                                                    <div class="mg">
                                                    <i class="icon-thumbs-down"></i>
                                                    </div>
                                                    <div class="mgd">
                                                    <i class="icon-thumbs-up"></i>
                                                    </div>
                                                    <div class="com">
                                                    <i class="icon-comment"></i>
                                                    </div>
                                                </div>
        </div>
        <div class="row-fluid product-search">
                                                <div class="span4 product-text">
                                                    <img class="imggg" alt="" src="img/8.jpg">
                                                    <div class="portfolio-text-info">
                                                        <h4>iMac Slim</h4>
                                                        <p>21 inch Display, 1.8 GHz Processor, 8 GB Memory</p>
                                                    </div>
                                                </div>
                                                <div class="span8">
                                                    <div class="product-info">
                                                        Vendidos
                                                        <span>190</span>
                                                    </div>
                                                    <div class="product-info">
                                                        Restantes
                                                        <span>300</span>
                                                    </div>
                                                    
                                                    <div class="product-info">
                                                        Precio
                                                        <span>$12.30</span>
                                                    </div>
                                                    <button class="btn btn-large"><i class="icon-eye-open"></i><strong class="ver"> Ver</strong></button>
                                                    <div class="mg">
                                                    <i class="icon-thumbs-down"></i>
                                                    </div>
                                                    <div class="mgd">
                                                    <i class="icon-thumbs-up"></i>
                                                    </div>
                                                    <div class="com">
                                                    <i class="icon-comment"></i>
                                                    </div>
                                                </div>
</div>-->
 <?php 
 $tamano_pagina=10;

    if (isset($_GET['pagina']))
        $pagina= $_GET["pagina"];
    else 
        $pagina='';
   
    if (!$pagina) {
        $inicio = 0; 
        $pagina=1;
    }
    else {
        $inicio = ($pagina - 1) * $tamano_pagina;
    }



    $objUsuario =new usuarios();

    $result=$objUsuario->consultar("");


    $num_total_registros = pg_num_rows($result);

    $total_paginas = ceil($num_total_registros / $tamano_pagina);

    $result=$objUsuario->consulta_limitada("",$tamano_pagina,$inicio);

    $numero=pg_num_rows($result);


        while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
        echo "<a href='productos.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imggg" src="imgproductos/'.$arr["imagen"].'">

                <div class="portfolio-text-info">
                
                </div>
                    <h2 class="tituloarrrr">'.$arr["nombre"].' </h2>

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
    if($num_total_registros) {
        echo "<div style='clear: bont;'></div><div class='page'>Pagina:</div> ";
            for ($i=1; $i<=$total_paginas; $i++){
                if ($pagina == $i)
                    echo "<div style='clear: bont;'></div><div class='page'>".$pagina."</div> ";
                else
                    echo "<div style='clear: bont;'></div><a class='color' href='top.php?pagina=$i'>$i</a>";
            }    
        }


         ?>
        


       
	</section>

    <?php
      }
      else if ($perfil==1){
     ?>
        
     <!--Pagina Para los Usuarios Premium-->

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
       
            <span class="usuariosesion" ><a class="username" href="acerca.php"></a><?php echo "Hola, $usuario"; ?></span>
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


 <div id="contienebanner">

    <div id="banner" >
        <div id="contienebannner">
            <h3>

                Como Ya Eres Parte De La Comunidad Premium Mira Todas Las Funcionalidades Premimun.

            </h3>
            <p class="banerdes">

                Dale Click En Inciar Para Hacer Un Recorrido Por Todas Las Funcionalidades.

            </p>
        </div>
        <a href="tutorialp.php"><button class="iniciar">Iniciar</button></a>
    </div>

</div>
<div class="spacee"></div>
<div class="contienep">



<?php 
 $tamano_pagina=4;

    if (isset($_GET['pagina']))
        $pagina= $_GET["pagina"];
    else 
        $pagina='';
   
    if (!$pagina) {
        $inicio = 0; 
        $pagina=1;
    }
    else {
        $inicio = ($pagina - 1) * $tamano_pagina;
    }




     $objUsuario =new usuarios();

    $result=$objUsuario->consultar_publicaion_premium("");

     $num_total_registros = pg_num_rows($result);

    $total_paginas = ceil($num_total_registros / $tamano_pagina);

    $result=$objUsuario->consulta_limitada_premium("",$tamano_pagina,$inicio);

    $numero=pg_num_rows($result);


     while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
        echo '<a href="propremiums.php?id='.$arr["id"].'">';
         echo '<article class="articlee">
        <div class="zoom">
            <div class="con">
                <span class="titulo">'.$arr["nombre"].'</span>
            </div>
            <img  src="imgproductosp/'.$arr["imagen"].'">';

            echo"<div class='con'>
                <span class'titulo'>Ver Mas</span>
            </div>
        </article>
        </div>
        </a>";
       
}
    
     if($num_total_registros) {
        echo "<div style='clear: bont;'></div><div class='pagep'>Pagina:</div> ";
            for ($i=1; $i<=$total_paginas; $i++){
                if ($pagina == $i)
                    echo "</div><div class='page'>".$pagina."</div> ";
                else
                    echo "<div style='clear: bont;'></div><a class='color' href='top.php?pagina=$i'>$i</a>";
            }    
        }
 ?>



<!--<a href="./propremiums.php?id=1">
        <article class="articlee">
        <div class="zoom">
            <div class="con">
                <span class="titulo">Google Glass</span>
            </div>
            <img src="img/4.jpg">
            <div class="con">
                <span class="titulo">Ver Mas</span>
            </div>
        </article>
        </div>
        </a>

        <a href="./propremiums.php?id=2">
        <article class="articlee">
            <div class="con">
                <span>Note ONE</span>
            </div>
            <img src="img/8.jpg">
            <div class="con">
                <span class="titulo">Ver Mas</span>
            </div>
        </article>
        </a>

        <a href="./propremiums.php?id=3">
        <article class="articlee">
            <div class="con">
                <span class="titulo">Scoot WOOD</span>
            </div>
            <img src="img/7.jpg">
            <div class="con">
                <span class="titulo">Ver Mas</span>
            </div>
        </article class="articlee">
        </a>

        <a href="./propremiums.php?id=4">
        <article class="articlee">
            <div class="con">
                <span class="titulo">Android Werawle</span>
            </div>
            <img src="img/3.jpg">
            <div class="con">
                <span class="titulo">Ver Mas</span>
            </div>
            </article>
            </a>
            </div>-->



            <?php 
 $tamano_pagina=10;

    if (isset($_GET['pagina']))
        $pagina= $_GET["pagina"];
    else 
        $pagina='';
   
    if (!$pagina) {
        $inicio = 0; 
        $pagina=1;
    }
    else {
        $inicio = ($pagina - 1) * $tamano_pagina;
    }



    $objUsuario =new usuarios();

    $result=$objUsuario->consultar("");


    $num_total_registros = pg_num_rows($result);

    $total_paginas = ceil($num_total_registros / $tamano_pagina);

    $result=$objUsuario->consulta_limitada("",$tamano_pagina,$inicio);

    $numero=pg_num_rows($result);


        while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
        echo "<a href='productos.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-textp">
               <img alt="" class="imggg" src="imgproductos/'.$arr["imagen"].'">
                <div class="portfolio-text-info">
                
                </div>
                    <h2 class="tituloarrr">'.$arr["nombre"].' </h2>
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
    if($num_total_registros) {
        echo "<div style='clear: bont;'></div><div class='pagep'>Pagina:</div> ";
            for ($i=1; $i<=$total_paginas; $i++){
                if ($pagina == $i)
                    echo "</div><div class='page'>".$pagina."</div> ";
                else
                    echo "<div style='clear: bont;'></div><a class='color' href='top.php?pagina=$i'>$i</a>";
            }    
        }


         ?>
        
     <?php
                        }
                        ?> 




 <div id="footer">
 <!--El Footer Se Esta Descordando Cambiar Anchura-->
       2014 &copy; OAPP.com
   </div>
   <script src="js/jquery-1.8.3.min.js"></script>
	 <script src="js/common-scripts.js"></script>
	 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
</body>
</html>