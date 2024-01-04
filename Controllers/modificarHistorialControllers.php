<?php 

session_start();

require_once("../Models/conexion.php");

$alert = '';

	if (!empty($_POST)) {
		
	
		if (empty( $_POST['cantidad'])) {
	
			$alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';
	
		}else{
	
			$id              = $_POST['id'];
			$precio          = $_POST['precio'];
			$cantidad        = $_POST['cantidad'];
			$idEvento        = $_POST['idEvento'];
            $total           = $precio * $cantidad;
			
			
			
	
	
	//echo "SELECT * FROM usuario
	
			//WHERE(usuario = '$user' AND idusuario != $iduser) or (correo = '$email' AND idusuario != $iduser";
	//exit; sirve para ejectuar la consulta en mysql
			$query = mysqli_query($conection,"SELECT * FROM detalle_eventos
				WHERE  id != id"
			);
	
			$resultado = mysqli_fetch_array($query);
	
	
		}
	
		if ($resultado > 0) {
			$alert = '<p class = "msg_error">El Registro ya existe,ingrese otro</p>';
	
		}else{
	
			$sql_update = mysqli_query($conection,"UPDATE detalle_eventos SET cantidad = '$cantidad',precio = '$precio',monto_total = '$total'
				WHERE id = $id");
	
			if ($sql_update) {

                $cliente = mysqli_query($conection, "SELECT * FROM eventos WHERE id = '".$idEvento."' AND estatus = 1");
                while ($data = mysqli_fetch_array($cliente)) {
            
                    $cliente_id       = $data['cliente_id'];
                }
	
                header("Location: ../Templates/historialEvento.php");
	
			}else{
				 $alert = '<p class = "msg_error">Error al Actualizar el Registro</p>';
			}
		}
	}

//Recuperacion de datos para mostrar al seleccionar Actualizar

if (empty($_REQUEST['id'])) {
	header('location: ../Templates/historialEvento.php');

	//mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php

}

$id = $_REQUEST['id'];

$sql = mysqli_query($conection,"SELECT * FROM detalle_eventos  WHERE id = $id ");   

//mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php


$resultado = mysqli_num_rows($sql);

if ($resultado == 0) {
	header("location: ../Templates/historialEvento.php");
}else{
	$option = '';
	while ($data = mysqli_fetch_array($sql)) {
		
		$id            = $data['id'];
		$precio        = $data['precio'];
		$cantidad      = $data['cantidad'];
		$idEvento      = $data['evento_id'];
		

	}
}


?>