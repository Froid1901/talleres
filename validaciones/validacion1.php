<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/principal.css">
	<title>Document</title>
</head>
<body>	
<h2>Primer punto de Validacion</h2>
	<div class="V">

	<p>Realizar un formulario, que reciba un dato e imprimir del lado del servidor, con PHP, la siguiente información:
	<div>a. Si es número. </div>
	<div>b. Si es texto.</div>
	<div>c. Si tiene espacios. </div>
	<div>d. Cuantos caracteres tiene el campo ingresado.</div>
	</p>
	<form action="validacion1.php">
		<input type="text" name="tex">
		<input type="submit" value="enviar" name="submit">
	</form>
	<?php 	
include 'funciones.php'; 
	$a="";
	$c=0;

	if (isset($_GET['tex'])) {
		$a=$_GET['tex'];
		$palabra=explode(" ", $a);
		$c=count($palabra)-1;
		if (is_numeric($a)) {
			echo "Los datos ingresados son numeros";
		}elseif (!empty($a)&& letras($a)==2) {
			echo "Los datos ingresado son solo texto";
		}elseif (!empty($a)&& is_string($a)) {
			echo "Los datos ingresados tienen numeros y letras";
		}	

	}

		
	if (isset($_GET['submit'])) {
			echo "<br>la palabra ingresada tiene ".(strlen($a)-$c)." caracteres con ".$c." espacios";
echo "<pre>";
print_r($palabra);
echo "</pre>";
		}	
		

	
	
	
	 ?>
	<div class="volver"><a href="validaciones.php"><-- Volver</a></div>
</div>	
</body>
</html>