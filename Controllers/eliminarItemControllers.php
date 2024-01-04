<?php
require_once "../Models/conexion.php";
	

	$id=$_POST['id'];
   $estatus = 0;

	
	
	

	$sql = "UPDATE detalle_eventos SET
      estatus = '$estatus' WHERE id = '$id'";
    echo $resultado = mysqli_query($conection,$sql);

 ?>