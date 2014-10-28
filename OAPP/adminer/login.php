<?php 



    require_once("sesion.php");

    $sesion = new sesion();
    $usuario = $sesion->get("usuario");
    $nombre = $sesion->get("nombre");
    
    if( $usuario == true ){ 
        header("Location: adminer.php");        
    }
    
    require_once("cusuarios.php");
    $objUsuario=new usuarios();
    


 


	include_once "sesion.php";
    include_once "DBManager.php";
    //Intanciando la clase session
    $sesion = new sesion();
    
    if(isset($_POST["entrar"])){
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        
        if(validarUsuario($usuario,$clave) == true){            
            $sesion->set("usuario",$usuario);
            header("location: adminer.php");
        }
        else{
            echo "<div class='error'><h2>¡Tu No Eres Un Administrador Sereas Baneado!</h2></div>";
        }
    }
    
    function validarUsuario($usuario, $clave){
        $objConexion = new DBManager();
        if ($objConexion->conectar()==true){
            $sql = "SELECT usuario,clave from a_d_m_i_n_s where usuario = '$usuario'" .
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
		header("Location: adminer.php");		
}
	



?>
<!DOCTYPE html>
<html lang="es" >
<head>
    <title>TopShop</title>
    <meta charset="UTF-8">
</head>
<body>


     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <label>Usuario Administrador</label>
        <input name="usuario" type="text" >
     <label>Contraseña</label>
        <input name="clave" type="password" >
        <input type="submit" name="entrar" value="Entrar">

     </form>
</body>
</html>
