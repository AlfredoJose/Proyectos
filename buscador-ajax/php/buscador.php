<?php 

	require_once('../conn/connnect.php');

	sleep(1);

	$buscar = '';

	if (isset($_POST['buscar'])) {

		$buscar = $_POST['buscar'];
	}

	$consulta = "SELECT * FROM art WHERE articulo LIKE '%".$buscar."%' OR nombre LIKE '%".$buscar."%' ORDER BY visitas LIMIT 5";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);

 ?>

<?php if ($total>0 && $buscar!='') { ?>

	<h2>Resultado De Busqueda....</h2>
	<?php do {  ?>
		<div class="art">
		<a href="articulo.php?id=<?php echo $fila['id'] ?>&buscar=<?php echo $buscar; ?>">
			<span class="titulo"><?php echo  str_replace($buscar, '<strong>'.$buscar.'</strong>',utf8_encode( $fila['nombre']))?></span>	
			<br>
			
			<span class="contenido"><?php echo  str_replace($buscar, '<strong>'.$buscar.'</strong>',substr( utf8_encode( $fila['articulo']),0,150))?></span>	
		</a>
		</div>
	<?php } while($fila=mysqli_fetch_assoc($resultado)); ?>

<?php }
elseif ($total>0 && $buscar=='') echo "<h2>Ingresa Un Palabra en Dondstoy</h2><p>Pon palabras clves con el tema</p>";
else echo "<h2>No hay Ningun Resultado</h2><p>Pon palabras clves con el tema</p>";
	
 ?>

