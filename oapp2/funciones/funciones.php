<?php 

	include_once("conn/conexcion.php");
	
	class paginacion{
		
		function consulta_limitada($nombre,$tamano_pagina,$inicio){
		
				$consulta="SELECT * FROM paginas LIMIT ".$tamano_pagina." OFFSET ".$inicio;
			
				$consulta="SELECT * FROM paginas LIMIT ".$tamano_pagina." OFFSET ".$inicio. "where nombre=" . '$nombre';
			

			
	}

		

	}

 ?>