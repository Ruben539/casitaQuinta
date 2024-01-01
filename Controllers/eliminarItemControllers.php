<?php
require_once "../Models/conexion.php";
	

	$id=$_POST['id'];

	
	
	

	$sql = "DELETE FROM detalle_eventos
                    WHERE id = '$id'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>