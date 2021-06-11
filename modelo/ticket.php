<?php

use FontLib\Table\Type\head;

require '../vendor/autoload.php';

    require_once('../config/conexion.php');
    require_once('usuario.php');

    $usuario = new Usuario();

    $html='';
    if(isset($_SESSION['lista'])){

        $array2 = (array) $_SESSION['lista'];
        $html2 ="";
        
        $cant_ticket = 0;
        $html1='
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <style type="text/css">
                body {
                    font-family: sans-serif;
                    background-color: #fff;
                    color: #fdc903;
                    margin: 5px;
                }

                table {
                    border-collapse: collapse;
                    padding: 0;
                    width: 100%;
                }

                td {
                    padding: 0;
                    vertical-align: top;
                }

                .ticket-title {
                    color: rgb(10, 28, 77);
                    font-size: 16px;
                    letter-spacing: 0;
                    line-height: 16px;
                    margin-top: 10px;
                }

                .ticket-info {
                    color: #535353;
                    font-size: 14px;
                    line-height: 21px;
                }

                .ticket-wrapper {
                    border: 2px solid #999;
                    border-top: 12px solid #fdc903;
                    margin: 15px auto 0;
                    padding-bottom: 15px;
                    width: 650px;
                }

                .ticket-wrapper:first-child {
                    margin-top: 0;
                }

                .ticket-table .first-col {
                    width: 570px;
                }

                .ticket-name-div {
                    border-bottom: 2px dotted #ccc;
                    margin: 0 12px 0 22px;
                    padding: 15px 0px 15px 0;
                    text-align: left;
                    color: black;
                    font-size: 35px;
                }

                .ticket-event-longtitle {
                    color: #535353;
                    font-size: 22px;
                    letter-spacing: -1px;
                    line-height: 22px;
                }

                .ticket-event-shorttitle {
                    color: #535353;
                    font-size: 18px;
                    letter-spacing: -1px;
                    line-height: 22px;
                }

                .ticket-event-details {
                    border-bottom: 2px dotted #ccc;
                    margin: 0 12px 0px 22px;
                    padding: 15px 0px 15px 0;
                    text-align: left;
                }

                .ticket-event-details .first-col {
                    text-align: left;
                    width: 40%;
                }

                .ticket-event-details .second-col {
                    text-align: right;
                    vertical-align: top;
                    width: 60%;
                }

                .ticket-venue {
                    color: #535353;
                    font-size: 14px;
                    line-height: 21px;
                }

                .ticket-venue:first-child {
                    font-size: 16px;
                }

                .ticket-ticket-details {
                    margin: 0 12px 0px 22px;
                    text-align: left;
                }

                .ticket-ticket-details .first-col {
                    border-right: 2px dashed #ccc;
                    padding-top: 4px;
                    text-align: left;
                    vertical-align: top;
                    width: 150px;
                }

                .ticket-ticket-details .second-col {
                    padding: 4px 0px 0px 32px;
                    text-align: left;
                    width: 225px;
                }

                .ticket-ticket-details .third-col {
                    text-align: right;
                }

                .ticket-qr-code{
                    height: 95px;
                    margin-top: 10px;
                    width: 95px;
                }

                /* Print specific styles */
                @media print {
                    a[href]:after, abbr[title]:after {
                        content: "";
                    }

                    .ticket-wrapper {
                        width: 16cm;
                    }

                    .ticket-table .first-col {
                        width: 13.8cm;
                    }

                    .ticket-logo img {
                        height: auto;
                        max-width: 100%;
                    }

                    .ticket-ticket-details .first-col {
                        width: 4cm;
                    }

                    .ticket-ticket-details .second-col {
                        width: 6cm;
                    }

                    .ticket-ticket-details .third-col {
                        width: 2.5cm;
                    }

                    @page {
                        margin: 1cm;
                    }
                }
                .ticket-name-div #color1 {
                color: #fdc903;
                }
                </style>
            </head>
            <body>';
            
            $contador2 = $_SESSION['lista'][3];
            $cant_ticket+=$contador2;
            for($i = 0;$i<sizeof($array2);$i+=4){
                if( $i == 4){
                    $contador2 = $_SESSION['lista'][7];
                    $cant_ticket+=$contador2;
                }
                if($i == 8){
                    $contador2 = $_SESSION['lista'][11];
                    $cant_ticket+=$contador2;
                }
                if($i == 12){
                    $contador2 = $_SESSION['lista'][15];
                    $cant_ticket+=$contador2;
                }
                if($i == 16){
                    $contador2 = $_SESSION['lista'][19];
                    $cant_ticket+=$contador2;
                }
                for($j=0;$j<$contador2;$j++){
                    
                $html2 = $html2. '<!-- Start Ticket -->
                <br><div class="ticket-wrapper">
                    <table class="ticket-table">
                        
                        <tr>
                            <td class="first-col">
                                <!-- title -->
                                <div class="ticket-name-div">
                                    <span id="color1">U</span>NA<span id="color1"> B</span>US
                                </div>
                                <!-- /.ticket-name-div -->
                                <!-- venue details start -->
                                <div class="ticket-event-details">
                                    <table>
                                        <tr>
                                            <td class="first-col">
                                                <div class="ticket-title">
                                                    FECHA:
                                                </div>
                                                <div class="ticket-info">
                                                '. date("d") . " del " . date("m") . " de " . date("Y").'
                                                </div>
                                                <!-- /.ticket-info -->
                                                <div class="ticket-title">
                                                    HORA DE SALIDA:
                                                </div>
                                                <!-- /.ticket-title -->
                                                <div class="ticket-info">
                                                '.$_SESSION['lista'][$i+1].'
                                                </div>
                                                <!-- /.ticket-info -->
                                            </td>
                                            <!-- /.first-col -->
                                            <td class="second-col">
                                                <div class="ticket-title">
                                                    RUTA:
                                                </div>
                                                <div class="ticket-info">
                                                '.$_SESSION['lista'][$i].'
                                                </div>

                                                <!-- /.ticket-venue -->
                                            </td>
                                            <!-- /.second-col -->
                                        </tr>
                                    </table>
                                </div>
                                <!-- /.ticket-event-details -->
                                <!-- ticket details start -->
                                <div class="ticket-ticket-details">
                                    <table>
                                        <tr>
                                            <td class="first-col">
                                                <div class="ticket-title">
                                                    CÓDIGO:
                                                </div>
                                                <!-- /.ticket-title -->
                                                <div class="ticket-info">
                                                '.genera_codigo(4).'
                                                </div>
                                                <!-- /.ticket-info -->
                                                <div class="ticket-title">
                                                    PRECIO:
                                                </div>
                                                <!-- /.ticket-title -->
                                                <div class="ticket-info">
                                                '.$_SESSION['lista'][$i+2].'
                                                </div>
                                                <!-- /.ticket-info -->
                                            </td>
                                            <!-- /.first-col -->
                                            <td class="second-col">
                                                <div class="ticket-title">
                                                    CLIENTE:
                                                </div>
                                                <!-- /.ticket-title -->
                                                <div class="ticket-info">
                                                '.$_SESSION['nombre'].'
                                                </div>
                                                <!-- /.ticket-info -->
                                                <div class="ticket-title">
                                                    VALIDEZ DEL TIQUETE:
                                                </div>
                                                <!-- /.ticket-title -->
                                                <div class="ticket-info">
                                                    7 Días
                                                </div>
                                                <!-- /.ticket-info -->
                                            </td>

                                        </tr>
                                    </table>
                                </div>
                                <!-- /.ticket-ticket-details -->
                            </td>
                        </tr>

                    </table>
                    <!-- /.ticket-table -->
                </div>
                <!-- /.ticket-wrapper -->
                <!-- End Ticket -->';
                        }
                    }
            $html8 ='</body>';  

            $html = $html1.$html2.$html8;

            if($usuario->validarCantTickets($_SESSION['pasaporte']) == false){
                header("Location:".Conectar::ruta()."view/Sistema_Compra/comprar.php?sweet=1");
                exit;
            }

            if($usuario->insertarTickets($cant_ticket,$_SESSION['pasaporte']) == false){
                header("Location:".Conectar::ruta()."view/Sistema_Compra/comprar.php?sweet=1");
                exit;
            }

    }

    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options();
    $options->setIsRemoteEnabled(true);
    $options-> setIsHtml5ParserEnabled(true);
    $dompdf = new Dompdf($options);

    $context = stream_context_create([
	'ssl' => [
		'verify_peer' => FALSE,
		'verify_peer_name' => FALSE,
		'allow_self_signed'=> TRUE
	]
    ]);

    $dompdf->setHttpContext($context);


    $dompdf->loadHtml($html);
    $dompdf->render();
    
    $dompdf->stream("Ticket.pdf",array('Attachment'=>'0'));
 
    
    function genera_codigo ($longitud) {
        $caracteres = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $codigo = '';
  
        for ($i = 1; $i <= $longitud; $i++) {
            $codigo .= $caracteres[numero_aleatorio(0, 35)];
        }
  
        return $codigo;
    }
  
    function numero_aleatorio ($ninicial, $nfinal) {
        $numero = rand($ninicial, $nfinal);
  
        return $numero;
    }
  
?>