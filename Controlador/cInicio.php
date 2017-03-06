<?php 
/**
 * 
 * @author Samuel Vara
 */
require_once 'Modelo/Usuario.php';//Se incluye el usuario.php

if(isset($_REQUEST['salir'])){//Si se pulsa salir 

	unset($_SESSION['usuario']);//se vacia la sesion 
	session_destroy();//se destruye la sesion
	header('Location: index.php');//se redirige a el index

}else{
	include 'Vista/layout.php';//se incluye el layout
}


 ?>