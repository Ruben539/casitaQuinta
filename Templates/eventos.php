<?php

require_once('../Includes/header_admin.php');



?>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap-grid.min.css">

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
                        require_once('../Models/conexion.php');

                        if (empty($_REQUEST['id'])) {

                            $sql = mysqli_query($conection, "SELECT id,cedula,nombre FROM users  WHERE  estatus = 1 order by id desc limit 1");

                            //mysqli_close($conection);//con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php


                            $resultado = mysqli_num_rows($sql);

                            if ($resultado == 0) {
                                header("location: ../Templates/dashboard.php");
                            } else {
                                $option = '';
                                while ($data = mysqli_fetch_array($sql)) {

                                    $iduser     = $data['id'];
                                    $cedula     = $data['cedula'];
                                    $nombre     = $data['nombre'];
                                }
                            }
                        } else {

                            $sql = mysqli_query($conection, "SELECT id,cedula,nombre FROM users  WHERE id = '" . $_REQUEST['id'] . "' AND estatus = 1 ");

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
                                <div class="card-body pt-1 p-1">
                                    <ul class="list-group">

                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h1 class="mb-3 text-sm">Nombre del Cliente : <?= $nombre; ?></h1>
                                                <h1 class="mb-3 text-sm">Cedula del Cliente : <?= $cedula; ?></h1>

                                            </div>
                                        </li>
                                        <hr />
                                        <form action="../Controllers/CargarServiciosEvento.php" method="POST">
                                            <input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo $id; ?>">
                                            <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula; ?>">
                                            <input type="hidden" name="cliente" id="cliente" value="<?php echo $nombre; ?>">
                                            <label class="form-label">Servicio a Cargar :</label>
                                            <div class="input-group input-group-outline mb-">

                                                <?php
                                                require_once("../Models/conexion.php");

                                                $query_estudio = mysqli_query($conection, "SELECT * FROM servicios where  estatus = 1");

                                                //mysqli_close($conection); //con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php
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
                                            <div class="form-check form-check-info text-start ps-0">
                                                <input class="form-check-input" type="checkbox" value="" id="menu">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Agregar la fecha,Hora y menu del Evento.
                                                </label>
                                            </div>

                                            <div id="items">
                                                <div class="input-group input-group-outline mb-3" id="carcedula">
                                                    <label class="form-label">Fecha del Evento</label>
                                                    <input type="date" class="form-control" id="fecha_evento" name="fecha_evento">
                                                </div>

                                                <div class="input-group input-group-outline mb-3" id="carcedula">
                                                    <label class="form-label">Hora del Evento</label>
                                                    <input type="text" class="form-control" id="hora_evento" name="hora_evento">
                                                </div>

                                                <div class="input-group input-group-outline mb-3" id="carcedula">
                                                    <label class="form-label">Menu del Evento</label>
                                                    <input type="text" class="form-control" id="menu" name="menu">
                                                </div>

                                            </div>


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
        <div class="container-fluid py-3">
            <div class="row min-vh-80">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header p-1 position-relative mt-n4 mx-4 z-index-2">

                            <h2 class="text-capitalize ps-3 text-center">Casita Quinta</h2>
                            <div class="containerInfo">
                                <div class="containerImage">
                                    <img class="image" src="../assets/img/logoCasita.png" alt="logo">
                                </div>
                                <?php 
                               
                                $hoy = date('Y-m-d');
                               
                                $detalles =  mysqli_query($conection,"SELECT * FROM eventos 
                                WHERE  cliente_id =  '".$id."' AND created_at LIKE '%".$hoy."%' AND estatus = 1");
                                
                            

                                while($data = mysqli_fetch_array($detalles)){
                                    $ci           = $data['cedula'];
                                    $cliente      = $data['cliente'];
                                    $menu         = $data['menu'];
                                    $fecha_evento = $data['fecha_evento'];
                                    $hora_evento  = $data['hora_evento'];
                                }
                                
                                ?>
                               <?php if(empty($ci) && empty($cliente) && empty($menu) && empty($fecha_evento) && empty($hora_evento)){?>
                                <div class="containerTexto1"> 
                                    <p>Nombre : </p>
                                    <p>Fecha de Evento : </p>
                                </div>
                                <div class="containerTexto2">
                                    <p>Menu : </p>
                                    <p>Hora de Evento : </p>
                                </div>
                               <?php }else{?>
                                <div class="containerTexto1"> 
                                    <p>Nombre : <?= $cliente; ?></p>
                                    <p>Fecha de Evento : <?= $fecha_evento; ?></p>
                                </div>
                                <div class="containerTexto2">
                                    <p>Menu : <?= $menu; ?></p>
                                    <p>Hora de Evento : <?= $hora_evento; ?>.hs</p>
                                </div>
                               <?php }?>
                                
                            </div>


                        </div>

                        <div class="card-body">
                            <div class="form-check form-check-info text-start ps-0">
                                <div class="card-body pt-3 p-3">
                                    <table class="table text-center">
                                        <thead>
                                            <th>Nro</th>
                                            <th>Detalle</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Total</th>
                                            <th>Eliminar</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once("../Models/conexion.php");

                                            $query_evento = mysqli_query($conection, "SELECT  de.id,e.cedula,e.cliente,e.fecha_evento,e.hora_evento,e.menu,
                                            de.servicio,de.precio,de.cantidad,de.monto_total
                                            FROM eventos e INNER JOIN detalle_eventos de ON de.evento_id = e.id
                                            WHERE cliente_id =  '".$id."' AND created_at LIKE '%".$hoy."%' AND e.estatus = 1");

                                            $resultado = mysqli_num_rows($query_evento);
                                            $nro = 0;
                                            $total = 0;

                                            if ($resultado > 0) {
                                                while ($data = mysqli_fetch_array($query_evento)) {
                                                    $nro++;
                                                    $total += $data['monto_total']; 

                                            ?>
                                                    <tr class="tr">
                                                        <td><?php echo $nro ?></td>
                                                        <td><?php echo $data['servicio'] ?></td>
                                                        <td><?php echo number_format($data['precio'], 0, '.', '.') ?> .GS <a class="edit" href="../Views/editarPrecio.php?id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                                                        <td><?php echo $data['cantidad'] ?> <a class="edit" href="../Views/editarCantidad.php?id=<?php echo $data['id']; ?>"><i class="fas fa-edit"></i></a></td>
                                                        <td><?php echo number_format($data['monto_total'], 0, '.', '.') ?> .GS </td>
                                                        <td>
                                                            <button onclick="EliminarItems('<?php echo $data['id']; ?>')" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="total">
                                    <h5 >Total : <span><?php echo number_format($total, 0, '.', '.') ?> .GS</span></h5> 
                                    
                                </div>
                            </div>


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
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script src="../js/Items/items.js"></script>
    <script type="text/javascript">
        let menu = document.getElementById('menu');


        menu.checked = false;
        document.getElementById('items').style.display = 'none';


        menu.addEventListener('click', (e) => {
            if (e.target.checked) {

                document.getElementById('items').style.display = 'block';

            } else {
                menu.checked = false;
                document.getElementById('items').style.display = 'none';
            }
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#btnEditarPass').click(function() {
                /* Act on the event */
                EliminarItems();
            });
        });
    </script>
    <style>
        .containerImage {
            position: relative;
            /* border: 1px solid #f23;*/
            width: 400px;
            top: -50px;

        }

        .image {
            width: 300px;
            height: 210px;
        }

        .containerInfo {
            height: 155px;
            border-bottom: 2px solid #d63384;
        }

        .containerTexto1 {
            position: relative;
            width: 350px;
            /*border: 1px solid #f23;*/
            left: 420px;
            top: -200px;
        }

        .containerTexto2 {
            position: relative;
            width: 350px;
            /*border: 1px solid #f23;*/
            left: 780px;
            top: -285px;
        }

        .tr {
            border-bottom: 1px solid #d63384;
            cursor: pointer;
        }

        .tr:hover {
            background-color: #d63384;
            color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.25);

            .fas,
            .btn,
            .fa {
                color: #fff;
            }

        }

        .fas {
            color: #d63384;
        }

        .total{
            text-align: right;
        }

        .total span{
                       
            border-bottom: 3px solid #d63384;
        }
    </style>