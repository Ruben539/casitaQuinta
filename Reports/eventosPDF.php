<?php

$id =  $_REQUEST['id'];
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/assets/img/favicon.png">
    <title>
        Casita Quinta
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    <!-- Font-icon css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/js/sweetalert2.min.css">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .containerImage {
        position: relative;
        /* border: 1px solid #f23;*/
        width: 400px;
        top: -50px;

    }

    .image {
        width: 300px;
        height: 210px;
    }

    .containerInfo {
        height: 155px;
        border-bottom: 2px solid #d63384;
    }

    .containerTexto1 {
        position: relative;
        width: 350px;
        /*border: 1px solid #f23;*/
        left: 320px;
        top: -200px;
    }

    .containerTexto2 {
        position: relative;
        width: 350px;
        /*border: 1px solid #f23;*/
        left: 680px;
        top: -285px;
    }

    .tr {
        border-bottom: 1px solid #d63384;
        cursor: pointer;
    }

    .tr:hover {
        background-color: #d63384;
        color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.25);

        .fas,
        .btn,
        .fa {
            color: #fff;
        }

    }

    .fas {
        color: #d63384;
    }

    .total {
        position: relative;
        left: 850px;
        border: 1px solid #d63384;
        width: 210px;
        margin-bottom: 5px;
    }

    .total h5 {
        margin-left: 5px;
    }

    .pago {
        position: relative;
        left: 850px;
        border: 1px solid #d63384;
        width: 210px;
        margin-bottom: 5px;
    }

    .pago h5 {
        margin-left: 5px;
    }

    .falta {
        position: relative;
        left: 850px;
        border: 1px solid #d63384;
        width: 210px;
    }

    .falta h5 {
        margin-left: 5px;
    }
</style>

<body class="g-sidenav-show  bg-white-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="col-12">
            <div class="card h-100">
                <div class="card-header p-1 position-relative mt-n4 mx-4 z-index-2">

                    <h2 class="text-capitalize ps-3 text-center">Casita Quinta</h2>
                    <div class="containerInfo">
                        <div class="containerImage">
                            <img class="image" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/assets/img/logoCasita.png" alt="logo">
                        </div>
                        <?php
                        require_once('../Models/conexion.php');
                        $hoy = date('Y-m-d');

                        $detalles =  mysqli_query($conection, "SELECT * FROM eventos 
                                WHERE  id =  $id  AND estatus = 1");



                        while ($data = mysqli_fetch_array($detalles)) {
                            $ci           = $data['cedula'];
                            $cliente      = $data['cliente'];
                            $menu         = $data['menu'];
                            $fecha_evento = $data['fecha_evento'];
                            $hora_evento  = $data['hora_evento'];
                        }

                        ?>
                        <?php if(empty($ci) && empty($cliente) && empty($menu) && empty($fecha_evento) && empty($hora_evento)) { ?>
                            <div class="containerTexto1">
                                <p>Nombre : </p>
                                <p>Fecha de Evento : </p>
                            </div>
                            <div class="containerTexto2">
                                <p>Menu : </p>
                                <p>Hora de Evento : </p>
                            </div>
                        <?php } else { ?>
                            <div class="containerTexto1">
                                <p>Nombre : <?= $cliente; ?></p>
                                <p>Fecha de Evento : <?= $fecha_evento; ?></p>
                            </div>
                            
                            <div class="containerTexto2">
                                <p>Menu : <?= $menu; ?></p>
                                <p>Hora de Evento : <?= $hora_evento; ?>.hs</p>
                            </div>
                        <?php } ?>

                    </div>


                </div>

                <div class="card-body">
                    <div class="form-check form-check-info text-start ps-0">
                        <div class="card-body pt-3 p-3">
                            <table class="table text-center">
                                <thead>
                                    <th>Nro</th>
                                    <th>Detalle</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once("../Models/conexion.php");

                                    $query_evento = mysqli_query($conection, "SELECT  de.id,e.cedula,e.cliente,e.cliente_id,e.fecha_evento,e.hora_evento,e.menu,
                                            de.servicio,de.precio,de.cantidad,de.monto_total
                                            FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
                                            WHERE e.id =  $id  AND e.estatus = 1 AND de.estatus = 1");

                                    $resultado = mysqli_num_rows($query_evento);
                                    $nro = 0;
                                    $total = 0;
                                    $idCliente = 0;

                                    if ($resultado > 0) {
                                        while ($data = mysqli_fetch_array($query_evento)) {
                                            $nro++;
                                            $total     += $data['monto_total'];
                                            $idCliente = $data['cliente_id'];

                                    ?>
                                            <tr class="tr">
                                                <td><?php echo $nro ?></td>
                                                <td><?php echo $data['servicio'] ?></td>
                                                <td><?php echo number_format($data['precio'], 0, '.', '.') ?> .GS </td>
                                                <td><?php echo $data['cantidad'] ?></td>
                                                <td><?php echo number_format($data['monto_total'], 0, '.', '.') ?> .GS </td>
                                            </tr>
                                    <?php
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                    <div class="total">
                        <h5 >Total : <span><?php echo number_format($total, 0, '.', '.') ?> .GS</span></h5> 
                    </div>
                    <div class="pago">
                        <?php
                            require_once("../Models/conexion.php");

                            $query_pago = mysqli_query($conection,"SELECT * FROM pagos WHERE evento_id = $id AND cliente_id = $idCliente AND estatus = 1");
                            
                            $montoAbonado = 0;
                            while($pago = mysqli_fetch_array($query_pago)){
                                $montoAbonado  += $pago['monto'];
                            }
                        ?>
                        <h5 >Pagado : <span><?php echo number_format($montoAbonado, 0, '.', '.') ?> .GS</span></h5> 
                    </div>
                    <div class="falta">
                        <h5 >Faltante : <span><?php echo number_format($total - $montoAbonado, 0, '.', '.') ?> .GS</span></h5> 
                    </div>
            </div>
        </div>
    </main>



</body>

</html>

<?php
$html = ob_get_clean();
//echo $html;

require_once "../Library/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

//$dompdf->setPaper('letter');
$dompdf->setPaper('A4', 'landscape');



$dompdf->render();
$dompdf->stream('evento-'.$cliente.'.pdf', array('Attachment' => false));

?>