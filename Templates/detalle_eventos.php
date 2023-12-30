<div class="table-responsive">
    <table class="table align-items-center mb-0 text-center">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nro</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Servicio</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Precio</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Monto Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../Models/conexion.php");
            $hoy = date('Y-m-d');
            //  echo $hoy;
            //   exit();


            $sql = mysqli_query($conection, "SELECT e.cliente,e.fecha_evento,e.hora_evento,de.servicio,de.precio,de.cantidad,de.monto_total
            FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
            WHERE e.created_at LIKE '%".$hoy."%' AND e.estatus = 1");

            $resultado = mysqli_num_rows($sql);
            $monto = 0;
            $cont = 0;

            if ($resultado > 0) {
                while ($data = mysqli_fetch_array($sql)) {
                    $monto += $data['precio'];
                    $cont++;
            ?>
                    <tr>
                        <td><?php echo $cont; ?></td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="../assets/img/fisio1.jpg" class="avatar avatar-sm me-3" alt="xd">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?php echo $data['servicio']; ?></h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold"><?php echo $data['precio']; ?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"><?php echo $data['cantidad']; ?></span>
                        </td>
                        <td class="align-middle">
                            <div class="progress-wrapper w-75 mx-auto">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                       
                                            <h5 class="text-success"><?php echo $data['monto_total']; ?></h5>
                                       
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>