<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		body{
			  width: 100%;
			    margin: 0;

			    background-color: #65E0A2 ;
		}
		#contenido{
			position:absolute;
		
			 top: 50%;
			    left: 50%;
			    transform: translateX(-50%) translateY(-50%);

		}
		#atras{
			position:absolute;
			top:1%;
			left:1%;
		}
	</style>
</head>
<body>
	
		<?php  
			/**
			 * 
			 * @author Samuel Vara
			 */
			$layout ="Vista/vInicio.php";

			if(isset($_GET['location']) && isset($vistas[$_GET['location']])){//Comprueba que hay localizacion y que hay locacion de vista
				$layout=$vistas[$_GET['location']];//si es asi se la pasa a un avariable
			}
			include $layout;//la devuelve
		?>
	
</body>
</html>