
<meta charset="UTF-8">
<?php 
include_once("DBmanager.php");

		$utc         = date('U');
		@$ip     	 = getenv(REMOTE_ADDR);

	class usuarios{


		function insertar($nombre,$apellido,$usuario,$email,$tel,$clave,$ip,$navegador,$utc,$estado){
			$objConexcion = new DBmanager();
			if ($objConexcion->conectar()==true){
				$consulta = " INSERT INTO usuarios(nombre,apellido,usuario,email,tel,clave,ip,navegador,utc,estado) VALUES('$nombre', '$apellido','$usuario','$email','$tel','$clave','$ip','$navegador','$utc','0')";

				$result = pg_query($objConexcion->getCon(), $consulta);

				if (!$result) 
					return false;
				else
					return true;
				}

			}

		function estado($usuario){
			$objConexion = new DBManager();
			if ($objConexion->conectar()==true){
			$consulta = "SELECT estado FROM usuarios WHERE usuario='$usuario'";				
			$result = pg_query($objConexion->getCon(), $consulta);
			$result = pg_fetch_row($result);
			return $result;		
		}
	}

			function insertar_pedido_plan($nombre_producto,$usuario,$fecha,$estado,$id_plan){
			$objConexcion = new DBmanager();
			if ($objConexcion->conectar()==true){
				$consulta = " INSERT INTO pedidos_premium(nombre,usuario,fecha,estado,id_plan) VALUES('$nombre_producto', '$usuario' ,'".date('U')."' ,'0','$id_plan')";

				$result = pg_query($objConexcion->getCon(), $consulta);

				if (!$result) 
					return false;
				else
					return true;
				}

			}

			function actualizar($nombre,$precio,$exsistencias,$descipcion,$id){
		$objConexion = new DBManager();
		if ($objConexion->conectar()==true){
			$consulta = "UPDATE  anuncios  SET nombre='$nombre', precio='$precio', exsistencias='$exsistencias', descipcion='$descipcion'";		
			$result = pg_query($objConexion->getCon(), $consulta);
			if (!$result)
				return false;
			else
				return true;
		}
	}

		function eliminar($id){
		$objConexion = new DBManager();
		if ($objConexion->conectar()==true){
			$consulta = "DELETE FROM anuncios where id='$id'";				
			$result = pg_query($objConexion->getCon(), $consulta);
			if (!$result)
				return false;
			else
				return true;
		}
	}


		
			function insertar_p($nombre,$precio,$exsistencias,$descipcion,$nombre_cliente,$email_cliente,$telefono_cliente,$direcion_cliente,$ip,$ciudad,$yo_soy,$estado_articulo,$usuario){
			$objConexcion = new DBmanager();
			if ($objConexcion->conectar()==true){
				$consulta = " INSERT INTO anuncios(nombre,precio,exsistencias,descipcion,nombre_cliente,email_cliente,telefono_cliente,direcion_cliente,ip,ciudad,yo_soy,estado_articulo,usuario) VALUES('$nombre','$precio','$exsistencias','$descipcion','$nombre_cliente','$email_cliente','$telefono_cliente','$direcion_cliente','$ip','$ciudad','$yo_soy', '$estado_articulo', '$usuario' )";

				$result = pg_query($objConexcion->getCon(), $consulta);

				if (!$result) 
					return false;
				else
					return true;

				}
			}

			function consultar($nombre){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						if (!$nombre) 
				$consulta = "SELECT    nombre,precio,exsistencias,descipcion,nombre_cliente FROM  anuncios  ";				
					else 
				$consulta = "SELECT    nombre,precio,exsistencias,descipcion,nombre_cliente FROM anuncios  WHERE id = ".$arr['id']."";
					$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}



	function consultar_mis_anuncios(){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						 
				$consulta = "SELECT usuario FROM anuncios  WHERE usuario='".$_SESSION["usuario"]."'";			
				$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}

		function planes_premium(){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						 
				$consulta = "SELECT * FROM planes_premium WHERE id='1'";			
				$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}
	function planes_premium2(){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						 
				$consulta = "SELECT * FROM planes_premium WHERE id='2'";			
				$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}
		function planes_premium3(){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						 
				$consulta = "SELECT * FROM planes_premium WHERE id='3'";			
				$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}

	

	function consultar_id($nombre){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						if (!$nombre)  
				$consulta = "SELECT  nombre,precio,descipcion,exsistencias,nombre_cliente,email_cliente,telefono_cliente,direcion_cliente,id,estado_articulo,usuario FROM anuncios WHERE  id = ".$_GET['id']." LIMIT 1 ";				
					else 
				$consulta = "SELECT nombre,precio,descipcion,exsistencias,nombre_cliente,email_cliente,telefono_cliente,direcion_cliente,id,estado_articulo,usuario FROM anuncios WHERE id =".$_GET['id']." LIMIT 1";
					$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}
			
			function insertar_planes_premium($nombre,$foto,$descripcion,$precio){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						if (!$nombre) 
				$consulta = "SELECT nombre,foto,descripcion,precio from planes_premium ";				
					else 
				$consulta = "SELECT nombre,foto,descripcion,precio FROM planes_premium WHERE nombre='$nombre'";
					$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}

	function consulta_limitada($nombre,$tamano_pagina,$inicio){
		$objConexion = new DBManager();
		if ($objConexion->conectar()==true){
			if (!$nombre) 
				$consulta="SELECT * FROM anuncios LIMIT ".$tamano_pagina." OFFSET ".$inicio;
			else 
				$consulta="SELECT * FROM anuncios LIMIT ".$tamano_pagina." OFFSET ".$inicio. "where nombre=" . '$nombre';
			$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}
	

}


/*class anuncios{
		function consultar_a($nombre){
			$objConexion = new DBManager();
				if ($objConexion->conectar()==true){
				if ($nombre=="")
					
				
				 	 
			$consulta = "SELECT nombre,descripcion,precio from anuncios";				
			else 
				$consulta = "SELECT nombre,descripcion,precio from anuncios WHERE nombre='nombre'";
			$result = pg_query($objConexion->getCon(), $consulta);
			if($result) return $result;
			else return false;
		}
	}
}*/
?>