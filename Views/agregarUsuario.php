<?php
include_once('../Controllers/grabarUsuarioControllers.php');
include_once('../Includes/header_admin.php');
?>

<body class="g-sidenav-show  bg-gray-200">
  <?php include_once('../Includes/nav_admin.php'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pagina</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Usuario</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Añadir un nuevo Usuario</h6>
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
<!---------------- Formulario de Registro de Usuario------------------>
<div class="container-fluid py-4">
        <div class="row min-vh-80">
          <div class="col-12">
            <div class="card h-100">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h5 class="text-white text-capitalize ps-3">Registrar un nuevo Usuario</h5>
                </div>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="">
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Cedula</label>
                    <input type="text" class="form-control" name="cedula" id="cedula" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                  </div>
                                    
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control"  name="usuario" id="usuario" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control"  name="password" id="password" required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <?php
                      include "../Models/conexion.php";

                      $query_roles = mysqli_query($conection, "SELECT * FROM roles where id > 1 AND estatus = 1");

                      mysqli_close($conection); //con esto cerramos la conexion a la base de datos una vez conectado arriba con el conexion.php
                      $resultado = mysqli_num_rows($query_roles);

                      ?>
                      <select name="rol" id="rol" class="form-control" aria-placeholder="Puesto">
                        <option value="<?php echo $rol?>"></option>
                          <?php

                          if ($resultado > 0) {
                              while ($rol = mysqli_fetch_array($query_roles)) {

                          ?>
                                  <option value="<?php echo $rol["id"]; ?>"><?php echo
                                          $rol["descripcion"] ?></option>

                          <?php


                              }
                          }

                          ?>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Registrar</button>
                  </div>
                  <br>
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
<!---------------- Formulario de Registro de Usuario------------------>
    
        
    
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