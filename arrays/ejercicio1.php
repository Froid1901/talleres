
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>

<form action="ejercicio1.php" method="GET">

<div>
<p>
	1. Llenar dos arreglos A y B de 5 elementos cada uno, sumar el elemento uno del arreglo A con el elemento uno del arreglo B y así sucesivamente hasta 5, almacenar el resultado en un arreglo C, e imprimir el arreglo resultante.
</p>
</div>

<div class="a1">
<div>
<strong>PRIMER ARRAY(A)</strong>
	
<strong>primer numero</strong>
<input type="number" name="p1">

<strong>segundo numero</strong>
<input type="number" name="p2">

<strong>tercer numero</strong>
<input type="number" name="p3">

<strong>cuarto numero</strong>
<input type="number" name="p4">

<strong>quinto numero</strong>
<input type="number" name="p5">
</div>

<div>
<strong>SEGUNDO ARRAY(B)</strong>
	
<strong>primer numero</strong>
<input type="number" name="p_1">

<strong>segundo numero</strong>
<input type="number" name="p_2">

<strong>tercer numero</strong>
<input type="number" name="p_3">

<strong>cuarto numero</strong>
<input type="number" name="p_4">

<strong>quinto numero</strong>
<input type="number" name="p_5">
</div>

<input type="submit" value="Obtener Resultado">

</div>	

<div class="respuesta">
	
<?php

error_reporting(0);

$a = array (5);

$a[0] = $_GET['p1'];
$a[1] = $_GET['p2'];
$a[2] = $_GET['p3'];
$a[3] = $_GET['p4'];
$a[4] = $_GET['p5'];


$b = array (5);

$b[0] = $_GET['p_1'];
$b[1] = $_GET['p_2'];
$b[2] = $_GET['p_3'];
$b[3] = $_GET['p_4'];
$b[4] = $_GET['p_5'];

function sumar($a,$b){
	return $a + $b;

}
$c= array_map('sumar',$a,$b);

 if (isset($_GET['p1'])) {

 	echo "Tu respuesta es: ";
	echo implode(',',$c);

}else{

echo "LLene los espacios para obtener su respuesta";

}	
?>	
</div>

</form>
<div class="volver"><a href="arrays.php"><-- Volver</a></div>
</body>
</html>



