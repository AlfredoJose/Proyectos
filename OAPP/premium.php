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
 


	

?>
<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
	<link rel="shortcut icon" href="img/m.png">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
	<link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />

</head>
<body>
		<div class="panel">
		<div class="sidebar-toggle-box hidden-phone">

    <div class="icon-reorder"></div>

</div>
<a class="brand" href="top.php" style="color:#FFF">

    
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
            <i class="icon-minus-sign cerrar"><span class="starcaja">Cerrar</span></i>
        </a>
    </li>
    
    <!--

     END SUPPORT 

    -->
    <!--

     BEGIN USER LOGIN DROPDOWN 

    -->
   
    <li class="dropdown-2pppp">
       
            <span class="usuariosesion" ><a  class="username" href="top.php">Inicio</a></span>
            <b class="caret"></b>

        

        <ul class="dropdown-menu extended logout">
           
        </ul>
    </li>
    <!--

     END USER LOGIN DROPDOWN 

    -->

</ul>

</div>

		
		<?php 
			if(!isset($_POST["enviar"])){							
					echo "<br/><br/><br/><br/><br/>";
							
						$objPlan = new usuarios();
								if(!isset($_POST["enviar"])){//El usuario no envio el formulario de consulta individual
									@$arreglo=$objPlan->insertar_planes_premium('');
								}
								else{
									echo "filtro activado";
									$arreglo=$objPlan->insertar_planes_premium($_POST["Nombre"]);
									
									
									}
			if($arreglo){
				/*echo "<article>
					<div class='con'>
					<span class='titulo'></span>
					</div>
					<img src='img/4.ñjpg'>
					<div class='con'>

					<span class='titulo'>Ver Mas</span>
					</div>";

					<article class="article">
			<div class="conn">
				<span class="tituloo">Plan Premium</span>
			</div>
			<img src="img/9.jpg">
			<div class="conn">
				<span class="tituloo">Con el Plan Premium Tendras ventas
					rapidas <br>y podras llegar a Millones <br>De Usuarios Cada dia. </span>
			</div>
			<div class="connn">
				<span class="titulo">Por tan Solo 25$ Anual.</span>
			</div>
			<input type="submit" id="botton" name="comprar" value="Comprar">
		</article>

					*/
				while($row = pg_fetch_row($arreglo)) {
					//echo "<div id='space'>";
					echo "<article class='article'>";

						echo "<div class='conn'>";
						echo "<span class='tituloo'>$row[0]</span>";
						echo "</div>";
						echo "<img src='$row[1]'>";
												
						echo "<div class='conn'";
						echo "<div class='titulo'>$row[2]</span>";
						echo "</div>";


						echo "<div class='connn'";
						echo "<div class='titulo'>$row[3]</span>";
						echo "</div>";
											
						echo "</article>";
						//echo "</div>";
									}
									
								}
							}
						
	

		 ?>
		</div>



			<!--<div id="plan1">
				<h3 class="con">Plan Premium</h3>
				<img src="premium.jpg">
				<dfn>Obtendras Buenas Publicaciones <br>
					Interactivas y podras llegar a Millones<br>De Usuarios Cada dia </dfn>
				<h3> 25$ USD Anual</h3>
			</div>-->



			<?php 
				 $objUsuario =new usuarios();
				 $result=$objUsuario->planes_premium("");
				  echo "<div class='suscribete'>
				<h3 class='premiumdes'>¿Quieres Vender Tus Productos mas Rapidos?</h3>
				<h3 class='premiumdes'>¡ OAPP Te tiene la solucion, Susccribete A nuestros Planes !</h3>";

         while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {

        echo "<a href='premium.php?id=".$arr['id']."'>";
   		
        echo "
				<div class='linea2'></div>
				<div class='caja2'>
					<h2 class='premiumoapp'><i class=' icon-star'></i> ".$arr["nombre"]."</h2>
						<hr class='hr'>




				<h2 class='p2'>* ".$arr["extra1"]."</h2>
					<hr class='hr'>
					<h2 class='p3'> * ".$arr["extra2"]."</h2>
					<hr class='hr'>
					<h2 class='p4'> * ".$arr["extra3"]."</h2>
					
					<hr class='hr'>
					<h2 class='p5'> ".$arr["precio"]."$ Mensual</h2>
					<hr class='hr'>
					<a href='comprapaquetes.php?id=".$arr['id']."&nombre=".$arr['nombre']."&id_cliente=".$arr['id']."'><input type='submit' class='botonsus' value='Suscribirme'></a>
				</div>
				</a>";


			}


			 $objUsuario =new usuarios();
				 $result=$objUsuario->planes_premium2("");

         while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {

      		echo "  <a href='premium.php?id=".$arr['id']."'>

				<div class='linea'></div>

				<div class='caja'>
					<h2 class='premiumoapp'><i class=' icon-star'></i>  ".$arr["nombre"].".</h2>
						<hr class='hr'>


					<h2 class='p2'>*  ".$arr["extra1"]."</h2>
					<hr class='hr'>
					<h2 class='p3'> * ".$arr["extra2"]."</h2>
					<hr class='hr'>
					<h2 class='p4'> *  ".$arr["extra3"]."</h2>
					<hr class='hr'>
					<h2 class='p4'> * ".$arr["extra4"]."</h2>
					<hr class='hr'>
					<h2 class='p5'>  ".$arr["precio"]."$ Mensual</h2>
					<hr class='hr'>
					<a href='comprapaquetes.php?id=".$arr['id']."&nombre=".$arr['nombre']."'><input type='submit' class='botonsus' value='Suscribirme'></a>


				</div>

				</a>";

			}
				


 $objUsuario =new usuarios();
				 $result=$objUsuario->planes_premium3("");

         while ($arr = pg_fetch_array($result, NULL, PGSQL_ASSOC )) {
      		echo "  <a href='premium.php?id=".$arr['id']."'>";

				echo "<div class='linea3'></div>
				<div class='caja3'>
					<h2 class='premiumoapp'><i class=' icon-star'></i>  ".$arr["nombre"]."</h2>
						<hr class='hr'>


					<h2 class='p2'>*  ".$arr["extra1"]."</h2>
					<hr class='hr'>
					<h2 class='p3'> * ".$arr["extra2"]."</h2>
					<hr class='hr'>
					<h2 class='p4'> *  ".$arr["extra3"]."</h2>
					<hr class='hr'>
					<h2 class='p4'> * ".$arr["extra4"]."</h2>
					<hr class='hr'>
					<h2 class='p4'> * ".$arr["extra5"]."</h2>
					<hr class='hr'>
					<h2 class='p5'>  ".$arr["precio"]."$ Anual</h2>
					<hr class='hr'>
					
					<a href='comprapaquetes.php?id=".$arr['id']."&nombre=".$arr['nombre']."'><input type='submit' class='botonsus' value='Suscribirme'></a>
				</div>

			 </a> ";

			}
 

			 ?>

			


					
		
				<div class="metodopago">
					<h3 class="premiumdes">¿No Sabes como Pagar?</h3>
					<h3 class="premiumdes">¡ OAPP Te tiene la solucion, Mira todos los metodos de Pagos Activos En OAPP !</h3>

					<div class="lineapago1"></div>
					<div class="cajapagopaypal">
						<img class="master" src="img/master.png">
					</div>
					<div class="lineapago2"></div>
					<div class="cajapagopaypal">
						<img class="paypal" src="img/paypal.png">
					</div>
					<div class="lineapago3"></div>
					<div class="cajapagopaypal">
						<img class="visa" src="img/visa.jpg">
					</div>
				</div>
				<!--<div class="lineaderechar"></div>
				<div class="lineaiz"></div>
				<div class="lineader"></div>-->
			</div>





		</section>
	<!--<footer>
		<p class="piedepagina1"> © 2014 OAPP. Todos los derechos reservados.</p>
		<a href="soporte.php" class="links">Soporte Tecnico<p class="piedepagina"></p></a>
	</footer>-->
</body>
</html>