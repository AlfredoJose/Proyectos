<?php 
	include_once "sesion.php";
    //Intanciando la clase session
    $sesion = new sesion();
    
    if(isset($_POST["entrar"])){
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        
        if(validarUsuario() == true){            
            $sesion->set("usuario",$usuario);
            header("location: panel.php");
        }
        else{
            echo "<div class='error'><h2>¡No te has Registrado!</h2></div>";
        }
    }
    
    function validarUsuario($usuario, $clave){
       
            
            $result = mysql_query("SELECT usuario,clave from admin where usuario ='$usuario'" .
            " and clave = '$clave'");
                
            
            
        }
    
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("clave");
	
	if( $usuario == true ){	
		header("Location: panel.php");		
	}
	
	



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel De Control</title>
	<link rel="stylesheet" href="css/paginas.css">
</head>
<body>
	<header>
		<img class="logo" src="img/logo_beta.png" alt="OAPP">
	</header>
	<section>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			
			<input type="text" name="usuario">
			<input type="password" name="clave">
			<input type="submit" name="entrar" value="entrar">
	
		</form>
	</section>
	<div class="paginas_rand">
			<?php

				require_once'conn/conexcion.php';

				$resultado = mysql_query(" SELECT * FROM paginas ORDER BY RAND() ");
				
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

	</div>
</body>
</html>