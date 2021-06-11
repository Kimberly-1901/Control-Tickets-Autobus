<!DOCTYPE html>
<html lang="en">

<head>
	<title>Horarios y Precios</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" href="../images/avatar.png" sizes="50x50" type="image/jpg" />
	<link rel="shortcut icon" href="../images/favicon.ico" />
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery-migrate-1.2.1.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/superfish.js"></script>
	<script src="../js/jquery.ui.totop.js"></script>
	<script src="../js/jquery.equalheights.js"></script>
	<script src="../js/jquery.mobilemenu.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script>
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
</head>

<body class="" id="top">
	<div class="main">
		<!--==============================header=================================-->
		<header>
			<div class="menu_block">
				<div class="container_12">
					<div class="grid_12">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="../index.php">Inicio</a></li>
								<li class="current"><a href="#">Horarios y Precios</a></li>
								<li><a href="contacto.php">Contactos</a></li>
								<li><a href="sesion.php" style="margin-left: 100px;">Iniciar Sesión</a></li>
								<li><a href="Registro/registro.php">Registrarse</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="#">
							<img src="../images/LogoBus.png">
						</a>
					</h1>
				</div>
			</div>
			<div class="clear"></div>
		</header>
		<!--==============================Content=================================-->
		<div class="content">

		<?php
			require_once "../config/conexion.php";
			require_once "../modelo/tablaHorario.php";
			$tabla = new Tabla();
			$tabla->llenarTabla();
		?>
		
		</div>
	</div>
	<!--==============================footer=================================-->
	<footer>
		<div class="container_12">
			<div class="grid_12">
				<div class="f_phone"><span>Contacto:</span> 2440 2139</div>
				<div class="socials">
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-google-plus"></a>
				</div>
				<div class="copy">
					<div class="st1">
						<div class="brand">
							<span class="color1">U</span>NA<span class="color1">B</span>US
						</div>
						&copy; 2021 | <a href="#">Privacy Policy</a>
					</div>
					Website designed by
					<a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</footer>
</body>

</html>