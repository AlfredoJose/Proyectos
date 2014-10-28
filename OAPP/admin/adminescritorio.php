<?php session_start();?>
<?php

if(isset($_SESSION['adminlogin'])){
echo '
<h1>Panel de control</h1>
<dfn>Analisis de la pagina</dfn>
<table border=1 width=100%>
<tr valign="bottom">
';

for($i=30;$i>=0;$i--){
	$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");
	$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE utc < ".(date('U')-($i*86400))." AND utc > ".(date('U')-(($i+1)*86400)).") AS foo;";
	$result = pg_query($conexion, $consulta);
	while($fila = pg_fetch_array($result, NULL )){

		$numerodehoy = $fila["COUNT('ip')"];
	}
	echo '
		<td width=*> 
			<div style="width:100%;height:'.$numerodehoy.'px;background:red;float:right;position:relative;valign:bottom;display:inline;">
			</div>'.$numerodehoy.'
		</td>
	';
}


echo '
</tr>
</table>

';


///////////////////////////PARCIALES/////////////////////////

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%Windows%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logswindows = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%Mac%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logsosx = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%Linux%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logslinux = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%Chrome%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logschrome = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%Firefox%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logsfirefox = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%Opera%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logsopera = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$conexion = pg_connect("host=localhost port=5432 dbname=topshop user=postgres password=1234");;
$consulta = "SELECT COUNT('ip') FROM (SELECT DISTINCT(ip) FROM logs WHERE navegador LIKE '%MSIE%') AS foo";
$resultado = pg_query($conexion,$consulta);
while($fila = pg_fetch_array($resultado)){
	$logsie = $fila['COUNT(\'ip\')'];
}
pg_close($conexion);

$logstotales = $logschrome + $logsfirefox + $logsopera + $logsie;

echo '
<meta charset="UTF-8">
<table width=100% border="1">
<tr>
<td>Impactos totales:
</td>
<td>'.$logstotales.'
</td>
</tr>
<tr>
<td>Sistemas operativos
</td>
</tr>
<tr>
	<td>Windows:
	</td>
	<td>'.$logswindows.'
	</td>
	<td>'.(($logswindows/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logswindows.'px;height:20px;background:red;"></div>
	</td>
</tr>
<tr>
	<td>OSX:
	</td>
	<td>'.$logsosx.'
	</td>
	<td>'.(($logsosx/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logsosx.'px;height:20px;background:red;"></div>
	</td>
</tr>
<tr>
	<td>Linux:
	</td>
	<td>'.$logslinux.'
	</td>
	<td>'.(($logslinux/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logslinux.'px;height:20px;background:red;"></div>
	</td>
</tr>


<tr>
<td>Navegadores
</td>
</tr>
<tr>
	<td>Chrome:
	</td>
	<td>'.$logschrome.'
	</td>
	<td>'.(($logschrome/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logschrome.'px;height:20px;background:red;"></div>
	</td>
</tr>
<tr>
	<td>Firefox:
	</td>
	<td>'.$logsfirefox.'
	</td>
	<td>'.(($logsfirefox/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logsfirefox.'px;height:20px;background:red;"></div>
	</td>
</tr>
<tr>
	<td>Opera:
	</td>
	<td>'.$logsopera.'
	</td>
	<td>'.(($logsopera/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logsopera.'px;height:20px;background:red;"></div>
	</td>
</tr>

<tr>
	<td>Internet Explorer:
	</td>
	<td>'.$logsie.'
	</td>
	<td>'.(($logsie/($logstotales-1))*100).'%
	</td>
	<td><div style="width:'.$logsie.'px;height:20px;background:red;"></div>
	</td>
</tr>
</table>

';
///////////////////////////PARCIALES/////////////////////////


}else{
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">';
}

?>
