
<!DOCTYPE html>
<html>
<head>
	<title>Paginas</title>
	<meta charset="UTF-8">
	<meta name='description' content='Publica tus paginas web facil y gratis.'>
	<meta name='keywords' content='OAPP, Publicacion, Web, Empresa OAPP'>
	<meta name='author' content='oapp.com.ve'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/paginas.css">
	<link rel="shortcut icon" href="img/icono.jpg">
	

</head>
<body>
	<div class="container">
		<header>
			<img class="logo" src="img/logo_beta.png" alt="OAPP">
			<div class="tw">
			<a href="https://twitter.com/OAPP_OAPP" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @OAPP_OAPP</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
							<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1472617486325058&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://www.facebook.com/pages/OAPP/716336118389517?fref=ts" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>

			
			<hr class="linepais">
		</header>
		<nav>
			<ul>
				<li class="activo"><a class="activo" href="index.php">Inicio</a></li>
				<div class="lines"></div>
				<li><a href="paginas.php">Paginas</a></li>
				<div class="lines"></div>
				<li><a href="public.php">Publicar</a></li>
				<div class="lines"></div>
				<li><a href="afiliados.php">Afiliados</a></li>
				<div class="lines"></div>
				<li><a href="contacto.php">Contacto</a></li>
				<div class="lines"></div>
				<li><a href="#">Soporte</a></li>
				<div class="lines"></div>
				<input type="search" name="buscar" id="buscar" placeholder="Busca una Pagina.">
				<input type="submit" value="Buscar" name="enviar" id="btnbuscar">
				<div class="lineblue"></div>
			</ul>
		</nav>
	</div>
	<div class="publica_slide">

		<img class="papel_slide" src="img/papel.jpg">
		<h1 class="titulo_buscador">Busca Una Pagina.</h1>
		
		<form action="" method="POST" name="buscador" id="buscador">
			<input class="buscar" type="search" name="buscar" placeholder="facebook.com" id="buscaravansado">	
		</form>
	

	</div>

		<div id="resultados"></div>
		<div class="paginas_rand">
			<?php

				require_once'conn/conexcion.php';
				require_once'funciones/funciones.php';


			


				$resultado = mysql_query(" SELECT * FROM paginas ORDER BY RAND() LIMIT 0, 10");
				
				 while ($fila = mysql_fetch_array($resultado)) {
				 	echo '<div class="paginas_rand2">';
				 		echo '<a class="link_paginas" href="pagina.php?id='.$fila['id'].'">';
				 			echo '<h1 class="titulo_rand">'.utf8_encode($fila["nombre"]).'</h1><br>';
				 			echo '<p class="des_rand">'.utf8_encode($fila["descripcion"]).'</p><br>';
				 		echo "</a>";
				 	echo "</div>";

				 }

				 mysql_free_result($resultado);
        


			 ?>
		<li id="more-items">
    		<a href="#" onclick="loadcontent(2,<?php echo $total_items ?>)" >Cargar mas ...</a>
    	</li>
		</div>
		<div class="paginacion">
			<ul>
				<li><a href="" class="active">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
			</ul>			
		</div>
	<div class="container3">
		<footer>(c) Todos los derechos reservados por OAPP 2014-2015</footer>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	
	<?php 
		require_once ('funciones/buscador.php'); 
		//require_once ('funciones/paginas_rand.php'); 
		require_once('conn/conexcion.php');
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54886549-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>