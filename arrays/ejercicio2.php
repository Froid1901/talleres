<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>

<form action="ejercicio2.php" method="GET">
<div>
<p>
2. Almacenar 15 números en un arreglo, imprimir cuantos son ceros, cuántos son negativos, cuantos positivos. Imprimir además la suma de los negativos y la suma de los positivos.
	
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

<div>

	
<strong>numero 11</strong>
<input type="number" name="p11">

<strong>numero 12</strong>
<input type="number" name=p12>

<strong>numero 13</strong>
<input type="number" name="p13">

<strong>numero 14</strong>
<input type="number" name="p14">

<strong>numero 15</strong>
<input type="number" name="p15">
</div>

<input type="submit" value="Obtener Resultado">

</div>	

<div class= "respuesta">
<?php 
$pocitivos = 0;
$negativos = 0;
$cero = 0; 
$sumaN = 0;
$sumaP = 0;
 $numero = array();
 for ($i=1; $i <=15 ; $i++) { 
 		if (isset($_GET['p'.$i])) {
 			$numero[$i]= $_GET['p'.$i];

 			if ($numero[$i]==0) {
 			$cero +=1;
 		}
 		if ($numero[$i] >0) {
 			$pocitivos ++;
 			$sumaP +=$numero[$i];
 		}
 		if ($numero[$i] <0) {
 			$negativos ++;
 			$sumaN += $numero[$i];
 		}

 			if ($numero[$i]==0) {
 			$cero +=1;
 		}
 		if ($numero[$i] >0) {
 			$pocitivos ++;
 			$sumaP +=$numero[$i];
 		}
 		if ($numero[$i] <0) {
 			$negativos ++;
 			$sumaN += $numero[$i];
 		}
 		}
 		
 	}	
echo ($cero/2)." ceros ".($pocitivos/2)." positivos ".($negativos/2)." negativos La suma de los positivos es ".($sumaP/2). "La suma de los negativos es ".($sumaN/2);


?>
</div>
</form>
<div class="volver"><a href="arrays.php"><-- Volver</a></div>
</body>	
</html>