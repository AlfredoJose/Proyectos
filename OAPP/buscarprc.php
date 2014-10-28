<?php
include_once("DBmanager.php");
$objConexcion = new DBmanager();
			if ($objConexcion->conectar()==true){
$req = "SELECT nombre "." FROM anuncios "." WHERE nombre LIKE '%".$_REQUEST['term']."%' LIMIT 4"; 

$query = pg_query($req);

while($row = pg_fetch_array($query))
{
	$results[] = array('label' =>$row['nombre']);
}

echo json_encode($results);

}
?>