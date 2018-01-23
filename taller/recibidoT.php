<!DOCTYPE HTML>
<?php 
session_start();
 ?>
<html>
	<head>
		<title>Verificacion De Mensaje</title>
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
					<a href="destruirs.php" class="button special">Salir De Verificacion De Mensaje</a>
				</nav>
			</header>
					
<!-- resultado -->
<div class="mama">



<!-- Apellidos -->
<div>
	<label for="">Apellidos:</label>
<?php 
if (!empty($_POST['apellidos'])) {
	$_SESSION['apellidos']=$_POST['apellidos'];
	$tamaño=strlen($_SESSION['apellidos']);
	for ($i=0; $i <$tamaño ; $i++) { 
		$letra=substr($_SESSION['apellidos'],$i,1);
		if (is_numeric($letra)) {
			$_SESSION['error1']="ingrese sus apellidos";
			header("location:right-sidebar.php");
			break;
		}
	}
	echo $_SESSION['apellidos'];
}else{
	$_SESSION['error1']="ingrese sus apellidos";
	header("location:right-sidebar.php");
}
?>

</div>


<!--Nombres -->
<div>
	<label for="">Nombres:</label>
<?php 

if (!empty($_POST['nombres'])) {
	$_SESSION['nombres']=$_POST['nombres'];
	$tamaño=strlen($_SESSION['nombres']);
	for ($i=0; $i <$tamaño ; $i++) { 
		$letra=substr($_SESSION['nombres'],$i,1);	
		if (is_numeric($letra)) {
			$_SESSION['error2']="ingrese sus nombres";
			header("location:right-sidebar.php");
			break;
		}
	}
	echo $_SESSION['nombres'];
}else{
	$_SESSION['error2']="ingrese sus nombres";
	header("location:right-sidebar.php");
}
?>
</div>



<!-- correo -->
<div>
		<label for="">Correo Electronico:</label>
	<?php 

function is_valid_email($str){

return (false !== filter_var($str,FILTER_VALIDATE_EMAIL));
}
if (!empty($_POST['email']) && is_valid_email($_POST['email'])) {
	$_SESSION['email']=$_POST['email'];
	echo $_SESSION['email'];
}else{
	$_SESSION['error3']="ingrese su email";
	header("location:right-sidebar.php");
}
?>
</div>


<!-- telefono -->
<div>
	<label for="">Telefono fijo o Celular</label>
	<?php
if (strlen($_POST['telefono'])==7 || strlen($_POST['telefono'])==10){
	$_SESSION['telefono']=$_POST['telefono'];
	echo $_SESSION['telefono'];
}else{
	$_SESSION['error4']="ingrese un numero telefonico";
	header("location:right-sidebar.php");
}
#--------------------
	 ?>
</div>


<!-- mensaje -->
<div>
	<label for="">Mensaje</label>
<?php 
if (!empty($_POST['asunto'])) {
	$_SESSION['asunto']=$_POST['asunto'];
	echo $_SESSION['asunto'];
}else{
	$_SESSION['error5']="ingrese su mensaje";
	header("location:right-sidebar.php");
}
#--------------------
	 ?>
</div>




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