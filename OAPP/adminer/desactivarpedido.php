<?php 
    require_once("sesion.php");
  
  $sesion = new sesion();
  $usuario = $sesion->get("usuario");
  $nombre = $sesion->get("nombre");
  
  if( $usuario == false ){  
   header("Location: ../index.php");    
  }
  
  require_once("cminer.php");
  $objUsuario=new usuarios();
  

 ?>
<?php 


$con = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");

$peticion = "UPDATE pedidos_premium SET estado=0 WHERE id = '".$_GET['id']."'";
$resultado = pg_query($con, $peticion);

pg_close($con);


$con = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");

$peticion = "UPDATE usuarios SET estado=0 WHERE usuario='".$_GET['usuario']."'";
$resultado = pg_query($con, $peticion);

pg_close($con);
?>
<script>
	window.location = "adminerpre.php";
</script>

