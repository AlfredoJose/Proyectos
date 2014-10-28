 <?php 
	include_once "sesion.php";
    include_once "DBManager.php";
    //Intanciando la clase session
    $sesion = new sesion();
    
    if(isset($_POST["entrar"])){
        $usuario = $_POST["usuario"];
        $clave = md5($_POST["clave"]);
        
        if(validarUsuario($usuario,$clave) == true){            
            $sesion->set("usuario",$usuario);
            header("location: top.php");
        }
        else{
            echo "<div class='error'><h2>¡No te has Registrado!</h2></div>";
        }
    }
    
    function validarUsuario($usuario, $clave){
        $objConexion = new DBManager();
        if ($objConexion->conectar()==true){
            $sql = "SELECT usuario,clave from usuarios where usuario = '$usuario'" .
            " and clave = '$clave'";
                
            $result = pg_query($objConexion->getCon(), $sql);
            $rows = pg_num_rows($result);
            if($rows > 0) return true;//usuario y clave existen
            else return false;
        }
    }
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	$nombre = $sesion->get("nombre");
	
	if( $usuario == true ){	
		header("Location: top.php");		
	}
	
	require_once("cusuarios.php");
	$objUsuario=new usuarios();



?>

<!DOCTYPE html>
<html lang="es" >
<head>
	<title>TopShop</title>
	<meta charset="UTF-8">

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="css/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css-s/style.css" rel="stylesheet" />
   <link href="css-s/style-responsive.css" rel="stylesheet" />

</head>
<body>
	













    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.php">
            <img class="center" alt="logo" src="img/m.png" width="160px" height="160px;">
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
        <div class="metro double-size green">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-append lock-input">
                    <input type="text" name="usuario" class="" placeholder="Nombre de Usuario">
                </div>
            
        </div>
        <div class="metro double-size yellow">
           
                <div class="input-append lock-input">
                    <input type="password" name="clave" class="" placeholder="Clave">
                </div>
            
        </div>
        <div class="metro single-size terques login">
           
                <button type="submit" name="entrar"  class="btn login-btn">
                    Entrar
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </form>
        </div>
        <!--
        <div class="metro double-size navy-blue ">
            <a href="index.html" class="social-link">
                <i class="icon-facebook-sign"></i>
                <span>Entrar con Facebook</span>
            </a>
        </div>-->
       
       <!-- <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Recordadar Sesion
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Olvide Clave</a>
            </div>
        </div>-->
    </div>
  <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="js/jquery.validate.min.js"></script>
   <script type="text/javascript" src="js/additional-methods.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>
   <!--script for this page-->
   <script src="js/form-validation-script.js"></script>

</body>
</html>