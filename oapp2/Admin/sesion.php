<?php
class sesion {
  function __construct() {
    //crea una sesión o reanuda la actual basada en un identificador de sesión 
    //pasado mediante una petición GET o POST, o pasado mediante una cookie
    @ session_start ();
  }
  public function set($usuario, $valor) {
    /*
    Es un array asociativo que contiene variables de sesión disponibles para 
    el script actual.
    */
    $_SESSION [$usuario] = $valor;
  }
  //consulta el usuario que acaba de iniciar sesion
  public function get($usuario) {
    //isset — Determina si una variable está definida y no es NULL
    //el nombre de la sesion es el nombre del usuario
    if (isset ( $_SESSION [$usuario] )) {
      return $_SESSION [$usuario];
    } else {
         return false;
    }
  }
  public function elimina_variable($usuario) {
      unset ( $_SESSION [$usuario] );
  }
  public function termina_sesion() {
      $_SESSION = array();
	  //session_destroy — Destruye toda la información registrada de una sesión
      session_destroy ();
  }
}
?>





