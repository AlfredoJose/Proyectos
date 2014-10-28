<?php 

	require_once'conn/conexcion.php';

	sleep(1);

	$buscar = '';

	if (isset($_POST['buscar'])) {

		$buscar = $_POST['buscar'];
	}
	$resultado = mysql_query(" SELECT * FROM paginas WHERE nombre LIKE '%".$buscar."%' OR descripcion LIKE '%".$buscar."%' ORDER BY RAND() LIMIT 5");
	//$consulta = "SELECT * FROM paginas WHERE nombre LIKE '%".$buscar."%' OR descripcion LIKE '%".$buscar."%' ORDER BY RAND() LIMIT 5";
	//$resultado = $connect->query($consulta);
	//$fila = mysql_fetch_assoc($resultado);
	mysql_free_result($resultado);
	$total = mysql_num_rows($resultado);

 ?>

<?php if ($total>0 && $buscar!='') { ?>

	<h2 class="result_busqueda">Resultado De Busqueda....</h2>
	<?php do {  ?>
		<div class="art">
		<a class="link" href="articulo.php?id=<?php echo $fila['id'] ?>&buscar=<?php echo $buscar; ?>">
			<span class="titulo">* <?php echo  str_replace($buscar, '<strong>'.$buscar.'</strong>',utf8_encode( $fila['nombre']))?></span>	
			<br>
			
			<span class="contenido"><?php echo  str_replace($buscar, '<strong>'.$buscar.'</strong>',substr( utf8_encode( $fila['descripcion']),0,150))?></span>	
		</a>
		</div>
	<?php } while($fila=mysql_fetch_assoc($resultado)); ?>

<?php }
elseif ($total>0 && $buscar=='') echo "<h2></h2><p></p>";
//else echo "<h2>No hay Ningun Resultado</h2>";
	
 ?>

 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54886549-1', 'auto');
  ga('send', 'pageview');

</script>

