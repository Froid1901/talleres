<!DOCTYPE html>
<html>
<head>
	<title> Ejercicio 3</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>
<form action="ejercicio3.php" method="GET">

<div>
<p>
3. Se tiene el arreglo A con 8 elementos almacenados. Diseñe un algoritmo que escriba “SI” si el arreglo esta ordenado ascendentemente (de menor a mayor) o “NO” si el arreglo no está ordenado 
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
</div>

<input type="submit" value="Obtener Resultado" name="enviar">

</div>	

<div class= "respuesta">
<?php 


$ascendente = 0;
$A = array();
for ($i=1; $i <=8 ; $i++) { 
	if (isset($_GET['p'.$i])) {
		$A[$i]=$_GET['p'.$i];

		if ($A[$i]>$ascendente) {
			$ascendente=$A[$i];
			$bandera=1;
		}else{
			echo "el numero esta en desorden";
			$bandera=0;
			break;
		}
	}

}
if (isset($_GET['enviar'])) {
	if ($bandera==1) {
		echo "SI el arreglo esta ordenado de menor a meyor";
	}
	
}


?>
</div>
<div class="volver"><a href="arrays.php"><-- Volver</a></div>
</body>
</html>