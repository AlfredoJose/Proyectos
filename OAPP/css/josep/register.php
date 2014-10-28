<?php 
	
    require_once("DBManager.php");
    require_once("cusuarios.php");


    require_once("sesion.php");
	

	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("nombre");
	
	if( $usuario == true ){	
		header("Location: top.php");		
	}
	
	require_once("cusuarios.php");
	$objUsuario=new usuarios();
 	




	if(!isset($_POST["registrar"])){
	}
		else{ 
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$usuario = $_POST["usuario"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$clave = md5($_POST["clave"]);


	@$ip = getenv(REMOTE_ADDR);
	$navegador = $_SERVER["HTTP_USER_AGENT"];

    
								
	$objUsuario=new usuarios();						
	$result=$objUsuario->insertar($nombre,$apellido,$usuario,$email,$tel,$clave,$ip,$navegador,$utc);
	if($result)
		header("Location: entrar.php");
	else
		echo "Hay un error no es tuyo es de nosotros Disculpanos.";
							
							}
	

 ?>

<!DOCTYPE html>
<html lang="es" >
<head>
	<title>OAPP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/re.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/m.png">

</head>
<body>







	 <div class="widget box green">
                         <div class="widget-title">
                             <h4>
                                 <i class="icon-reorder"></i> Completa Los 3 pasos para Registrarte En OAPP
                             </h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                         </div>
                         <div class="widget-body">
                             <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div id="pills" class="custom-wizard-pills">
                                 <ul>
                                     <li><a href="#pills-tab1" data-toggle="tab">Paso 1</a></li>
                                     <li><a href="#pills-tab2" data-toggle="tab">Paso 2</a></li>
                                     <li><a href="#pills-tab3" data-toggle="tab">Paso 3</a></li>

                     
                                 </ul>
                                 <div class="progress progress-success progress-striped active">
                                     <div class="bar"></div>
                                 </div>
                                 <div class="tab-content">
                                     <div class="tab-pane" id="pills-tab1">
                                         <h3>Primer Paso</h3>
                                         <div class="control-group">
                                             <label class="control-label">Usuario</label>
                                             <div class="controls">
                                                 <input type="text" name="usuario" class="span6" required>
                                                 <span class="help-inline">Escriba Su usuario</span>
                                             </div>
                                         </div>
                                         <div class="control-group">
                                             <label class="control-label">Email</label>
                                             <div class="controls">
                                                 <input type="email" name="email" class="span6" required>
                                                 <span class="help-inline">Escriba su Email</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="tab-pane" id="pills-tab2">
                                         <h3>Segundo Paso</h3>
                                         <div class="control-group">
                                             <label class="control-label">Nombre</label>
                                             <div class="controls">
                                                 <input type="text" name="nombre" class="span6" required />
                                                 <span class="help-inline">Escriba su Nombre</span>
                                             </div>
                                         </div>
                                         <div class="control-group">
                                             <label class="control-label">Apellido</label>
                                             <div class="controls">
                                                 <input type="text" name="apellido" class="span6" required/>
                                                 <span class="help-inline">Escriba Su Apellido</span>
                                             </div>
                                         </div>
                                         <div class="control-group">
                                             <label class="control-label">Numero de Telefono</label>
                                             <div class="controls">
                                                 <input type="text" name="tel" class="span6" required />
                                                 <span class="help-inline">Escriba sui numero de telefono</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="tab-pane" id="pills-tab3">
                                         <h3>Tercer Paso</h3>
                                         <div class="control-group">
                                             <label class="control-label">Pais</label>
                                             <div class="controls">
                                                 <input type="text" name="pais" class="span6" required />
                                                 <span class="help-inline"></span>
                                             </div>

                                         </div>
                                          <label class="control-label">Contraseña</label>
                                             <div class="controls">
                                                 <input type="text" name="clave" class="span6" required /><br>
                                                  <input name="registrar" type="submit" value="Registar" />
                                                 <span class="help-inline"></span>
                                             </div>

                                        
                                     </div>
                                     <div class="tab-pane" id="pills-tab4">
                                         <h3>Cuarto Paso</h3>
                                         <div class="control-group">
                                             <label class="control-label">Nombre</label>
                                             <div class="controls">
                                                 <span class="text"> </span>
                                             </div>
                                         </div>
                                         <div class="control-group">
                                             <label class="control-label">Email:</label>
                                             <div class="controls">
                                                 <span class="text"></span>
                                             </div>
                                         </div>
                                         <div class="control-group">
                                             <label class="control-label">Numero:</label>
                                             <div class="controls">
                                                 <span class="text" ></span>
                                             </div>
                                         </div>
                                         <div class="control-group">
                                             <label class="control-label"></label>
                                             <div class="controls">
                                                 <label class="checkbox">
                                                     
                                                     
                                                 </label>
                                      <ul class="pager wizard">
                                       
                                       <input class="next" name="registrar" type="submit" value="Registar" />
                                     </ul>

                                             </div>
                                         </div>
                                     </div>
                                     <ul class="pager wizard">
                                         <li class="next last"><a href="javascript:;">Ultimo</a></li>
                                         <li class="next"><a  href="javascript:;">Siguente</a></li>
                                     </ul>
                                 </div>
                             </div>
                             </form>
                              <a href="index.php" >Inicio</a>
                         </div>
                     </div>
                 </div>
             </div>








	

	   <script src="js/jquery-1.8.3.min.js"></script>
   
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
  
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>



   <script src="js/common-scripts.js"></script>

   <script src="js/form-wizard.js"></script>


   <!-- END JAVASCRIPTS -->
   <script>
       $(function () {
           $(" input[type=radio], input[type=checkbox]").uniform();
       });



   </script>

</body>
</html>