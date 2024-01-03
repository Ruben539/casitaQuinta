<?php
session_start();
if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2){
    if (empty($_SESSION['active'])) {
    header('location: salir.php');
}

}else{
  header('location: salir.php');  
}

require_once('../Models/conexion.php');
require_once('../Includes/header_admin.php');

$id = $_REQUEST['id'];

?>

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
          <h6 class="font-weight-bolder mb-0">Pago Evento</h6>
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
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Evento del Cliente
              </div>
            </div>
            <div class="container-fluid position-relative overflow-hidden bg-secondary py-5">
            <img src="../assets/img/decoraciones/bg-flower.png" class="img-fluid position-absolute top-0" style="right: -15px; transform: rotate(270deg); opacity: 0.5;" alt="">
            <img src="../assets/img/decoraciones/bg-flower.png" class="img-fluid position-absolute" style="bottom: 10px; left: -15px; transform: rotate(90deg); opacity: 0.5;" alt="">
            <div class="container py-5 position-relative">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="border-white bg-primary" style="border-style: double;">
                            <img src="../assets/img/fondo.jpg" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <h1 class="display-5 text-white mb-4">Casita Quinta</h1>
                            <p class="text-white fs-5 mb-4">Acompañando los mejores momentos de tu vida.
                            </p>
                            <?php 
                            
                            require_once('../Models/conexion.php');

                            $evento = mysqli_query($conection,"SELECT * FROM eventos WHERE cliente_id = '".$id."'");

                            while($data = mysqli_fetch_array($evento)){ 
                            
                            ?>
                            <div class="tab-class bg-primary p-4">
                                <ul class="nav d-flex mb-4">
                                    <li class="nav-item">
                                        <a class="d-flex py-2 text-center bg-white"  href="../Views/agregarPago.php?id=<?php echo $data['id']; ?>">
                                            <span class="text-dark" style="width: 150px;">Registrar Pago</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="me-4">
                                                        <img src="../assets/img/decoraciones/bride.jpg" class="img-fluid w-100 img-border" alt="">
                                                    </div>
                                                    <div class="text-start my-auto">
                                                        <h4 class="text-white ">Evento : <?php echo $data['cliente']?></h4>
                                                        <h5 class="text-white mb-3">Fecha del Evento : <?php echo $data['fecha_evento']?></h5>
                                                        <h5 class="text-white mb-3">Menu del Evento : <?php echo $data['menu']?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                      
                        </div>
                    </div>
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
<script src="../js/Servicios/servicios.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
   
        $('#btnEditarPass').click(function() {
            /* Act on the event */
            EliminarServicio();
        });
    });
</script>
<!--Srcip para vaildar el boton de Usuarios-->
<script>
  function permisoAuto(){
Swal.fire({
  /*toast: true,*/
  position: 'center',
  title: 'Mensaje del Sistema !',
  text: 'No posee el permiso para eliminar un Usuario',
  footer:'Contactar con el administrador del sistema!',
  imageUrl: '../assets/img/logoCasita.png',
  imageWidth: 200,
  imageHeight: 200,
  imageAlt: 'Custom image',
  showConfirmButton: false,
  timer: 5000, 

})
}
</script>
<!------------------------------------------------------------------------------>
<script type="text/javascript">
    $(document).ready(function(){
    tablaUsuario = $("#tabla_Usuario").DataTable({
       "columnDefs":[{
        "target": 1,
        "data":null
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "1",
                "sLast":">>",
                "sNext":">",
                "sPrevious": "<"
             },
             "sProcessing":"Procesando...",
        }
    });

      
    
});
</script>

