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
    $existencias    = $_POST["existencias"];
    $descipcion = $_POST["descipcion"];

  //Info Foto del Producto//

  //Ruta Donde Se Guardaran Las Imagenes//

    $directorio = $_SERVER['DOCUMENT_ROOT'].'/OAPP/imgproductosp/';
    //  Capturando Los Datos//
    
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    //Me los vas ah Mover de Temporal a imgproductos//

    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_imagen);


  //Info Vendedor

    $nombre_clientee    = $_POST["nombre_clientee"];
    $email_clientee  = $_POST["email_clientee"];
    $telefono_clientee   = $_POST["telefono_clientee"];
    $direcion_clientee    = $_POST["direcion_clientee"];
    $pais    = $_POST["pais"];
    $yo_soy   = $_POST["yo_soy"];
    $estado_articulo = $_POST["estado_articulo"];
    $usuario = $_SESSION["usuario"];


    //Datos Adicionales Ocultos.

  @$ip  = getenv(REMOTE_ADDR);

  $objUsuario = new usuarios();           
  $result = $objUsuario->insertar_publicacion_premium($nombre,$precio,$existencias,$descipcion,$nombre_clientee,$email_clientee,$telefono_clientee,$direcion_clientee,$pais,$yo_soy,$estado_articulo,$usuario,$nombre_imagen);
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
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">

    <link rel="shortcut icon" href="img/m.png">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <title>TopShop</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/boot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css">

  <link rel="stylesheet" type="text/css" href="css/usuariospremium.css">
  <script src="js/bootstrap-fileupload.js"></script>
  
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
<div id="barra1ppp"><h2 class="pp"><i class=" icon-bullhorn"></i> Publica Tu Anuncio.</h2></div>
<hr>
<form id="formpp" method="POST" action="" enctype="multipart/form-data">
    <br>
    <label>Añade un Titulo *</label>
        <input name="nombre" class="textp" type="text" placeholder="Ejmp: Blackberry.">
    <label>Imagenes</label>
    <input class="imagenp"  type="file" name="imagen">
