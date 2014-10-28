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
    $arreglo=$objUsuario->estado($usuario);
    $perfil=$arreglo[0];
  
  //consultando perfil del usuario
  require_once("cusuarios.php");
  $objUsuario=new usuarios();


  if(!isset($_POST["consultar"])){
  }
    else{ 
  
  //Info Usuario
    $nombre     = $_POST["nombre"];
    $precio    = $_POST["precio"];
    $exsistencias    = $_POST["exsistencias"];
    $descipcion = $_POST["descipcion"];

  //Info Foto del Producto//

  //Ruta Donde Se Guardaran Las Imagenes//

    $directorio = $_SERVER['DOCUMENT_ROOT'].'/OAPP/imgproductos/';
    //  Capturando Los Datos//
    
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    //Me los vas ah Mover de Temporal a imgproductos//

    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_imagen);


  //Info Vendedor

    $nombre_cliente    = $_POST["nombre_cliente"];
    $email_cliente  = $_POST["email_cliente"];
    $telefono_cliente   = $_POST["telefono_cliente"];
    $direcion_cliente    = $_POST["direcion_cliente"];
    $ciudad    = $_POST["ciudad"];
    $yo_soy   = $_POST["yo_soy"];
    $estado_articulo = $_POST["estado_articulo"];
    $usuario = $_SESSION["usuario"];


    //Datos Adicionales Ocultos.

  @$ip  = getenv(REMOTE_ADDR);

  $objUsuario = new usuarios();           
  $result = $objUsuario->insertar_p($nombre,$precio,$exsistencias,$descipcion,$nombre_cliente,$email_cliente,$telefono_cliente,$direcion_cliente,$ip,$ciudad,$yo_soy,$estado_articulo,$usuario,$nombre_imagen);
  if($result)
    header("Location: top.php");
  else
    echo "Tienes un dato incorrecto.";
} 
?>
<html lang="es" >
<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="shortcut icon" href="img/m.png">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>TopShop</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
  <link rel="stylesheet" type="text/css" href="css/usuariospremium.css">
  <link rel="shortcut icon" href="img/m.png">
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
  <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
     



<?php
      
     if ($perfil==1){
     ?>

     
       <div class="panelp">
<div class="sidebar-toggle-boxp hidden-phone">

    <div id="iconp" class="icon-star"></div>

</div>
<a class="brandp" href="index.php" style="color:#FFF">

    
    <p class="opp">Bienvenido A OAPP Premium</p>

</a>
</div>
<div class="m">
<ul class="nav pull-right top-menu">

    <!--

     BEGIN SUPPORT 

    -->
    <div class="dropmover">
     <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="buscar.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-search"></i>
       </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Premium" href="panelcontrolp.php" data-toggle="tooltip" data-placement="bottom">
            <i class="icon-dashboard"></i>
       </a>


    </li>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="publicara.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-bullhorn"></i>
        </a>
    <li class="dropdown-3 mtop5">
        <a class="dropdown-toggle element" data-original-title="Cerrar" href="cerrarsesion.php" data-toggle="tooltip" data-placement="bottom">
            <i class=" icon-off"></i>


    </li>
      <li class="dropdown-2p">
       
            <span class="usuariosesion" ><a class="username" href="top.php">Inicio</a></span>
            <b class="caret"></b>

        

        <ul class="dropdown-menu extended logout">
           
        </ul>
    </li>

    </div>

   
  
    <!--

     END USER LOGIN DROPDOWN 

    -->

</ul>

</div>
<div id="barra1pp"><h2 class="pp"><i class=" icon-bullhorn"></i> Publica Tu Anuncio.</h2></div>
<hr>
<form id="formp" method="POST" action="" enctype="multipart/form-data">
    <br>
    <label>Añade un Titulo *</label>
        <input name="nombre" class="text" type="text" placeholder="Ejmp: Blackberry.">
    <label>Imagenes</label>
        <input name="imagen" class="text" type="file">
    <label>Precio</label>
    <input name="precio" class="text" type="text" value="">
      <label>Exsistencias</label>
    <input name="exsistencias" class="text" type="number" value="0">
    <label>¿Este Articulo es?</label>
    <select  name="estado_articulo" class="sel">
       <option></option>
       <option>Nuevo</option>
       <option>Usado</option>
       <option>Viejo</option>
       <option>Roto</option>
   </select>
    <label>Describe Tu Anuncio *</label>
        <textarea name="descipcion" class="des" placeholder="Este Preducto es Nuevo y Nuevo."></textarea>
<div id="barra2pp"><h2 class="pp"><i class="icon-user"></i> Informacion del Vendedor</h2></div><br><br>
    <label>Yo soy *</label><br>
   <select  name="yo_soy" class="sel">
       <option>Indica Tu Tipo</option>
       <option>Particular</option>
       <option>Empresario</option>
       <option>Empresa</option>
       <option>Fundacion</option>
   </select>
    <label>Nombre de Contacto *</label>
        <input name="nombre_cliente" class="text" type="text">
    <label>Email *</label>
        <input name="email_cliente" class="text" type="email">
    <label>Telefono</label>
        <input name="telefono_cliente" class="text" type="text">
    <label>Añade Tu Ubicacion</label>
    <select name="ciudad" class="sel">
        <option>Seleciona Un Estado</option>
        <option name="ciudad">Bolivar</option>
        <option name="ciudad">Monagas</option>
        <option name="ciudad">Amazonas</option>
        <option name="ciudad">Lara</option>
        <option name="ciudad">Carabobo</option>
        <option name="ciudad">Barinas</option>
    </select>
    <br><br>
    <label>Añade Una Direccion *</label>
        <input name="direcion_cliente" class="text" type="text"><br>
        <!--<a href="gracias.php" name="consultar" class="botoncitop">Publicar</a>-->
        <input type="submit" class="botoncitop" value="Enviar" name="consultar">
</form>





          <?php

      }
                        ?> 

 











  
</body>
</html>