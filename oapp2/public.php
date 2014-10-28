<!DOCTYPE html>
<html>
<head>
	<title>Publicar</title>
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

		<img class="papel_slide_publicar" src="img/papel.jpg">
		<h1 class="titulo_slide">Publica Tu Pagina Web.</h1>

		<form class="formlario" action="publicado.php" method="GET">
			<input type="text" name="nombre" maxlength="21" class="nombre_pagina" placeholder="Nombre de la pagina" required><br><br>
			<input type="text" name="nombre_usuario" maxlength="21" class="nombre_pagina" placeholder="Tu Nombre" required><br><br>
			<input type="email" name="correo" class="nombre_pagina" placeholder="Tu Correo" required><br>
			<input class="publicar" type="url" name="pagina" placeholder="http://www.google.com" required><br>
			<textarea  maxlength="500" placeholder="Descripcion de tu pagina" class="descipcion" name="descripcion" id="" cols="43" rows="10" required></textarea><br>
			<input class="btn-publicar"  type="submit" value="Publicar" name="publicar" id="publicar">
			
		</form>

	</div>
	<div class="container3">
		<footer>(c) Todos los derechos reservados por OAPP 2014-2015</footer>
	</div>
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