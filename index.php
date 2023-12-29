<?php

require_once('Controllers/inicioControllers.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Casita Quinta
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="bg-gray-200">

  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/img/fondo.jpg'); width: 100%; height: 100hv; background-size: cover;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-white shadow-primary border-radius-lg py-3 pe-1">
                  <div class="row mt-3">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                        <img class="image" src="assets/img/logoCasita.png" alt="">
                    </h4>
                   
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form  class="text-start" method="POST">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                  </div>
 
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Ingresar</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                  
                  </p>
                  <?php if($alert != ""){  ?>
                    <div class="btn btn-outline-primary btn-lg w-100 mt-4 mb-0">
                    <p style="color:#fff;" >
                      <?php echo $alert; ?>
                    </p>
                  </div>
                  <?php } ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>
<style>
    .image{
        width: 350px;
        height: 200px;
        image-resolution: 300dpi;
        
    }
</style>