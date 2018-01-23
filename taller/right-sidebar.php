<!DOCTYPE HTML>
<?php 
session_start();
error_reporting(0);
 ?>
<html>
	<head>
		<title>Contactame</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
				<header id="header" class="skel-layers-fixed">
				<h1>Froid studies</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">inicio
						<li><a href="left-sidebar.html">Perfil</a></li>
						<li><a href="no-sidebar.html">Hobbies</a></li>
						</a></li>
					</ul>
				</nav>
			</header>


		<!-- Main -->
	
		

		<div class="formulario">
			<h2>Enviame Un Mensaje</h2>
		<form action="recibidoT.php" method="POST">
		
		<div>	
		<label for="">Apellidos:</label><input type="text" name="apellidos" placeholder="<?php echo $_SESSION['error1']; ?>" required>
		</div>

		<div>
		<label for="">Nombres:</label><input type="text" name="nombres" placeholder="<?php echo $_SESSION['error2']; ?>"  required>	
		</div>
		
		<div>
		<label for="">Correo Electronico:</label><input type="email" name="email" placeholder="<?php echo $_SESSION['error3']; ?>"  required>	
		</div>
		
		<div>
		<label for="">Telefono fijo o Celular</label><input type="Number" name="telefono" placeholder="<?php echo $_SESSION['error4']; ?>"  required>
		</div>


		<div>
		<label for="">Mensaje</label><textarea name="asunto" cols="30" rows="10" placeholder="<?php echo $_SESSION['error5']; ?>"  required></textarea>
		</div>
		
		<div class="boton">
		<input type="submit" value="Enviar">
		</div>

		</form>

	
			
		</div>
						
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
						<ul class="icons">
								<li><a href="https://www.facebook.com/froid200" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/froid_et_solitaire" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							</ul>
						</div>
					</div>
				<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
					</ul>
				</div>
			</footer>

	</body>
</html>