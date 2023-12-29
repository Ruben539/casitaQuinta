<?php
session_start();

require_once("../Models/conexion.php");
$alert = '';

//print_r($_POST);
//print_r($_FILES);
//exit;
if (!empty($_POST)) {
    if (empty($_POST['descripcion']) || empty($_POST['precio']) ) {

        $alert = '<p class = "msg_error">Debe llenar Todos los Campos</p>';

        }else{

            
            $descripcion   = $_POST['descripcion'];
            $costo         = $_POST['precio'];
            

       
            $query_insert = mysqli_query($conection,"INSERT INTO servicios(descripcion,precio)
                VALUES('$descripcion','$costo')");

            if ($query_insert ) {

                
            $alert = '<p class = "msg_success">Grabado con exito</p>';

            }else{
              
              $alert = '<p class = "msg_error">Ocurrio un Error</p>';
         }

       }
    }


?>