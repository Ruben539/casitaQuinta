<?php

include_once('../Includes/header_admin.php');
?>
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
        left: 320px;
        top: -200px;
    }

    .containerTexto2 {
        position: relative;
        width: 350px;
        /*border: 1px solid #f23;*/
        left: 680px;
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

    .total {
        position: relative;
        left: 850px;
        border: 1px solid #d63384;
        width: 250px;
        margin-bottom: 5px;
    }

    .total h5 {
        margin-left: 5px;
    }

    .pago {
        position: relative;
        left: 850px;
        border: 1px solid #d63384;
        width: 250px;
        margin-bottom: 5px;
    }

    .pago h5 {
        margin-left: 5px;
    }

    .falta {
        position: relative;
        left: 850px;
        border: 1px solid #d63384;
        width: 250px;
    }

    .falta h5 {
        margin-left: 5px;
    }
</style>
<body class="g-sidenav-show  bg-gray-200">
  <?php include_once('../Includes/nav_admin.php'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Historial de Eventos</h6>
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
                <h5 class="text-white text-capitalize ps-3">Historial de Eventos por Clientes.</h5>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" id='formHistorial' name='formHistorial'>
                <div class="form-check form-check-info text-start ps-0">
                  <input class="form-check-input" type="checkbox" value="" id="cedula">
                  <label class="form-check-label" for="flexCheckDefault">
                    Cedula
                  </label>


                  <input class="form-check-input" type="checkbox" value="" id="nombre">
                  <label class="form-check-label" for="flexCheckDefault">
                    Nombre
                  </label>
                </div>

                <div class="input-group input-group-outline mb-3" id="carcedula">
                  <label class="form-label"></label>
                  <input type="text" class="form-control" placeholder="Ingrese la cedula del Cliente" id="inputCedula" name="inputCedula">
                </div>

                <div class="input-group input-group-outline mb-3" id="carnombre">
                  <label class="form-label"></label>
                  <input type="text" class="form-control" placeholder="Ingrese el nombre del Cliente" id="inptudNombre" name="inptudNombre">
                </div>
                <button class="btn btn-success" type="submit">Buscar</button>
              </form>

                <div class="col-md-12">
                  <div class="card h-100" id="tablaResultado">

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
  <?php include_once('../Includes/footer_admin.php') ?>
  <script src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script src="../js/Items/items.js"></script>
  <script type="text/javascript">
    let cedula = document.getElementById('cedula');
    let nombre = document.getElementById('nombre');

    cedula.checked = true;
    document.getElementById('inputCedula').style.display = 'block';
    document.getElementById('inptudNombre').style.display = 'none';

    cedula.addEventListener('click', (e) => {
      nombre.checked = false;
      if (e.target.checked) {
        
        document.getElementById('inptudNombre').style.display = 'none';
        document.getElementById('inputCedula').style.display = 'block';
        document.getElementById('inptudNombre').value = '';
      }
    })

    nombre.addEventListener('click', (e) => {
      cedula.checked = false;
      if (e.target.checked) {

        document.getElementById('inptudNombre').style.display = 'block';
        document.getElementById('inputCedula').style.display = 'none';
        document.getElementById('inputCedula').value = '';
      }
    })
  </script>

<script type="text/javascript">
  $('#formHistorial').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
      type: "POST",
      url: '../Data/BuscarEvento.php',
      data: form.serialize(),
      success: function(data) {
        $('#tablaResultado').html('');
        $('#tablaResultado').append(data);
      }

    });

  });
</script> 