<?php
require_once("../config/conexion.php");

if (isset($_POST['enviar'])) {
  require_once("../modelo/usuario.php");
  $usuario = new Usuario();
  $usuario->login();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="../images/favicon.ico" />
    <link rel="icon" href="../images/avatar.png" sizes="50x50" type="image/jpg" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../booking/css/booking.css" />
    <link rel="stylesheet" href="../css/camera.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/superfish.js"></script>
    <script src="../js/jquery.ui.totop.js"></script>
    <script src="../js/jquery.equalheights.js"></script>
    <script src="../js/jquery.mobilemenu.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/camera.js"></script>
    <script src="../js/jquery.mobile.customized.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script>
    $(document).ready(function() {
        jQuery("#camera_wrap").camera({
            loader: false,
            pagination: false,
            minHeight: "521",
            thumbnails: false,
            height: "35%",
            caption: true,
            navigation: true,
            fx: "mosaic",
        });
        $().UItoTop({
            easingType: "easeOutQuart"
        });
    });
    </script>
</head>

<body class="page1" id="top">
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
                                <li><a href="contacto.php">Contactos</a></li>
                                <li class="current">
                                    <a href="#" style="margin-left: 100px">Iniciar Sesión</a>
                                </li>
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
                            <img src="../images/LogoBus.png" />
                        </a>
                    </h1>
                </div>
            </div>
            <div class="clear"></div>
        </header>

        <div class="content">
            <div class="ic">
                More Website Templates @ TemplateMonster.com - April 07, 2014!
            </div>
            <div class="container_12">
                <div class="grid_5" style="margin-left: 375px; margin-bottom: 200px">
                    <h4>Compra ticketes en linea: <br><br> Limite de Ticketes por semana(5) </h4>
                    <h3>Iniciar Sesión</h3>

                    <?php
          if (isset($_GET['m'])) {
            switch ($_GET['m']) {
              case '1':
          ?>
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Credenciales Incorrectas',
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
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Los campos están vacios',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    </script>
                    <?php
                break;
            }
          }
          ?>

                    <form id="bookingForm" method="POST" action="sesion.php">
                        <div class="fl1">
                            <div class="tmInput">
                                <label for="correo">Correo: </label>
                                <input type="text" name="correo" />
                            </div>
                            <div class="tmInput">
                                <label for="password">Contraseña: </label>
                                <input type="password" name="password" />
                            </div>
                            <div class="btns">
                                <input type="submit" name="enviar" id="btnEnviar" value="Iniciar">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
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



    <?php
    if(isset($_GET['u'])){
    ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Sesión expirada, Vuelve a Iniciar Sesión',
        showConfirmButton: false,
        timer: 2000
    })
    </script>
    <?php
    }
  ?>

</body>

</html>