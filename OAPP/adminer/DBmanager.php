<?php 

	class DBmanager{
		private $conexion;

		function getCon(){
			return $this->conexion;
		}

		 function conectar(){
			$con = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");
			if (!$con) {
				echo "Error al conectar la base de datos";
				exit();
			}

			else {
				$this->conexion=$con;
				return true;
				
			}
		}
	}
	
 ?>