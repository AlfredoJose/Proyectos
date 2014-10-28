<?php 
	if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Googlebot' ) != false ){
    mail('alfredobertho@hotmail.com', 'Paso de Googlebot', '
        IP: '.$_SERVER['REMOTE_ADDR'].' - 
        Sistema operativo y navegador: '.$_SERVER['HTTP_USER_AGENT'].' - 
        Web destino: '.$_SERVER['REQUEST_URI'].''
    );
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hecho Por Alfredo</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<meta name = "detectify-verificación" content = "d730ba707cb46bdbf732e17cd43c9cb2 "/>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>
	<script type="text/javascript" src="js/subir.js"></script>
</head>
<body>

		
	<div class="redes">
		<div class="caja">
			<img class="icons" src="img/face.png">
			<img class="icons" src="img/tw.png">
			<img class="icons" src="img/ybt.png">
			<h1 class="boletin">Suscribete A El Boletin</h1>
			<input class="email" type="text" placeholder="tu@email.com">
			<button class="sus">Suscribir</button>
		</div>	

		<!--<img src="img/up.png" class="up-boton up">-->
		<span class="scroll"><img src="img/up.png" class="up up-boton"></span>
	</div>
	
	<!--Inicio del Conainer-->
	<div id="container">
	<!--Inicio de Menu-->
		<div id="menu">
			<ul>
				<li><a href="#servicios">SERVIVIOS</a></li>
				<li><a href="#trabajo">TRABAJO</a></li>
				<li class="lilogo"><a href="#inicio" class="logo"></a></li>
				<li><a href="#contactos">CONTACTO</a></li>
				<li><a href="#faq">FAQ</a></li>
			</ul>
	
	</div><!--Fin del Menu-->

	<div id="inicio">
		<div id="slider">
			<div id="containerSlider">
				<img src="img/slider.jpg" alt="" width="850" height="450">
				<img src="img/slider2.jpg" alt="" width="850" height="450">
				<img src="img/slider3.jpg" alt="" width="850" height="450">
				
			</div><!--ContainerSlider-->
	
	</div><!--Slider-->
	</div><!--Incio-->
		

	
	<div id="servicios">
		<h2>Servicios</h2>
		<div class="contenido">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div id="tabServicios"></div>
		</div><!--Contenido-->
		
		
	</div><!--Incio-->

	


	<div id="trabajo">
		<h2>Trabajo</h2>
		<div class="contenido">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!--Contenido-->
		<div id="slideshow">
			<img src="" alt="">
			<img src="" alt="">
			<img src="" alt="">
			<img src="" alt="">
		</div><!--SlideShow-->
	</div><!--Servicios-->

	<div id="faq">
		<h2>faq</h2>
		<div class="contenido">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!--Contenido-->
		<div id="acordeonfaq">
		
	</div><!--Acordeonfaq-->
	</div><!--faq-->

	<div id="contactos">
		<h2>Contacto</h2>
		<div class="contenido">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!--Contenido-->
		<div id="formulario">
			<form>
				<label>Nombre:</label><br>
				<input type="text" class="campo" id="tfNombre"><br>


				<label>Correo Electronico:</label><br>
				<input type="email" class="campo" id="tfCorreo"><br>

				<label>Asunto:</label><br>
				<input type="text" class="campo" id="tfAsunto"><br>

				<label>Mensaje:</label><br>
				<textarea id="tfMensaje" cols="30" rows="10"></textarea><br>

				<input type="submit" class="boton" value="Enviar">

			</form>
		</div><!--FormularioContacto-->
	</div><!--Contactos-->

	<div id="footer">
		Derechos Reservados Por Alfredo Jose 2014 
	</div><!--Footer-->
	<!--Fin del Container-->
	</div>

</body>
</html>