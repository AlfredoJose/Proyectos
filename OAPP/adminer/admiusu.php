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
                       
                       <li class="active">
                           <a href="adminer.php">Adminstracion</a>
                       </li>
                        
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
<div id="con">

<?php 
	include_once("../DBManager.php");
    include_once("cminer.php");


    $objUsuario = new usuarios();
    //$consulta = $objUsuario->consultar("");



    if(!isset($_POST["consultar"])){
        echo "";
             $arreglo=$objUsuario->consultar("");
        }else{
            
            $arreglo=$objUsuario->consultar($_POST["usuario"]);
        }
         if($arreglo){
         	echo "<div class='widget red'>";
         		echo "<div class='widget-title'>";
         		echo "<h4><i class='icon-reorder'></i> Usuarios Registrados</h4>";
         		echo "<span class='tools'>";
         		echo "<a href='javascript:;' class='icon-chevron-down'></a>";
         		echo "<a href='javascript:;' class='icon-remove'></a>";
         		echo "</span>";
         		echo "</div>";
         		echo "<div class='widget-body'>";
                    echo "<table class='table table-striped'>
                    <thead>
                        <tr>
                        	<th class='red3'>#</th>
                            <th class='red3'>Nombre</th>
                            <th class='red3'>Apellido</th>
                            <th class='reh3'>Usuario</th>
                        </tr>";
                        echo "</thead>";
        while($row = pg_fetch_row($arreglo)) {
        	echo "<tbody>";
             echo "<tr>";
                    echo "<th>";
                         echo $row[9];
                    echo "</th>";
                                        
                    echo "<td>";
                         
                    echo $row[0];
        
                    echo "</td>";
                                            
                            echo "<td>";
                                echo $row[1];
                            echo "</td>";
                                            
                            echo "<td>";
                                echo $row[2];
                            echo "</td>";
                                            
                            echo "</tr>";
                                    }

                            echo "</table>";
                            echo "</div>";
                            echo "</div>
                            	 </div>
    							</div>";



                          $tamano_pagina=10;

	if (isset($_GET['pagina']))
		$pagina= $_GET["pagina"];
	else 
   		$pagina='';
   
	if (!$pagina) {
   		$inicio = 0; 
   		$pagina=1;
	}
	else {
   		$inicio = ($pagina - 1) * $tamano_pagina;
	}

	$objUsuario =new usuarios();

	
	$result=$objUsuario->consulta_limitada("",$tamano_pagina,$inicio);
	$num_total_registros = pg_num_rows($result);

	$total_paginas = ceil($num_total_registros / $tamano_pagina);


	$numero=pg_num_rows($result);

	while ($arr = pg_fetch_row($result)) {
		
		echo "<tbody>";
             echo "<tr>";
                    echo "<th>";
                         echo $row[15];
                    echo "</th>";
                                        
                    echo "<td>";
                         
                    echo $row[0];
        
                    echo "</td>";
                                            
                            echo "<td>";
                                echo $row[1];
                            echo "</td>";
                                            
                            echo "<td>";
                                echo $row[2];
                            echo "</td>";
                                            
                            echo "</tr>";
                                    }

                            echo "</table>";
                            echo "</div>";
                            echo "</div>
                            	 </div>
    							</div>";

		
}

	if($num_total_registros) {
		
			for ($i=1; $i<=$total_paginas; $i++){
				if ($pagina == $i)
	                echo "<div style='clear: bont;'></div><div class='page'>".$pagina."</div> ";
	            else
	                echo "<div style='clear: bont;'></div><a class='color' href='top.php?pagina=$i'>$i</a>";
	        }    
	    }

  
        

 ?>
  

 <div id="footer">
       2014 &copy; OAPP.
   </div>

 <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/common-scripts.js"></script>
 </body>
</html>