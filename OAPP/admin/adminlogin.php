<?php session_start();?>
<?php

$usuarioenviado = $_POST['usuario'];
$passwordenviado = $_POST['password'];

if($usuarioenviado == "Alfredo" AND $passwordenviado == "alfredo"){
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=adminescritorio.php">';
$_SESSION['adminlogin'] = "si";
}else{
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">';
}

?>
