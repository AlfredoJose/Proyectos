<?
    $titulo= $_POST["titulo"];  
    $nombre= $_POST["nombre"]; 
    $apellido= $_POST["apellido"]; 
    $correoelectronico= $_POST["correo"]; 
    $mensaje= $_POST["mensaje"]; 

    $Contenido=$Nombre." Con el apellido: ".$apellido." ha enviado el siguiente Mail:\n\n"; 
    $Contenido.=$Mensaje; 

mail("oapp@oapp.com.ve",$titulo, $nombre, $apellido,$correoelectronico,$mensaje); 

?>