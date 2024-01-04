<?php 

if(!empty($_POST)){


require_once('../Models/conexion.php');
//TODO: Datos necesarios para la carga en la tabla de eventos.
$cedula        = $_POST['cedula'];
$cliente       = $_POST['cliente'];
$cliente_id    = $_POST['cliente_id'];
$fecha_evento  = $_POST['fecha_evento'];
$hora_evento   = $_POST['hora_evento'];
$menu          = $_POST['menu'];


//TODO: Datos necesario para la carga en la tabla del detalle del evento.

$servcio_id = $_POST['servicio_id'];

//TODO: Obtencion de los datos del servicio a grabar.
$servicio = mysqli_query($conection,"SELECT id,descripcion, precio FROM servicios WHERE id = '".$servcio_id."'");

while($data =  mysqli_fetch_array($servicio)){
    $idServicio = $data['id'];
    $detalle    = $data['descripcion'];
    $precio     = $data['precio'];
}
$cantidad = $_POST['cantidad'];
$total    = $precio * $cantidad;

//TODO: Validacion, si existe un cliente con ese evento en el dia.
$hoy = date('Y-m-d');

$verificacion =  mysqli_query($conection,"SELECT * FROM eventos WHERE  cliente_id =  '".$cliente_id."' AND created_at LIKE '%".$hoy."%' AND estatus = 1");

$resultado = mysqli_num_rows($verificacion);

while($datos = mysqli_fetch_array($verificacion)){
    $idCliente = $datos['cliente_id'];
}


if($cliente_id === $idCliente){
   

    //TODO: Si el evento se carga, se obtiene el id del evento para cargar el detalle.
    $evento = mysqli_query($conection, "SELECT * FROM eventos WHERE  estatus = 1 order by id desc limit 1");
    while ($data = mysqli_fetch_array($evento)) {

        $idEvento            = $data['id'];
    }

  

    $grabarDetalle_evento =  mysqli_query($conection, "INSERT INTO detalle_eventos(evento_id,servicio,precio,cantidad,monto_total,servicio_id) 
    VALUES('$idEvento','$detalle','$precio','$cantidad','$total','$idServicio')");

    if ($grabarDetalle_evento) {
        header("Location: ../Templates/eventos.php?id=$cliente_id");
    }else{
        echo 'Error al grabar el detalle';
        exit;
    }
}else{
    
    
    $grabarEvento = mysqli_query($conection,"INSERT INTO eventos(cedula,cliente,cliente_id,fecha_evento,hora_evento,menu)
                    VALUES('$cedula','$cliente','$cliente_id','$fecha_evento','$hora_evento','$menu')");


    $color = ' #d63384';
    $grabarCalendario = mysqli_query($conection,"INSERT INTO lista_eventos(evento,fecha_evento,color_evento) 
    VALUES('$cliente','$fecha_evento','$color')");

    if($grabarEvento){
        
  
        //TODO: Si el evento se carga, se obtiene el id del evento para cargar el detalle.
        $evento = mysqli_query($conection, "SELECT * FROM eventos WHERE  estatus = 1 order by id desc limit 1");
        while ($data = mysqli_fetch_array($evento)) {

            $idEvento            = $data['id'];
        }


        $grabarDetalle_evento =  mysqli_query($conection, "INSERT INTO detalle_eventos(evento_id,servicio,precio,cantidad,monto_total,servicio_id) 
        VALUES('$idEvento','$detalle','$precio','$cantidad','$total','$idServicio')");

        if ($grabarDetalle_evento) {
            header("Location: ../Templates/eventos.php?id=$cliente_id");
        }
    }
}

}

?>