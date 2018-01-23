<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>
<form action="ejercicio4.php" method="GET">

<div>
<p>
4. Hacer el algoritmo correspondiente a un programa, que:  
 Crea un arreglo  de 10 elementos de nombre 'numeros'.    Carga la tabla con valores positivos y negativos a través de un formulario.  
 Muestra en pantalla cada elemento del arreglo junto con su cuadrado y su cubo.
</p>

</div>

<div class="a2">
<div>
<strong>numero 1</strong>
<input type="number" name="p1">

<strong>numero 2</strong>
<input type="number" name="p2">

<strong>numero 3</strong>
<input type="number" name="p3">

<strong>numero 4</strong>
<input type="number" name="p4">

<strong>numero 5</strong>
<input type="number" name="p5">

	
<strong>numero 6</strong>
<input type="number" name="p6">

<strong>numero 7</strong>
<input type="number" name="p7">

<strong>numero 8</strong>
<input type="number" name="p8">

<strong>numero 9</strong>
<input type="number" name="p9">

<strong>numero 10</strong>
<input type="number" name="p10">
</div>

<input type="submit" value="Obtener Resultado" name="enviar">

</div>	

<div class= "respuesta">
</form>
<?php 

error_reporting(0);

$numeros = array();
for ($i=1; $i <=10 ; $i++) { 
	if (isset($_GET['p'.$i])) {
		$numeros[$i]= $_GET['p'.$i];

		
	}
echo "<div>EL numero ".$numeros[$i]." al cuadrado es: ".($numeros[$i]*$numeros[$i])."</div>";
		echo "<div>EL numero ".$numeros[$i]." al cubo es: ".($numeros[$i]*$numeros[$i]*$numeros[$i])."</div>";

}


 ?>
 <div class="volver"><a href="arrays.php"><-- Volver</a></div>
</body>
</html>