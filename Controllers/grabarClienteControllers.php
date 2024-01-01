<?php
session_start();

require_once("../Models/conexion.php");
$alert = '';

//print_r($_POST);
//print_r($_FILES);
//exit;
if (!empty($_POST)) {
    if (
        empty($_POST['cedula']) || empty($_POST['nombre']) ) {

        $alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';
    } else {


        $cedula   = $_POST['cedula'];
        $nombre   = $_POST['nombre'];
       
   

        $query = mysqli_query($conection, "SELECT * FROM users
             WHERE cedula = '$cedula'");

        $resultado = mysqli_fetch_array($query);

        if ($resultado > 0) {
            $alert = '<p class = "msg_error">La cedula  ya existe</p>';
        } else {

            $query_insert = mysqli_query($conection, "INSERT INTO users(cedula,nombre)
                VALUES('$cedula','$nombre')");

            if ($query_insert) {
                header('Location: ../Templates/eventos.php');
            } else {

                 $alert = '<p class = "msg_error">Ocurrio un Error</p>';
            }
        }
    }
}
