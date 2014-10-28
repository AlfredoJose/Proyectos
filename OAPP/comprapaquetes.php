<?php	

	require_once("sesion.php");
	require_once("DBManager.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//$nombre = $sesion->get("nombre");
	
	if( $usuario == false ){	
		header("Location: index.php");		
	}
	
	require_once("cusuarios.php");
	

    $objUsuario=new usuarios();
    $arreglo=$objUsuario->estado($usuario);
    $perfil=$arreglo[0];

    $objUsuario=new usuarios();
	$id_plan = $_GET["id"];
	$nombre_producto = $_GET["nombre"];
	$fecha = date("U");
	$estado = 0;


	$objUsuario = new usuarios();						
	$result = $objUsuario->insertar_pedido_plan($nombre_producto,$usuario,$fecha,$estado,$id_plan);
	if($result)
		header("Location: precesolisto.php");

	else
		echo "Tienes un dato incorrecto.";
 


	

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
            <i class="icon-bookmark-empty"></i>
       </a>
  
     <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="premium.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-star"></i>
       </a>


    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="publicara.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-bullhorn"></i>
        </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="cerrarsesion.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-minus-sign"></i>
        </a>
    </li>
 


    </li>
    </div>
    <!--

     END SUPPORT 

    -->
    <!--

     BEGIN USER LOGIN DROPDOWN 

    -->
   
    <li class="dropdown-2">
       
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
	





</body>
</html>