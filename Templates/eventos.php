<?php

include_once('../Includes/header_admin.php');
require_once('../Models/conexion.php');
?>
<link rel="stylesheet" href="../node_modules/chosen-js/chosen.css" type="text/css" />
<script src="../node_modules/chosen-js/chosen.jquery.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../node_modules/chosen-js/chosen.jquery.js"></script>
<script>
    $(document).ready(function() {
        $(".chosen").chosen();
    });
</script>

<body class="g-sidenav-show  bg-gray-200">
    <?php include_once('../Includes/nav_admin.php'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Evento</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Cargar Evento</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">

                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">

                        <li class="nav-item d-flex align-items-center">
                            <a href="../Templates/salir.php" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Cerrar Sesión</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid py-4">
            <div class="row min-vh-80">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h5 class="text-white text-capitalize ps-3 text-center">Registro de Evento</h5>
                            </div>
                        </div>
                        <?php

                        if (empty($_REQUEST['id'])) {

                            $sql = mysqli_query($conection, "SELECT * FROM users  WHERE  estatus = 1 order by id desc limit 1");

                            //mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php


                            $resultado = mysqli_num_rows($sql);

                            if ($resultado == 0) {
                                header("location: ../Templates/dashboard.php");
                            } else {
                                $option = '';
                                while ($data = mysqli_fetch_array($sql)) {

                                    $iduser     = $data['id'];
                                    $cedula     = $data['cedula'];
                                }
                            }
                        } else {

                            $sql = mysqli_query($conection, "SELECT * FROM users  WHERE id = '" . $_REQUEST['id'] . "' AND estatus = 1 ");

                            //mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php


                            $resultado = mysqli_num_rows($sql);

                            if ($resultado == 0) {
                                header("location: ../Templates/dashboard.php");
                            } else {
                                $option = '';
                                while ($data = mysqli_fetch_array($sql)) {

                                    $id         = $data['id'];
                                    $cedula     = $data['cedula'];
                                    $nombre     = $data['nombre'];
                                }
                            }
                        }
                        ?>
                        <div class="card-body">
                            <div class="form-check form-check-info text-start ps-0">
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">

                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h1 class="mb-3 text-sm">Nombre del Cliente : <?= $nombre; ?></h1>
                                                <h1 class="mb-3 text-sm">Cedula del Cliente : <?= $cedula; ?></h1>

                                            </div>
                                        </li>
                                        <hr />
                                        <form action="" method="post">
                                            <input type="hidden" name="cliente_id" id="cliente_id" value="<?= $id; ?>">
                                            <input type="hidden" name="cedula" id="cedula" value="<?= $cedula; ?>">
                                            <input type="hidden" name="cliente" id="cliente" value="<?= $nombre; ?>">
                                            <label class="form-label">Servicio a Cargar :</label>
                                            <div class="input-group input-group-outline mb-">

                                                <?php
                                                include "../Models/conexion.php";

                                                $query_estudio = mysqli_query($conection, "SELECT * FROM servicios where  estatus = 1");

                                                mysqli_close($conection); //con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php
                                                $resultado = mysqli_num_rows($query_estudio);

                                                ?>
                                                <select name="servicio_id" id="servicio_id" class="chosen form-control" data-placeholder="Elige uno servicio">
                                                    <?php

                                                    if ($resultado > 0) {
                                                        while ($rol = mysqli_fetch_array($query_estudio)) {

                                                    ?>
                                                            <option value="<?php echo $rol["id"]; ?>"><?php echo
                                                                                                        $rol["descripcion"] ?></option>

                                                    <?php


                                                        }
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Cantidad</label>
                                                <input type="text" class="form-control" name="cantidad" id="cantidad" required>
                                            </div>
                                            <hr />


                                            <div class="input-group input-group-outline mb-3">
                                                <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cargar Servicio <i class="material-icons opacity-10">liquor</i></button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row min-vh-80">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-white shadow-primary border-radius-lg pt-4 pb-3">
                                <h5 class="text-primary text-capitalize ps-3 text-center"></h5>
                            </div>
                        </div>
                      
                        <div class="card-body">
                            <div class="form-check form-check-info text-start ps-0">
                                <div class="card-body pt-4 p-3">
              
                                </div>
                            </div>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            Inicio de Diseño <i class="fa fa-heart"></i> en colaboración
                            <a href="#" class="font-weight-bold" target="_blank">RubenFl</a>
                            Website in designe
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        </div>
    </main>
    <?php include_once('../Includes/footer_admin.php'); ?>