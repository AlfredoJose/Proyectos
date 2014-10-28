<?php 

	class DBmanager{
		private $conexion;

		function getCon(){
			return $this->conexion;
		}

		 function conectar(){
			$con = mysqli_connect("host=localhost  dbname=topshop user=postgres password=1234");
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