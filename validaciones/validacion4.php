<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/principal.css">
	<title>Validacion4</title>
</head>
<body>
	<h2>Cuarto punto de validacion</h2>
	<div class="V">
	
	<p>Realizar un formulario, con un campo de tipo date e imprimir del lado del servidor, con PHP, la siguiente información:
	<div>a. Indicar cuál fue el año ingresado.</div>
	<div>b. Indicar cuál fue el mes ingresado.</div>
	<div>c. Indicar cuál fue el día ingresado.</div>
	<div>d. Convertir en fecha con la función date_date_set().</div>
</p>
	
	<form action="validacion4.php" method="POST">
		<input type="date" name="fecha">
		<input type="submit" name="enviar" value="enviar">	
	

	</form>	

	<?php 
	if (isset($_POST['fecha'])) {
		$fecha=$_POST['fecha'];
		
		echo "<div>".$fecha."</div>";
		echo "El año ingresado es ".substr($fecha,0,4)." el mes es ".substr($fecha,-5,2)." y el dia es ".substr($fecha,-2,2);
		
	}

	 ?>
	</div>
	<div class="volver"><a href="validaciones.php"><-- Volver</a></div>
</body>
</html>