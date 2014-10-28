<?php 

		require_once'conn/conexcion.php';
		
				$resultado = mysql_query(" SELECT id,nombre,descripcion FROM paginas WHERE  id = ".$_GET['id']." LIMIT 1 ");
				//$consulta = "SELECT  id,nombre,descripcion FROM paginas WHERE  id = ".$_GET['id']." LIMIT 1 ";				
					
				//$consulta = "SELECT id,nombre,descripcion FROM paginas WHERE id =".$_GET['id']." LIMIT 1";
				//$resultado = $connect->query($consulta);
					
			
		


 ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54886549-1', 'auto');
  ga('send', 'pageview');

</script>