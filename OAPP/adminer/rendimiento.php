<?php 
    require_once("sesion.php");
  
  $sesion = new sesion();
  $usuario = $sesion->get("usuario");
  $nombre = $sesion->get("nombre");

  
  require_once("cminer.php");
  $objUsuario=new usuarios();
  

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Rendimiento</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Mosaddek" name="author" />
    <link rel="stylesheet" type="text/css" href="css/adminer.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/style-default.css" rel="stylesheet" id="style_color" />
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>

 <h3 class="page-title">Panel de Control</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Inicio</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="../index.php">OAPP</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           <a href="adminer.php">Administracion</a>
                       </li>
                       <span class="divider">/</span>
                        <li class="active">
                           <a href="adminer.php">Premium</a>
                       </li>
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>



            <div id="con">

            <?php

      header("Content-type: image/png");

        $y = 300;
        $contador = 70;
        $imagen = ImageCreateTrueColor(600,$y);

        $blanco = ImageColorAllocate($imagen,225,225,225);
        ImageFillToBorder($imagen,0,0,$blanco,$blanco);

        imagecopy($imagen,imagecreatefrompng('imgadminer/fondo.png'),0,0,0,0,600,600);
        imagefilter($imagen,IMG_FILTER_BRIGHTNESS,30);
    
        $rojo = ImageColorAllocate($imagen,255,0,0);

        $negro = ImageColorAllocate($imagen,0,0,0);
        $texto = "Hola yo soy un texto";
        $font = "arial.ttf";

//Graficando Los Resultados Que hay en La Base De Datos

        $bd =pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");
        $resultado = $bd->query("SELECT * FROM logs;");
        while($fila = $resultado->fetchArray()){
        ImageFilledRectangle($imagen,$contador,$y-55,$contador+10,($y-55-($fila['valores']*5)),$rojo);
        imagettftext($imagen,8,-45,$contador,250,$y-55,$font,$fila['meses']);
        $contador += 20;
}
        $bd->close();



        ImagePNG($imagen);
        ImageDestroy($imagen);

?>


</body>

</html>