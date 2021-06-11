<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" href="../../images/favicon.ico">
	<link rel="shortcut icon" href="../../images/favicon.ico" />
	<link rel="icon" href="../../images/avatar.png" sizes="50x50" type="image/jpg" />
	<link rel="stylesheet" href="../../booking/css/booking.css">
	<link rel="stylesheet" href="../../css/camera.css">
	<link rel="stylesheet" href="../../css/owl.carousel.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/form.css">
	<script src="../../js/jquery.js"></script>
	<script src="../../js/jquery-migrate-1.2.1.js"></script>
	<script src="../../js/script.js"></script>
	<script src="../../js/superfish.js"></script>
	<script src="../../js/jquery.ui.totop.js"></script>
	<script src="../../js/jquery.equalheights.js"></script>
	<script src="../../js/jquery.mobilemenu.js"></script>
	<script src="../../js/jquery.easing.1.3.js"></script>
	<script src="../../js/owl.carousel.js"></script>
	<script src="../../js/camera.js"></script>
	<script src="../../js/jquery.mobile.customized.min.js"></script>
	<script>
		$(document).ready(function() {
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false,
				minHeight: '444',
				thumbnails: false,
				height: '28.28125%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
</head>

<body class="" id="top">
	<div class="main">
		<header>
			<div class="menu_block">
				<div class="container_12">
					<div class="grid_12">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="../../index.php">Inicio</a></li>
								<li><a href="../horarios.php">Horarios y Precios</a></li>
								<li><a href="../contacto.php">Contactos</a></li>
								<li><a href="../sesion.php" style="margin-left: 100px;">Iniciar Sesión</a></li>
								<li class="current"><a href="#">Registrarse</a></li>
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
							<img src="../../images/LogoBus.png">
						</a>
					</h1>
				</div>
			</div>
			<div class="clear"></div>
		</header>
		<!--==============================header=================================-->
		<div class="content">
			<div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
			<div class="container_12">
				<div class="grid_9">
					<div>
						<h3>Digita tus datos para registrarse</h3>

						<form id="formulario" name="formulario" method="POST" action="../../controller/Usuario.php?opc=insert">
							<label for="nombre" class="name">Nombre: </label>
							<input type="text" id="nombre" name="nombre" placeholder="Nombre.." onblur="validarNombre()" required>

							<label for="apellidos">Apellidos: </label>
							<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos.." required onblur="validarApellido()">

							<label for="pasaporte">Pasaporte: </label>
							<input type="text" id="pasaporte" name="pasaporte" placeholder="Pasaporte.." required onblur="validarPasaporte()">

							<label for="nacionalidad">Nacionalidad: </label>
							<input type="text" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad.." required onblur="validarNacio()">

							<label for="correo">Correo: </label>
							<input type="email" id="correo" name="correo" placeholder="Correo.." required onblur="validarEmail()">

							<label for="password">Contraseña: </label>
							<input type="password" id="password" name="password" placeholder="Contraseña.." required onblur="validarPassword()">

							<label for="tel">Teléfono: </label>
							<input type="tel" id="tel" name="tel" placeholder="Teléfono.." required onblur="validarTelefono()">

							<label for="tarjeta">Número de Tarjeta: </label>
							<input type="number" id="tarjeta" name="tarjeta" placeholder="Tarjeta.." required onblur="validarTarjeta()">

							<label for="ccv">CCV: </label>
							<input type="number" id="ccv" name="ccv" placeholder="CCV.." required onblur="validarCCV()">

							<label for="vencimiento">Fecha de vencimiento: </label>
							<input type="month" id="vencimiento" name="vencimiento" placeholder="Fecha de vencimiento.." required onblur="validarFecha()">

							<input type="button" value="Regisitrarse" id="btnRegistrar" style="display: block;margin-left: 250px; " onclick="validarCompleto()">

						</form>
					</div>
				</div>
				<div class="clear"></div>
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
		</div>

		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
		<script src="registrojs.js"></script>


		<?php
		if (isset($_GET['sweet'])) {
			switch ($_GET['sweet']) {
				case '1':
		?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Usuario ya registrado',
					showConfirmButton: false,
					timer: 1500
				})
			</script>
		<?php
				break;
				case '2':
				?>
			<script>
				Swal.fire({
				position: 'center',
				icon: 'success',
				title: 'El usuario ha sido registrado',
				showConfirmButton: false,
				timer: 1500
				})
			</script>
		<?php
				break;
		}
		}
		?>

</body>

</html>