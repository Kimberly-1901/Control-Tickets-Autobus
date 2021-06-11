<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contacto</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<link rel="shortcut icon" href="../images/favicon.ico" />
	<link rel="icon" href="../images/avatar.png" sizes="50x50" type="image/jpg" />
	<link rel="stylesheet" href="../css/form.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery-migrate-1.2.1.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/superfish.js"></script>
	<script src="../js/jquery.ui.totop.js"></script>
	<script src="../js/jquery.equalheights.js"></script>
	<script src="../js/jquery.mobilemenu.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/TMForm.js"></script>
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
								<li><a href="horarios.php">Horarios y Precios</a></li>
								<li class="current"><a href="contacto.php">Contactos</a></li>
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
						<a href="../index.php">
							<img src="../images/LogoBus.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
			<div class="clear"></div>
		</header>
		<!--==============================Content=================================-->
		<div class="content">
			<div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
			<div class="container_12">
				<div class="grid_12">
					<h3>Encuéntranos</h3>
					<div class="map">
						<figure>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.964796026656!2d-84.19916888593994!3d10.019763792837592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f9e55a4f17c3%3A0x9c99069409cbf8d9!2sSede%20Interuniversitaria%20de%20Alajuela%20UCR%2FUNA%2FUNED%2FTEC!5e0!3m2!1ses!2scr!4v1621370946782!5m2!1ses!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</figure>
					</div>
				</div>
				<div class="grid_4">
                        <h3>Información de contacto</h3>
                        <div class="map">
                            <div class="text1 color2">Contáctenos haciendonos llegar su consulta o comentario.¡Nos encantaría que lo hicieras! Llámanos y habla con nuestro equipo de ventas.</div>
                            <address>
                                <dl>
                                    <dt>UNA BUS. <br>
                                        Alajuela, Brasil<br>
                                    </dt>
                                    <dd><span>Teléfono:</span> + 2440 2139</dd>
                                    <dd>Correo: <a href="#" class="color1">unabus@gmail.com</a></dd>
                                </dl>
                            </address>
                        </div>
                    </div>
				<div class="grid_6 prefix_1">
					<h3>Formulario de Contacto</h3>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Nombre:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*Este Campo es Requerido</span>
							<span class="error-message">*Este no es un nombre válido.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
							<span class="empty-message">*Este Campo es Requerido</span>
							<span class="error-message">*Este no es un correo válido</span>
						</label>
						<label class="phone">
							<input type="text" placeholder="Télefono:" data-constraints="@Required @JustNumbers" />
							<span class="empty-message">*Este campo es requerido</span>
							<span class="error-message">*Este no es un número de télefono valido</span>
						</label>
						<label class="message">
							<textarea placeholder="Mensaje:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="submit" class="btn">Enviar</a>
								<a href="#" data-type="reset" class="btn">Limpiar</a>
							</div>
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>
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