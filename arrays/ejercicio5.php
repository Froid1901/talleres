<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>

<form action="ejercicio5.php" method="GET">
<div>
<p>
5. Diseñar el algoritmo correspondiente a un programa, que:  
 Ingrese 10 números a través de un formulario y los guarde en un arreglo llamado “origen”.  
 Lo recorra metiendo en un segundo arreglo de nombre 'destino' todos aquellos elementos pares, mayores a 25.  
 Muestre en pantalla el contenido de los dos vectores. 

</p>
</div>

<div class="a1">
</div>

	
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
</div>

<div>
	
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
</div>

<div class="respuesta">
</form>	
<?php  
error_reporting(0);
$destino = array();
$origen = array();
for ($i=1; $i <=10 ; $i++) { 
	if (isset($_GET['p'.$i])) {
		$origen[$i] = $_GET['p'.$i];
		for ($j=1; $j <=10 ; $j++) { 
	if ($origen[$j]>25&&$origen[$j]%2==0) {
		$destino[$j]=$origen[$j];
	}
}
	}
}
echo "formulario: ";
foreach ($origen as $key => $value) {
	echo "<div>numero ".$key." ".$value."</div>";
}
echo "Elementos pares, mayores a 25";
foreach ($destino as $key => $value) {
	echo "<div>numero ".$key." ".$value."</div>";
}




?>

<div class="volver"><a href="arrays.php"><-- Volver</a></div>

</body>
</html>