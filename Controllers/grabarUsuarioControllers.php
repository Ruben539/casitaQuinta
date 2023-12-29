<?php
session_start();

require_once("../Models/conexion.php");
$alert = '';

//print_r($_POST);
//print_r($_FILES);
//exit;
if (!empty($_POST)) {
    if (
        empty($_POST['cedula']) || empty($_POST['nombre']) || empty($_POST['usuario']) || empty($_POST['password'])
        || empty($_POST['rol'])
    ) {

        $alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';
    } else {


        $cedula   = $_POST['cedula'];
        $nombre   = $_POST['nombre'];
        $usuario  = $_POST['usuario'];
        $pass     = md5($_POST['password']);
        $rol      = $_POST['rol'];
   

        $query = mysqli_query($conection, "SELECT * FROM users
             WHERE cedula = '$cedula'   OR usuario = '$usuario'");

        $resultado = mysqli_fetch_array($query);

        if ($resultado > 0) {
            $alert = '<p class = "msg_error">La cedula  o el usuario ya existen</p>';
        } else {

            $query_insert = mysqli_query($conection, "INSERT INTO users(cedula,nombre,usuario,pass,rol)
                VALUES('$cedula','$nombre','$usuario','$pass','$rol')");

            if ($query_insert) {
                //    if ($nombrefoto != '') {
                //         move_uploaded_file($url_temp, $scr);
                //     }

                 $alert = '<p class = "msg_success">Grabado con exito</p>';
            } else {

                 $alert = '<p class = "msg_error">Ocurrio un Error</p>';
            }
        }
    }
}
