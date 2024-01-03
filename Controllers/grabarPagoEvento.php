<?php 

session_start();

require_once("../Models/conexion.php");

$alert = '';

	if (!empty($_POST)) {
		
	
		if (empty( $_POST['monto'])) {
	
			$alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';
	
		}else{
	
			$idEvento        = $_POST['id'];
			$cliente_id      = $_POST['cliente_id'];
			$monto           = $_POST['monto'];
			
			
			
			
	
	
	//echo "SELECT * FROM usuario
	
			//WHERE(usuario = '$user' AND idusuario != $iduser) or (correo = '$email' AND idusuario != $iduser";
	//exit; sirve para ejectuar la consulta en mysql
			$query = mysqli_query($conection,"SELECT * FROM pagos
				WHERE  id != id"
			);
	
			$resultado = mysqli_fetch_array($query);
	
	
		}
	
		if ($resultado > 0) {
			$alert = '<p class = "msg_error">El Registro ya existe,ingrese otro</p>';
	
		}else{
	
            $query_insert = mysqli_query($conection, "INSERT INTO pagos(evento_id,cliente_id,monto)
            VALUES('$idEvento','$cliente_id','$monto')");
	
			if ($query_insert) {

                $alert = '<p class = "msg_error">Grabado Correctamente</p>';
	
			}else{
				 $alert = '<p class = "msg_error">Error al Actualizar el Registro</p>';
			}
		}
	}

//Recuperacion de datos para mostrar al seleccionar Actualizar

if (empty($_REQUEST['id'])) {
	header('location: ../Templates/eventos.php');

	//mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php

}

$id = $_REQUEST['id'];

$sql = mysqli_query($conection,"SELECT * FROM eventos  WHERE id = $id ");   

//mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php


$resultado = mysqli_num_rows($sql);

if ($resultado == 0) {
	header("location: ../Templates/pagoClientes.php");
}else{
	$option = '';
	while ($data = mysqli_fetch_array($sql)) {
		
		$id            = $data['id'];
		$cliente_id    = $data['cliente_id'];
		
	}
}


?>