<?php 
/**
 * 
 * @author Samuel Vara
 */
require_once 'Modelo/Usuario.php';//Incluimos el Usuario.php

if(isset($_SESSION['usuario'])){//Si la $_SESSION['usuario'] se a iniciado 
	header("Location: index.php?location=inicio");//Redirige al inicio

}else{//Sino
	$correcto=false;//Correcto false

	if(isset($_REQUEST['enviar']) && isset($_REQUEST['usuario']) && isset($_REQUEST['password'])){//Si se a pulsado enviar y hay un usuario y una contraseña

		$usuario=Usuario::validarUsuario($_REQUEST['usuario'], hash('sha256',$_REQUEST['password']));//Llama a validarUsuario y le pasa el usuario y la contraseña

		if(is_null($usuario)){//Si la consulta devuelve null
			print "Usuario no encontrado";//Imprime usuario no encontrado
		}else{
			$correcto=true;//Cambia el valor de correcto
		}
	}

	if($correcto){//Si correcto es true
		$_SESSION['usuario']=$usuario;//Le pasamos el resultado de la cionsulta a la variable $_SESSION

		header("Location: index.php?location=inicio");//Redirigimos a inicio 

	}else{
		include 'Vista/layout.php';//Incluimos la vista
	}


}

 ?>