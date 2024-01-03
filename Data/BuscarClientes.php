<?php

session_start();
require_once("../Models/conexion.php");


$cedula = $_POST['inputCedula'];
$nombre = $_POST['inptudNombre'];



if ($cedula && empty($nombre)) {
    $sql = mysqli_query($conection, "SELECT e.id,e.cedula,e.cliente,e.cliente_id,e.fecha_evento,e.hora_evento,e.menu FROM eventos e
    WHERE e.cedula = '".$cedula."'");
} else {

    $sql = mysqli_query($conection, "SELECT e.id,e.cedula,e.cliente,e.cliente_id,e.fecha_evento,e.hora_evento,e.menu FROM eventos e
    WHERE e.cliente LIKE '%".$nombre."%'");
}


$resultado = mysqli_num_rows($sql);


if($resultado = 0){
    echo '<div class="msg-win">No hay comprobantes disponibles</div>'; 
}




$monto = 0;

while ($data = mysqli_fetch_array($sql)) {
    
    echo '
    <div class="col-12 mx-auto">
      <div class="card mt-7">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Cliente: ' . $data['cliente'] .'</h6>
            <p class="mb-0 text-white ps-3">Cedula : 
              <a class="text-white font-weight-bold" target="_blank" href="#"> ' . $data['cedula'] .'</a>
            </p>
          </div>
        </div>
        <div class="card-body">
          <table class = "table">
          <thead class="text-center">
          <tr>      
            
            <th>Fecha del Evento</th>                           
            <th>Hora del Evento</th>                           
            <th>Menu</th>                           
            <th>Imprimir</th>                                                                
          </tr>
        </thead>
        <tbody class="text-center">
            <tr>

            <td>' . $data['fecha_evento'] . '</td>
            <td>' . $data['hora_evento'] . '</td>
            <td>' . $data['menu'] . '</td>
            <td>
                <a href="../Reports/eventosPDF.php?id=' . $data['id'] . ' " class="btn btn-outline-danger" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
             </td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  ';
}

?>