</div>
    <label>Precio</label>
    <input name="precio" class="textp" type="text" value="">
      <label>Exsistencias</label>
    <input name="existencias " class="textp" type="number" value="0">
    <label>¿Este Articulo es?</label>
    <select  name="estado_articulo" class="textp">
       <option></option>
       <option>Nuevo</option>
       <option>Usado</option>
       <option>Viejo</option>
       <option>Roto</option>
   </select>
    <label>Describe Tu Anuncio *</label>
        <textarea name="descipcion" class="desppp" placeholder="Este Preducto es Nuevo y Nuevo."></textarea>



    <div class="iinfovendedor">
    <label>Yo soy *</label>
   <select  name="yo_soy"  class="textp">
       <option>Indica Tu Tipo</option>
       <option>Particular</option>
       <option>Capacitacion</option>
       <option>Empresario</option>
       <option>Empresa</option>
       <option>Fundacion</option>
   </select>
    <label>Nombre de Contacto *</label>
        <input name="nombre_clientee"  class="textp" type="text">
    <label>Gamail o Email</label>
        <input name="email_clientee" class="textp" type="email">
    <label>Telefono</label>
        <input name="telefono_clientee"  class="textp" type="text">
    <label>Selecciona Tu Pais</label>
    <select name="pais"  class="textp">
        <option>Seleciona Pais</option>
        <option name="ciudad">Venezuela</option>
        <option name="ciudad">Estados Unidos</option>
        <option name="ciudad">Irak</option>
        <option name="ciudad">Tailandia</option>
        <option name="ciudad">España</option>
        <option name="ciudad">Dominicana</option>
    </select>
    <br><br>
    <label>¿Donde estas?*</label>
        <input name="direcion_clientee"  class="textp" type="text"><br>
   <!-- <div class="control-group">
                                    <label class="control-label">Default datepicker</label>

                                    <div class="controls">
                                        <input id="dp1" type="text" value="12-02-2012" size="16" class="m-ctrl-medium">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Starts with years view</label>

                                    <div class="controls">
                                        <div class="input-append date" id="dpYears" data-date="12-02-2012"
                                             data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input class="m-ctrl-medium" size="16" type="text" value="12-02-2012" readonly>
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Limit the view months</label>

                                    <div class="controls">
                                        <div class="input-append date" id="dpMonths" data-date="102/2012"
                                             data-date-format="mm/yyyy" data-date-viewmode="years"
                                             data-date-minviewmode="months">
                                            <input class="m-ctrl-medium" size="16" type="text" value="02/2012" readonly>
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>



                                <div class="datepicker dropdown-menu" style="display: none; top: 3495.73px; left: 339px;">

    <div class="datepicker-days" style="display: none;">
        <table class=" table-condensed">
            <thead>
                <tr>
                    <th class="prev">

                        ‹

                    </th>
                    <th class="switch" colspan="5">

                        February 2012

                    </th>
                    <th class="next">

                        ›

                    </th>
                </tr>
                <tr>
                    <th class="dow">

                        Su

                    </th>
                    <th class="dow">

                        Mo

                    </th>
                    <th class="dow">

                        Tu

                    </th>
                    <th class="dow">

                        We

                    </th>
                    <th class="dow">

                        Th

                    </th>
                    <th class="dow">

                        Fr

                    </th>
                    <th class="dow">

                        Sa

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="day old">

                        29

                    </td>
                    <td class="day old">

                        30

                    </td>
                    <td class="day old">

                        31

                    </td>
                    <td class="day">

                        1

                    </td>
                    <td class="day">

                        2

                    </td>
                    <td class="day">

                        3

                    </td>
                    <td class="day">

                        4

                    </td>
                </tr>
                <tr>
                    <td class="day">

                        5

                    </td>
                    <td class="day">

                        6

                    </td>
                    <td class="day">

                        7

                    </td>
                    <td class="day">

                        8

                    </td>
                    <td class="day">

                        9

                    </td>
                    <td class="day">

                        10

                    </td>
                    <td class="day">

                        11

                    </td>
                </tr>
                <tr>
                    <td class="day active">

                        12

                    </td>
                    <td class="day">

                        13

                    </td>
                    <td class="day">

                        14

                    </td>
                    <td class="day">

                        15

                    </td>
                    <td class="day">

                        16

                    </td>
                    <td class="day">

                        17

                    </td>
                    <td class="day">

                        18

                    </td>
                </tr>
                <tr>
                    <td class="day">

                        19

                    </td>
                    <td class="day">

                        20

                    </td>
                    <td class="day">

                        21

                    </td>
                    <td class="day">

                        22

                    </td>
                    <td class="day">

                        23

                    </td>
                    <td class="day">

                        24

                    </td>
                    <td class="day">

                        25

                    </td>
                </tr>
                <tr>
                    <td class="day">

                        26

                    </td>
                    <td class="day">

                        27

                    </td>
                    <td class="day">

                        28

                    </td>
                    <td class="day">

                        29

                    </td>
                    <td class="day new">

                        1

                    </td>
                    <td class="day new">

                        2

                    </td>
                    <td class="day new">

                        3

                    </td>
                </tr>
                <tr>
                    <td class="day new">

                        4

                    </td>
                    <td class="day new">

                        5

                    </td>
                    <td class="day new">

                        6

                    </td>
                    <td class="day new">

                        7

                    </td>
                    <td class="day new">

                        8

                    </td>
                    <td class="day new">

                        9

                    </td>
                    <td class="day new">

                        10

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="datepicker-months" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th class="prev">

                        ‹

                    </th>
                    <th class="switch" colspan="5">

                        2012

                    </th>
                    <th class="next">

                        ›

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7">
                        <span class="month">

                            Jan

                        </span>
                        <span class="month active">

                            Feb

                        </span>
                        <span class="month">

                            Mar

                        </span>
                        <span class="month">

                            Apr

                        </span>
                        <span class="month">

                            May

                        </span>
                        <span class="month">

                            Jun

                        </span>
                        <span class="month">

                            Jul

                        </span>
                        <span class="month">

                            Aug

                        </span>
                        <span class="month">

                            Sep

                        </span>
                        <span class="month">

                            Oct

                        </span>
                        <span class="month">

                            Nov

                        </span>
                        <span class="month">

                            Dec

                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="datepicker-years" style="display: block;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th class="prev">

                        ‹

                    </th>
                    <th class="switch" colspan="5">

                        2010-2019

                    </th>
                    <th class="next">

                        ›

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7">
                        <span class="year old">

                            2009

                        </span>
                        <span class="year">

                            2010

                        </span>
                        <span class="year">

                            2011

                        </span>
                        <span class="year active">

                            2012

                        </span>
                        <span class="year">

                            2013

                        </span>
                        <span class="year">

                            2014

                        </span>
                        <span class="year">

                            2015

                        </span>
                        <span class="year">

                            2016

                        </span>
                        <span class="year">

                            2017

                        </span>
                        <span class="year">

                            2018

                        </span>
                        <span class="year">

                            2019

                        </span>
                        <span class="year old">

                            2020

                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>-->





        <!--<a href="gracias.php" name="consultar" class="botoncitop">Publicar</a>-->
        <input type="submit" class="botoncitoppp" value="Enviar" name="consultar">
        </div>
</form>





          <?php

      }
                        ?> 

 










<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/form-component.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="date.js"></script>
<script src="js/common-scripts.js"></script>
<script src="js/bootstrap-fileupload.js" type="text/javascript"></script>
</body>
</html>