<!DOCTYPE html>
<html>
<head>
	<title>Pasada de datos con Ajax!</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
	function openVentana(){
		$(".ventana").slideDown("slow");
	}
	function closeVentana(){
		$(".ventana").slideUp("fast");
	}
	</script>
</head>
<body>
	
	<div class="ventana">
		<h1>Ventana</h1>
		<div class="cerrar"><a href="javascript:closeVentana();">X</a></div>

		<form action="php/enviar.php" method="POST">
		<label>Nombre</label>
			<input type="text" id="nombre" name="nombre" placeholder="Ingresa Tu nombre"><br>
		<label>Apellido</label>
			<input type="text" id="apellido" name="apellido" placeholder="Ingresa Tu Apellido."><br>
			<input type="button" value="Enviar" onclick="javascript:enviarDatos();">
	</form>
	<br>
	<br>
	<br>
	<div id="mensaje">Escribe Tus Datos</div>
	</div>

	<h1>Esto Funciona</h1>
	<h2><a href="javascript:openVentana();">Enviar Datos</a></h2>

	<script type="text/javascript">
	function enviarDatos() {

		var nombre = document.getElementById('nombre').value;
		var apellido = document.getElementById('apellido').value;

		$.ajax({
			type:'POST',
			url :'php/enviar.php',
			data:('nombre='+nombre+'&apellido='+apellido),
			success:function(respuesta) {

				if (respuesta==1){
					$('#mensaje').html('Tu mensaje a sido insertado');
					document.getElementById('nombre').value="";
					document.getElementById('apellido').value="";
				}else{
					$('#mensaje').html('Tu mensaje no a sido insertado');
				}
				
			}
		})

	}
	</script>
</body>
</html>