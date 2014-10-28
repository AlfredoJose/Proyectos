<?php

header("Content-type: image/png");

$y = 300;
$contador = 70;
$imagen = ImageCreateTrueColor(600,$y);

$blanco = ImageColorAllocate($imagen,225,225,225);
ImageFillToBorder($imagen,0,0,$blanco,$blanco);

imagecopy($imagen,imagecreatefrompng('fondo.png'),0,0,0,0,600,600);
imagefilter($imagen,IMG_FILTER_BRIGHTNESS,30);

$rojo = ImageColorAllocate($imagen,255,0,0);

$negro = ImageColorAllocate($imagen,0,0,0);
$texto = "Hola yo soy un texto";
$font = "arial.ttf";

////////////////////////////////////////////

$bd = new SQLite3('grafica.db');
$resultado = $bd->query("SELECT * FROM grafica;");
while($fila = $resultado->fetchArray()){
	ImageFilledRectangle($imagen,$contador,$y-55,$contador+10,($y-55-($fila['valores']*5)),$rojo);
	imagettftext($imagen,8,-45,$contador,250,$y-55,$font,$fila['meses']);
	$contador += 20;
}
$bd->close();
/////////////////////////////////////////////


ImagePNG($imagen);
ImageDestroy($imagen);

?>
