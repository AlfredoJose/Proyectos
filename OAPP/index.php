<?php 
	require_once("sesion.php");
	

	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("nombre");
	
	if( $usuario == true ){	
		header("Location: top.php");		
	}
	
	require_once("cusuarios.php");
	$objUsuario=new usuarios();
 	


 

 ?>
 
<!DOCTYPE html>
<html lang="es" >
<head>
	<title>OAPP
    </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
	<link rel="shortcut icon" href="img/m.png">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />


</head>
<body>
<div class="voltiar">

    <span id="oappdesarrollo">
        <a href="">

            OAPP En Desarrollo.

        </a>
    </span>

</div>
	 
	
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
        <a class="dropdown-toggle element" data-original-title="Trabajo" href="trabajo.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-briefcase" title="Trabajo" ></i>
        </a>
    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Registrate" href="register.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-key" title="Registrarse" ></i>
        </a>
    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" title="Entrar" data-original-title="Entrar" href="entrar.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-user" title="Entrar" ></i>
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
            <span class="username"><a class="acerca" href="acerca.php">Nosotros</a></span>
            <b class="caret"></b>

        </a>

       
    </li>
    <!--

     END USER LOGIN DROPDOWN 

    -->

</ul>

</div>



	
    <div class="anucnis">
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
            </div>
            <section>
<h3 class="premium"><i id="flecha" class="icon-circle-arrow-up"></i>  ¿Quieres Aperecer aqui?</h3>
<h3 class="premium">¿Deseas ser El Centro de Atraccion...? Entra <a href="pewindex.php">Aqui..</a></h3>
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
<div id="barra1pp"><h2 class="pp"><i class="icon-rss"></i>  Destacados</h2></div><br>
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
        echo "<a href='proindex.php?id=".$arr['id']."'>";
        echo "<div class='row-fluid product-search'>";
        
        
        echo '<div class="span4 product-text">
               <img alt="" class="imggg" src="imgproductos/'.$arr["imagen"].'">
                <div class="portfolio-text-info">
                  <h4 class="tituloar">'.$arr["nombre"].' </h4>
                 
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
                    echo "<div style='clear: bont;'></div><a class='color' href='index.php?pagina=$i'>$i</a>";
            }    
        }


         ?>
   <!--     
<div id="barra1pp"><h2 class="pp"><i class="icon-tasks"></i> Categorias</h2></div><br>




 <div class="blue-boxm">
                                <h2 > <i class=" icon-tasks"></i> category</h2>
                                 <ul>
                                     <li class="categoriasp">
                                         <a href="#" class="cate">
                                             <i id="iconicon" class=" icon-umbrella"></i>
                                             <span>Animal</span>
                                         </a>
                                     </li>
                                     <li class="categoriasp">
                                         <a href="#" class="cate">
                                             <i id="iconicon" class=" icon-trophy"></i>
                                             <span>Landscape</span>
                                         </a>
                                     </li>
                                     <li class="categoriasp">
                                         <a href="#" class="cate">
                                             <i class="icon-plane"></i>
                                             <span class="categorian">Potrait</span>
                                         </a>
                                     </li>
                                     <li class="categoriasp">
                                         <a href="#" class="cate">
                                             <i class=" icon-pushpin"></i>
                                             <span>Wild Life</span>
                                         </a>
                                     </li>
                                     <li class="categoriasp">
                                         <a href="#" class="cate">
                                             <i class=" icon-beaker"></i>
                                             <span>Video</span>
                                         </a>
                                     </li>
                                     <li class="categoriasp">
                                         <a href="#" class="cate">
                                             <i class=" icon-bullhorn"></i>
                                             <span>Nature</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
    


-->
       
	</section>



<!--<a href="carritodecompras.php"><span class="carrito"></span></a>-->
 <div id="footer">
       2014 &copy; OAPP.com
   </div>
   <script src="js/jquery-1.8.3.min.js"></script>
	 <script src="js/common-scripts.js"></script>
	 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
</body>
</html>