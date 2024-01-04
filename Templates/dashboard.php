<?php

include_once('../Includes/header_admin.php');
?>
<link rel="stylesheet" type="text/css" href="../css/fullcalendar.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">

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
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Evento del Dia</p>
                <h4 class="mb-0" id="idPacientesDiarios">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-info text-sm font-weight-bolder">El evento del dia actual</span></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">groups</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Eventos del Mes</p>
                <h4 class="mb-0" id="idPacientesMensuales">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Todos los eventos del mes</span></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">payments</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Costo del evento del Dia</p>
                <h4 class="mb-0" id="idMontoDiario">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-info text-sm font-weight-bolder">Total del costo del Evento</span></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">payments</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Monto de los eventos del Mes</p>
                <h4 class="mb-0" id="idMontoMensual">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Monto total de todos los eventos</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">

        </div>


      </div>

      <div class="col-12">
        <div class="card">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h5 class="text-white text-capitalize ps-3 text-center">Calendario de Eventos</h5>
            </div>
          </div>
          <?php
          require_once('../Models/conexion.php');
          $resulEventos =  mysqli_query($conection, "SELECT id,evento,fecha_evento,color_evento 
            FROM lista_eventos WHERE estatus = 1");

          ?>
          <div class="card-body px-0 pb-2">
            <div id="calendar"></div>
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
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/moment.min.js"></script>
  <script src="../js/fullcalendar.min.js"></script>
  <script src="../locales/es.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#calendar").fullCalendar({
        header: {
          left: "prev,next today",
          center: "title",
          right: "month,agendaWeek,agendaDay"
        },

        locale: 'es',

        defaultView: "month",
        navLinks: true,
        editable: true,
        eventLimit: true,
        selectable: true,
        selectHelper: false,



        events: [
          <?php
          while ($dataEvento = mysqli_fetch_array($resulEventos)) { ?> {
              _id: '<?php echo $dataEvento['id']; ?>',
              title: '<?php echo $dataEvento['evento']; ?>',
              start: '<?php echo $dataEvento['fecha_evento']; ?>',
              end: '<?php echo $dataEvento['fecha_evento']; ?>',
              color: '<?php echo $dataEvento['color_evento']; ?>'
            },
          <?php } ?>
        ],


        //Moviendo Evento Drag - Drop
        eventDrop: function(event, delta) {
          var idEvento = event._id;
          var start = (event.start.format('DD-MM-YYYY'));
          var end = (event.end.format("DD-MM-YYYY"));

          $.ajax({
            url: 'drag_drop_evento.php',
            data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
            type: "POST",
            success: function(response) {
              // $("#respuesta").html(response);
            }
          });
        },


      });


      //Oculta mensajes de Notificacion
      setTimeout(function() {
        $(".alert").slideUp(300);
      }, 3000);


    });
  </script>