<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/principal.css">
	<title>validacion2</title>
</head>
<body>
	<h2>Segundo punto de validacion</h2>
	<div class="V">
	
	<p>Realizar un formulario, con un campo de tipo texto, que reciba una frase o una palabra, cada palabra se asigne a un campo de un array, y a cada campo del array imprimir del lado del servidor, con PHP, la siguiente información: 
	<div>a. Si es texto o no.</div> 
	<div>b. Cuantos caracteres tiene.</div> 
	<div>c. Si tiene palabras en mayúsculas.</div> 
	<div>d. Que imprima cuantas letras en mayúscula tiene.</div> 
	<div>e. Que imprima cuantas letras en minúscula tiene.</div> 
	<div>f. Que imprima cuantos números tiene.</div> 
	<div>g. Que imprima los caracteres en mayúsculas y su posición en el array.</div> </p>
<form action="validacion2.php" method="POST">
	<label for="">Ingrese el texto</label>
	<input type="text" name="palabra" >
	<input type="submit">
</form>
	<?php 
	include 'funciones.php';
	$letrasM="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	$Letrasm="abcdefghijklmnñopqrstuvwxyz";

	if (isset($_POST['palabra'])) {
		$c=0;
		$c2=0;
		$p2="";
		$m="";
		$p="";
		$p = $_POST['palabra'];
		$palabra=explode(" ",$p);
		for ($i=0; $i <count($palabra) ; $i++) { 

			if (!empty($p)&&letras($palabra[$i])==2) {
			
			$m=acomL($letrasM,$palabra[$i]);	
			$c=comparacionM($letrasM,$palabra[$i]);
			$c2=comparacionMi($Letrasm,$palabra[$i]);
			$p=posicionL($letrasM,$palabra[$i]);
					echo "<strong>".$palabra[$i].":</strong> Es solo texto y tiene ".strlen($palabra[$i])." caracteres con ".$c." letras mayusculas y ".$c2." letras en minuscula. Las letras mayusculas son ".$m." en las posiciones ".$p."<br>";

		}elseif (!empty($p)&&is_string($palabra[$i])) {
			$c2=0;
			$c=0;
			$c3=0;
			$m2="";
			$p2="";
			$p2=posicionL($letrasM,$palabra[$i]);
			$m2=acomL($letrasMa,$palabra[$i]);
			$c=comparacionMi($Letrasm,$palabra[$i]);
			$c2=comparacionM($letrasM,$palabra[$i]);
			$c3=contadorN($palabra[$i]);
			echo "<strong>".$palabra[$i].":</strong> Contiene letras y, ".$c3." numeros y tiene ".strlen($palabra[$i])." caracteres con ".$c2." letras mayusculas y ".$c." letras en minuscula. Las letras mayusculas son ".$m2." en las posiciones ".$p2."<br>";
		}


		
	}
	}

	
	

	 ?>
	</div>
	<div class="volver"><a href="validaciones.php"><-- Volver</a></div>
</body>
</html>