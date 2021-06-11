<?php
  require_once("../../config/conexion.php");
  
  $now = time();

  if($now > $_SESSION['expire']) {
    session_destroy();

    header("Location:".Conectar::ruta()."view/sesion.php?u=1");
    exit;
  }
  if(isset($_SESSION['pasaporte'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Compra Tickets</title>
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
    <script src="../../js/superfish.js"></script>
    <script src="../../js/jquery.ui.totop.js"></script>
    <script src="../../js/jquery.equalheights.js"></script>
    <script src="../../js/jquery.mobilemenu.js"></script>
    <script src="../../js/jquery.easing.1.3.js"></script>
    <script src="../../js/jquery.mobile.customized.min.js"></script>
</head>

<body class="" id="top">
    <div class="main">
        <header>
            <div class="menu_block">
                <div class="container_12">
                    <div class="grid_12">
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                <li class="current"><a href="#">Compra Tickets</a></li>
                                <li><a style="margin-left: 100px;">Usuario <?php echo $_SESSION['nombre'] ?></a></li>
                                <li><a href="../../modelo/logout.php">Cerrar Sesión</a> </li>
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
            <div class="tablas">
                <div id="tabla1">
                    <h1 id="lista">Lista de Horarios y Precios</h1>
                    <?php
                        require_once "../../config/conexion.php";
                        require_once "../../modelo/tablaHorario2.php";
                        $tabla = new Tabla();
                        $tabla->llenarTabla();
                    ?>
                </div>
                <div id="tabla2">
                    <h1 id="lista">Lista de Rutas Elejidas</h1>
                    <table id="customers3">
                        <thead>
                            <tr>
                                <th>Ruta</th>
                                <th>Horario</th>
                                <th>Precio</th>
                                <th>Cantidad de Ticketes</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <input type="hidden" value="Realizar Compra" onclick="validarCantTickets()" id="btnComprar" name="btnComprar" />
                </div>
            </div>
            <div class="clear"></div>
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

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        <script src="comprar.js"></script>

        <?php
            if(isset($_GET['sweet'])){
                ?>
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Has superado el limite semanal de Ticketes (5)',
                    showConfirmButton: false,
                    timer: 2000
                })
                </script>
                  <?php
            }
        ?>

</body>

</html>

<?php
  }
  else{
    header("Location:".Conectar::ruta()."index.php");
  }
?>