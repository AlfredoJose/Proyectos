<!DOCTYPE html>
<html>
<head>
	<title>OAPP</title>
	<meta charset="UTF-8">
	<meta name='description' content='Publica tus paginas web facil y gratis.'>
	<meta name='keywords' content='OAPP, Publicacion, Web, Empresa OAPP'>
	<meta name='author' content='oapp.com.ve'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link rel="shortcut icon" href="img/icono.jpg">
</head>
<body>
	<div class="container">
		<header>
			<img class="logo" src="img/logo2.png" alt="OAPP">
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

	<div class="contacto">

		<img src="img/papel.jpg" alt="" class="img_social">
		<h1 class="word_con">Contactanos.</h1>

		<form class="fmr_con" action="enviado.php" method="POST">
			<input    class="titulo_contacto" type="text" name="titulo" placeholder="Titulo."><br><br>
			<input    class="nombre_contacto" type="text" name="nombre" placeholder="Tu Nombre."><br><br>
			<input    class="apellido_contacto" type="text" name="apellido" placeholder="Tu Apellido."><br><br>
			<input    class="correo_contacto" type="email" name="correo" placeholder="Tu Correo."><br><br>
			<textarea class="mensaje_contacto"  name="mensaje" name="mensaje" id="" cols="48" rows="10" placeholder="Escribe Tu Mensaje."></textarea><br><br>
			<input    class="boton_contacto" type="submit" value="Enviar">
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
