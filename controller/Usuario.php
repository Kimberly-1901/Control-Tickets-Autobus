<?php
    require_once("../config/conexion.php");
    require_once("../modelo/usuario.php");

    $usuario = new Usuario();

    switch($_GET['opc']){
        case 'insert':
            if($usuario->buscarRepetido($_POST['correo']) == false && $usuario->buscarRepetidoPasaporte($_POST['pasaporte']) == false){
                $usuario->insertar_usuario($_POST['pasaporte'],$_POST['nombre'],$_POST['apellidos'],$_POST['nacionalidad'],$_POST['correo'],$_POST['password'],$_POST['tel'],
                $_POST['tarjeta'],$_POST['ccv'],$_POST['vencimiento']);
            
                header("Location:".Conectar::ruta()."view/Registro/registro.php?sweet=2");
            }
            else{
                header("Location:".Conectar::ruta()."view/Registro/registro.php?sweet=1");
            }

            break;
            
    }

?>
