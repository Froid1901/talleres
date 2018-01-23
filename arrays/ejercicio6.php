<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>

<form action="ejercicio6.php" method="GET">
<div>
<p>
6. Diseñar el algoritmo correspondiente a un programa, que:  
 Crea una tabla bidimensional de longitud 5x5 y nombre 'diagonal'.  
 Carga la tabla de forma que los componentes pertenecientes a la diagonal de la matriz tomen el valor 1 y el resto el valor 0.  
 Muestra el contenido de la tabla en pantalla.

</p>
</div>

<div class="a1">

<h3>Diagonal</h3>

</div>

<div class="respuestas">

<?php 

$diagonal = array(
array(1,0,0,0,0),
array(0,1,0,0,0),
array(0,0,1,0,0),
array(0,0,0,1,0),
array(0,0,0,0,1)
);
for ($i=0; $i <5 ; $i++) { 
	echo "<div>";
	for ($j=0; $j <5 ; $j++) { 
		echo $diagonal[$i][$j];
	}
	echo "</div>";
}


?>

</div>
<div class="volver"><a href="arrays.php"><-- Volver</a></div>
</body>
</html>