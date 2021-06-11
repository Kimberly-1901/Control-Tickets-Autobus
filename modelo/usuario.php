<?php
    class Usuario extends Conectar{

        public function login(){
            $mysqli = parent::Conexion();

            if(isset($_POST["enviar"])){
                $correo = $_POST["correo"];
                $password = $_POST["password"];
                $password2 = md5($password);

                if(empty($correo) and empty($password)){
                    header("Location:".Conectar::ruta()."view/sesion.php?m=2");
                    exit();  
                }
                else{
                    $query="SELECT * FROM usuarios WHERE correo='$correo' and password='$password2'";
                    $resultado = $mysqli->query($query);

                    if($resultado->num_rows>=1){
                        $fila = $resultado->fetch_array(MYSQLI_ASSOC);
                        $_SESSION['pasaporte'] = $fila['pasaporte'];
                        $_SESSION['correo'] = $fila['correo'];
                        $_SESSION['nombre'] = $fila['nombre']; 
                        $_SESSION['password'] = $fila['password'];
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (15*60);

                        header("Location:".Conectar::ruta()."view/Sistema_Compra/comprar.php"); 
                        exit();

                    }else{
                        header("Location:".Conectar::ruta()."view/sesion.php?m=1");
                        exit();
                    }
                }
            }
        }

        public function insertar_usuario($pasaporte,$nombre,$apellidos,$nacionalidad,$correo,$password,$telefono,$tarjeta,$ccv,$vencimiento){
            $mysqli = parent::Conexion();

            $password2 = md5($password);

            $query = "INSERT INTO usuarios(pasaporte,nombre,apellidos,nacionalidad,correo,password,telefono,tarjeta,ccv,vencimiento) VALUES 
                    ('$pasaporte','$nombre','$apellidos','$nacionalidad','$correo','$password2','$telefono','$tarjeta','$ccv','$vencimiento')";

            $resultado = $mysqli->query($query);
        }

        public function buscarRepetido($correo){
            $mysqli = parent::Conexion();

            $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
            
            $resultado = $mysqli->query($sql);

            if($resultado->num_rows >= 1){
                return true;
            }
            return false;
        }

        public function buscarRepetidoPasaporte($pasaporte){
            $mysqli = parent::Conexion();

            $sql = "SELECT * FROM usuarios WHERE pasaporte='$pasaporte'";
            
            $resultado = $mysqli->query($sql);

            if($resultado->num_rows >= 1){
                return true;
            }
            return false;
        }

        public function insertarTickets($cant_tickets,$pasaporte){
            $mysqli = parent::Conexion();

            $sql1 = "SELECT cant_tickets FROM usuarios WHERE pasaporte = '$pasaporte'";
            $resultado1 = $mysqli->query($sql1);
            $fila1 = $resultado1->fetch_array(MYSQLI_ASSOC);

            $cant_tickets += $fila1['cant_tickets'];

            if($cant_tickets <= 5){
                $sql = "UPDATE usuarios SET cant_tickets = '$cant_tickets' WHERE pasaporte = '$pasaporte'";
                $resultado = $mysqli->query($sql);
                return true;
            }
            return false;

            
        }

        public function validarCantTickets($pasaporte){
            $mysqli = parent::Conexion();

            $sql = "SELECT cant_tickets FROM usuarios WHERE pasaporte = '$pasaporte'";
            
            $resultado = $mysqli->query($sql);

            $fila = $resultado->fetch_array(MYSQLI_ASSOC);

            if($fila['cant_tickets'] >= 5){
                return false;
            }
            return true;
        }
    }
?>