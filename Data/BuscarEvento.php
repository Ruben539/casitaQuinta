<?php

session_start();
require_once("../Models/conexion.php");
date_default_timezone_set('America/Asuncion');

$fecha = date('Y');

$cedula = $_POST['inputCedula'];
$nombre = $_POST['inptudNombre'];



if ($cedula && empty($nombre)) {
    $sql = mysqli_query($conection, "SELECT  e.id as evento,de.id,e.cedula,e.cliente,e.cliente_id,e.fecha_evento,e.hora_evento,e.menu,
    de.servicio,de.precio,de.cantidad,de.monto_total
    FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
    WHERE e.cedula = '" . $cedula . "' AND e.estatus = 1 AND de.estatus = 1");
} else {

    $sql = mysqli_query($conection, "SELECT  e.id as evento,de.id,e.cedula,e.cliente,e.cliente_id,e.fecha_evento,e.hora_evento,e.menu,
    de.servicio,de.precio,de.cantidad,de.monto_total
    FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
    WHERE e.cliente LIKE '%" . $nombre . "%' AND e.estatus = 1 AND de.estatus = 1");
}


$resultado = mysqli_num_rows($sql);

while ($detalle = mysqli_fetch_array($sql)) {
    $id           = $detalle['evento'];
    $ci           = $detalle['cedula'];
    $idCliente    = $detalle['cliente_id'];
    $cliente      = $detalle['cliente'];
    $menu         = $detalle['menu'];
    $fecha_evento = $detalle['fecha_evento'];
    $hora_evento  = $detalle['hora_evento'];
}

if ($resultado = 0) {
    echo '<div class="msg-win">No hay comprobantes disponibles</div>';
}




$monto = 0;


echo ' <div class="card-header p-1 position-relative mt-n4 mx-4 z-index-1">
             <h2 class="text-capitalize ps-3 text-center">Casita Quinta</h2>
                <div class="containerInfo">
                    <div class="containerImage">
                         <img class="image" src="../assets/img/logoCasita.png" alt="logo">
                     </div>
                    <div class="containerTexto1">
                        <p>Nombre : ' . $cliente . '</p>
                        <p>Fecha de Evento : ' . $fecha_evento . '</p>
                    </div>
                    <div class="containerTexto2">
                        <p>Menu :' . $menu . '</p>
                        <p>Hora de Evento : ' . $hora_evento . '.hs</p>
                    </div>
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
                            <th></th>
                        </thead>
                        <tbody>';
                        $sql = mysqli_query($conection, "SELECT  e.id,de.id,e.cedula,e.cliente,e.cliente_id,e.fecha_evento,e.hora_evento,e.menu,
                        de.servicio,de.precio,de.cantidad,de.monto_total
                        FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
                        WHERE e.id =  $id  AND e.estatus = 1 AND de.estatus = 1");
                        $total = 0;
                        $nro = 0;
                        while($data = mysqli_fetch_array($sql)){
                            $nro++;
                            $total     += $data['monto_total'];
                            echo '<tr>
                            <td>' . $nro.'</td>
                            <td>' . $data['servicio'] .'</td>
                            <td>' . number_format($data['precio'],0,'.','.') .' <a class="edit" href="../Views/editarPrecioHistorial.php?id='.$data['id'].'"><i class="fas fa-edit"></i></a></td>
                            <td>' . $data['cantidad'] .' <a class="edit" href="../Views/editarCantidadHistorial.php?id='.$data['id'].'"><i class="fas fa-edit"></i></a></td>
                            <td>' . number_format($data['monto_total'],0,'.','.') .'</td>
                            <td>
                            <button onclick="EliminarItems('.$data['id'].')" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                            </td>
                            
                            </tr>';
                        }
                echo   '</tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="total">
            <h5 >Total : <span>'. number_format($total, 0, '.', '.')  .'.GS</span></h5> 
         </div>
         <div class="pago">';
         require_once("../Models/conexion.php");

         $query_pago = mysqli_query($conection,"SELECT * FROM pagos WHERE evento_id = $id AND cliente_id = $idCliente AND estatus = 1");
         
         $montoAbonado = 0;
         while($pago = mysqli_fetch_array($query_pago)){
             $montoAbonado  += $pago['monto'];
         }
         echo '
         <h5 >Pagado : <span>'.number_format($montoAbonado, 0, '.', '.') .'.GS</span></h5>
         </div>
         <div class="falta">
             <h5 >Faltante : <span>'.number_format($total - $montoAbonado, 0, '.', '.').'.GS</span></h5> 
         </div>
         <footer class="footer py-4  ">
         <div class="container-fluid">
             <div class="row align-items-center justify-content-lg-between">
                 <div class="col-lg-6 mb-lg-0 mb-4">
                     <div class="copyright text-center text-sm text-muted text-lg-start">
                         ©'.$fecha.',
                         Casita Quinta <i class="fa fa-heart" style="color: #f23;"></i> acompañandote en tus mejores monentos.
                     </div>
                 </div>

             </div>
         </div>
     </footer>
         ';

