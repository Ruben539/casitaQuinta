<?php

$id = $_REQUEST['id'];

ob_start();
require_once('../Includes/header_admin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/bootstrap/dist/css/bootstrap.min.css">
    <title>Reporte de Clientes</title>
</head>


<body>
    <main class="main-content position-relative max-height-vh-100 h-100 ">
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header p-1 position-relative mt-n4 mx-4 z-index-2">

                            <h2 class="text-capitalize ps-3 text-center" style="font-family: 'Times New Roman', Times, serif;">Casita Quinta</h2>
                            <div class="containerInfo">
                                <div class="containerImage">
                                    <img class="image" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/casitaQuinta/assets/img/logoCasita.png" alt="logo">
                                </div>
                                <?php

                                require_once('../Models/conexion.php');
                               
                                $detalles =  mysqli_query($conection, "SELECT * FROM eventos 
                                WHERE  id =  '" . $id . "'  AND estatus = 1");



                                while ($data = mysqli_fetch_array($detalles)) {
                                    $ci           = $data['cedula'];
                                    $cliente      = $data['cliente'];
                                    $menu         = $data['menu'];
                                    $fecha_evento = $data['fecha_evento'];
                                    $hora_evento  = $data['hora_evento'];
                                }

                                ?>
                                <?php if (empty($ci) && empty($cliente) && empty($menu) && empty($fecha_evento) && empty($hora_evento)) { ?>
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
                                <div class="card-body pt-3 p-3 table-responsive">
                                    <table class="table table-bordered table-condensed text-center">
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

                                            $query_evento = mysqli_query($conection, "SELECT  de.id,e.cedula,e.cliente,e.fecha_evento,e.hora_evento,e.menu,
                                            de.servicio,de.precio,de.cantidad,de.monto_total
                                            FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
                                            WHERE e.id =  '" . $id . "'  AND e.estatus = 1");

                                            $resultado = mysqli_num_rows($query_evento);
                                            $nro = 0;
                                            $total = 0;

                                            if ($resultado > 0) {
                                                while ($data = mysqli_fetch_array($query_evento)) {
                                                    $nro++;
                                                    $total += $data['monto_total'];

                                            ?>
                                                    <tr class="tr">
                                                        <td><?php echo $nro ?></td>
                                                        <td><?php echo $data['servicio'] ?></td>
                                                        <td><?php echo number_format($data['precio'], 0, '.', '.') ?> .GS </td>
                                                        <td><?php echo $data['cantidad'] ?> </td>
                                                        <td><?php echo number_format($data['monto_total'], 0, '.', '.') ?> .GS </td>
                                                    </tr>
                                            <?php
                                                }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="total">
                                    <h5>Total a Pagar: <span><?php echo number_format($total, 0, '.', '.') ?> .GS</span></h5>

                                </div>
                                <br>
                                <div class="total">
                                    <?php
                                     require_once('../Models/conexion.php');
                               
                                     $pagos =  mysqli_query($conection, "SELECT * FROM pagos 
                                     WHERE  evento_id =  '" . $id . "'  AND estatus = 1");

                                     $monto = 0;
                                     while($data = mysqli_fetch_array($pagos)){
                                        $monto += $data['monto'];
                                     }
                                    
                                    ?>
                                    <h5>Total Pagado: <span><?php echo number_format($monto, 0, '.', '.') ?> .GS</span></h5>

                                </div>
                                <br>
                                <div class="total">
                                    <h5>Pendiente: <span><?php echo number_format($total - $monto, 0, '.', '.') ?> .GS</span></h5>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<style>
    .containerImage {
        position: relative;
        /* border: 1px solid #f23;*/
        width: 300px;
        top: -60px;

    }

    .image {
        width: 200;
        height: 150px;
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
        top: -150px;
    }

    .containerTexto2 {
        position: relative;
        width: 350px;
        /*border: 1px solid #f23;*/
        left: 580px;
        top: -245px;
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
        text-align: right;
                
    }

    
</style>
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
$dompdf->stream('reporte-clientes.pdf', array('Attachment' => false));

?>