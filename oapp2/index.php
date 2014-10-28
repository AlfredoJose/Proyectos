<!DOCTYPE html>
<html>
<head>
	<title>OAPP</title>
	<meta charset="UTF-8">
	<meta name='description' content='Publica tus paginas web facil y gratis.'>
	<meta name='keywords' content='OAPP, Publicacion, Web, Empresa OAPP'>
	<meta name='author' content='oapp.com.ve'>

	<script type="text/javascript" src="js/jquery.js"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="assets/js/smoothscroll.js" type="text/javascript"></script>
	<script src="assets/js/appear.min.js" type="text/javascript"></script>
	<script src="assets/js/animations.min.js" type="text/javascript"></script>
	<script src="assets/js/backbone.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/animations.js"></script>
	<script type="text/javascript" src="assets/js/animations.min.js"></script>
	<script type="text/javascript" src="assets/js/appear.js"></script>
	<script type="text/javascript" src="assets/js/backbone.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.min.js"></script>

	<link rel="stylesheet" href="assets/css/animations.min.css"/>



	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/efectos.css">
	
	<link rel="shortcut icon" href="img/icono.jpg">
</head>
<body>
	<script type="text/javascript">
		function openVentana(){
			$(".ventanaSoporte").show("slow");
		}
		function closeVentana(){
			$(".ventanaSoporte").slideUp("fast");
		}
	</script>
	<div class="ventanaSoporte">
		<form id="fmrsoporte" action="">
		
			<label>Nombre</label>
			<a id="close" href="javascript:closeVentana();">X</a><br>
				<input type="text" id="nombre" name="nombre"><br>
			<label>Problema</label><br>
			<textarea id="problema" name="problema" cols="50" rows="5"></textarea>

		</form>
	</div>

	<div class="container">
		<header>
			<img class="logo" src="img/logo_beta.png" alt="OAPP">
			
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
				<li><a href="javascript:openVentana();">Soporte</a></li>
				<div class="lines"></div>
				<input type="search" name="buscar" id="buscar" placeholder="Busca una Pagina.">
				<input type="submit" value="Buscar" name="enviar" id="btnbuscar">
				<div class="lineblue"></div>
			</ul>
		</nav>
	</div>

	<div class="publica_slide">

		<img class="papel_slide" src="img/papel.jpg">
		<h1 class="titulo_slide">Publica Tu Pagina Web.</h1>
		<form method="GET" action="public.php">
			<input class="publicar" type="url" name="pagina" placeholder="http://www.google.com">
			<input class="btn-publicar" type="submit" value="Publicar" name="publicar" id="publicar">
		</form>

	</div>

	<div class="estadisticas">
		<div class="container2">
			<h1 class="titulo_estadisticas animate-in" data-anim-type="fade-in-up" data-anim-delay="10">Obten Mas Visitantes En Tus Paginas</h1>
			<p  class="parrafo_estadisticas">Publicando tu pagina en los repositorios de OAPP, podras tener mas<br>
			visitantes que miren tu web y compren tus servicios.</p>
			<img class="img_estadisticas" src="img/estadisticas.png">
		</div>
	</div>
	<div class="empresa">
		<div class="container2">
			<h1 class="titulo_empresa">¿Tienes una empresa?</h1>
			<p class="parrafo_empresa">No tienes suficientes Ingresos Mira la mejor forma.</p>
			<h1><a class="titulo2_empresa" href="">Dondstoy</a></h1>
			
			<img class="img_bueno" src="img/bueno.png">
				<span>Busca, descubre y encuentra los mejores lugares comerciales.</span><br>
				<img class="img_bueno" src="img/bueno.png">
				<span>Proyecte su empresa nacional e internacional.</span><br>
				<img class="img_bueno" src="img/bueno.png">
				<span>Hagace conocer usted y su negocio publicando con nosotros.</span><br>
				<img class="img_bueno" src="img/bueno.png">
				<span>Consiga y aumente el numero de sus ventas.</span><br>
				<img class="img_bueno" src="img/bueno.png">
				<span>Crea ttus Propias Campañas publicitarias.</span><br>
				<img class="img_bueno" src="img/bueno.png">
				<span>Es totalmente gratis.</span><br>
		</div>
		<img class="candado" src="img/seguro.png">
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


<div class="pace">
	<a title="Web Statistics" href="http://clicky.com/100773426"><img alt="Web Statistics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100773426); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100773426ns.gif" /></p></noscript>
</div>
</body>
</html>