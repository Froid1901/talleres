<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<title>Perfil</title>
</head>
<body>
	<h1>Bienvenidos</h1>
	<div class="menu">
	<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="">Ejercicios</a>
				<div>
					<ul>
						<li><a href="arrays/arrays.php">Arrays</a></li>
						<li><a href="sesiones/sesiones.php">Sessiones</a></li>
						<li><a href="validaciones/validaciones.php">Validaciones</a></li>
					</ul>
				</div>
			</li>
			<li><a href="conclusiones.php">Conclusiones</a></li>
			
		</ul>
	</nav>
</header>
</div>


	<div class="datos">
		<div>
		<h2>Datos</h2>

	<strong>Nombre: </strong>	
	<p>Jhon Brando Encarnacion Bolaños</p>
	<strong>Ficha: </strong>
	<p>1354963</p>
	<strong>Edad: </strong>
	<p>21 años</p>
	
	</div>
	<img src="imagenes/foto_b.jpg" alt="Brando Bolaños"></img>
	<div>
	<h2> FECHA CREACION</h2>
	<p>Jueves 02 de Noviembre del 2017</p>
	<H2>FECHA ACTUAL</H2>
			<?php 
			$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
			$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
			echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
			 ?>
	</div>		 
	</div>

	<div class="perfil">
		<h2>Perfil Pesonal</h2>
		<strong>Conoce algo sobre mi</strong>
		<p>Soy un estudiante en analisis y desarrollo de sistemas informaticos, en mis tiempos libres suelo salir a rodar en mi motocicleta y conocer lugares rurales y nuevas culturas, amante a los videojuegos y a la musica en especial al rap.</p>
	</div>



	
	

</body>
</html>