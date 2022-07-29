<?php
session_start();

if( isset($_SESSION["usuario"]))

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$SESSION["estatus"];

}else{

echo "No hay datos";

}

?>