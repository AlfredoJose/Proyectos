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
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
                        <li>
                           <a href="cerrarsesion.php">Salir</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Administracion
                       </li>
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
<div id="con">
    <div class="row-fluid">
                <!--BEGIN METRO STATES-->
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="admiusu.php">
                            <i class="icon-user"></i>
                            <div class="info"></div>
                            <div class="status">Nuevos usuarios</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-yellow">
                        <a data-original-title="" href="#">
                            <i class="icon-tags"></i>
                            <div class="info"><?php 

                                //Contador Online De Uusarios.....//

       

       function num_visitors(){
        # code...
       
        $session_path = session_save_path();
       $handle = opendir($session_path);

       $visitors= 0;

       while ($file = readdir($handle)){

       

        if ($file != "." && $file != ".."){

            if (preg_match("/^sess_/", $file) ==1) {
                
                $visitors++;

            }
        }


    }

       return $visitors;

}

       echo "".num_visitors()."";



       //Contador Online De Uusarios.....//


                             ?></div>
                            <div class="status">Usuarios Online</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-ren">
                        <a data-original-title="" href="rendimiento.php">
                            <i class=" icon-external-link-sign"></i>
                            <div class="info"></div>
                            <div class="status">Rendimiento</div>
                        </a>
                    </div>
                    <!--<div class="metro-nav-block nav-block-blue double">
                        <a data-original-title="" href="#">
                            <i class="icon-eye-open"></i>
                            <div class="info">+897</div>
                            <div class="status">Unico visitante</div>
                        </a>
                    </div>-->
                    <!--<div class="metro-nav-block nav-block-red">
                        <a data-original-title="" href="#">
                            <i class="icon-bar-chart"></i>
                            <div class="info">+288</div>
                            <div class="status">Actualizar</div>
                        </a>
                    </div>
                </div>
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-blue">
                        <a data-original-title="" href="#">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">29</div>
                            <div class="status">Nueva orden</div>
                        </a>
                    </div>-->
                    <div class="metro-nav-block nav-block-green double">
                        <a data-original-title="" href="#">
                            <i class="icon-tasks"></i>
                            <div class="info">$0</div>
                            <div class="status">Invercion de Productos</div>
                        </a>
                    </div>
                    <!--<div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="#">
                            <i class="icon-envelope"></i>
                            <div class="info">0</div>
                            <div class="status">Mensajes</div>
                        </a>
                    </div>-_>
                    <!--<div class="metro-nav-block nav-block-purple">
                        <a data-original-title="" href="#">
                            <i class="icon-remove-sign"></i>
                            <div class="info">34</div>
                            <div class="status">Cancelados</div>
                        </a>
                    </div>-->
                    <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="adminerpre.php">
                            <i class="icon-star"></i>
                            <div class="info"></div>
                            <div class="status">Premium</div>
                        </a>
                    </div>
                </div>
                </div>
                <div id="footer">
       2014 &copy; OAPP.
   </div>

</body>
</html>
