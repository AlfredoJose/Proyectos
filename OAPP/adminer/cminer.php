<?php 
include_once("../DBManager.php");


class usuarios{
	

function consultar($usuario){
		$objConexion = new DBManager();
		if ($objConexion->conectar()==true){
			if ($usuario=="") 
				$consulta = "SELECT * FROM  usuarios ";				
			else 
				$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
			$result = pg_query($objConexion->getCon(), $consulta);
			if($result) return $result;
			else return false;
		}
	}


		function consultar_pedidos_premiums($nombre){
				$objConexion = new DBManager();
					if ($objConexion->conectar()==true){
						if (!$nombre) 
				$consulta = "SELECT    nombre,usuario,fecha,estado,id FROM  pedidos_premium ORDER BY estado  ";				
					else 
				$consulta = "SELECT    nombre,usuario,fecha,estadomid FROM  pedidos_premium  WHERE id = ".$arr['id']."";
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
				$consulta="SELECT * FROM usuarios LIMIT ".$tamano_pagina." OFFSET ".$inicio;
			else 
				$consulta="SELECT * FROM usuarios LIMIT ".$tamano_pagina." OFFSET ".$inicio. "where usuario=" . '$usuario';
			$result = pg_query($objConexion->getCon(), $consulta);
			if($result) 
				return $result;
			else 
				return false;
		}
	}


	

}

 ?>