<?php
class Page
{
  public static function headerTemplate($title)
  {
    print('
        <!DOCTYPE html>
        <html lang="es">
        
        <head>
        
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
        
          <title>Home safe - Dashboard</title>
        
          <!-- Custom fonts for this template-->
          <link href="../../../public/css/admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
          <!-- Custom styles for this template-->
          <link href="../../../public/css/admin/sb-admin-2.css" rel="stylesheet">
        
        </head>
        
        <body id="page-top">
        
          <!-- Page Wrapper -->
          <div id="wrapper">
        
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3"><img src="../../../public/images/logo.png" alt="google" width="200px" class="img-fluid"></div>
              </a>
        
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
        
              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                <a class="nav-link" href="index.php">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Tablero</span></a>
              </li>
        
              <!-- Divider -->
              <hr class="sidebar-divider">
        
              <!-- Heading -->
              <div class="sidebar-heading">
                Interfaz
              </div>
        
              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                  aria-controls="collapseTwo">
                  <i class="fa fa-database"></i>
                  <span>Administrar</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Administracion</h6>
                    <a class="collapse-item" href="stock.php">Stock</a>
                    <a class="collapse-item" href="productos.php">Productos</a>
                    <a class="collapse-item" href="categorias.php">Categorias</a>
                    <a class="collapse-item" href="marcas.php">Marcas</a>
                    <a class="collapse-item" href="cupones.php">Cupones</a>
                    <a class="collapse-item" href="noticias.php">Noticias</a>
                  </div>
                </div>
              </li>
        
              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                  aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="fa fa-user"></i>
                  <span>Usuarios</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Administracion</h6>
                    <a class="collapse-item" href="clientes.php">Clientes</a>
                    <a class="collapse-item" href="empleados.php">Empleados</a>
                  </div>
                </div>
              </li>
              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">
        
              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>
        
            </ul>
            <!-- End of Sidebar -->
        
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
        
              <!-- Main Content -->
              <div id="content">
        
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>
        
                  <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                        aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cartagena</span>
                        <img class="img-profile rounded-circle" src="../../../public/images/img_profile.jpg">
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Perfil
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                          Configuración
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Cerrar Sesión
                        </a>
                      </div>
                    </li>
        
                  </ul>
        
                </nav>
                <!-- End of Topbar -->
              </div>
              <!-- End of Main Content -->
        
        ');
  }
  public function footerTemplate()
  {
    print('
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy;Home safe 2019</span>
                    </div>
                </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        
            </div>
            <!-- End of Page Wrapper -->
        
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleciona "Cerrar Sesión" si desea salir de la aplicación.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Cerrar Sesión</a>
                </div>
                </div>
            </div>
            </div>
        
            <!-- Bootstrap core JavaScript-->
            <script src="../../../public/jquery/jquery.min.js"></script>
            <script src="../../../public/bootstrap/js/bootstrap.bundle.min.js"></script>
        
            <!-- Core plugin JavaScript-->
            <script src="../../../jquery/jquery-easing/jquery.easing.min.js"></script>
        
            <!-- Custom scripts for all pages-->
            <script src="../../../public/js/admin/sb-admin-2.min.js"></script>
        
            <!-- Page level custom scripts -->
            <script src="../../../js/admin/demo/chart-area-demo.js"></script>
            <script src="../../../js/admin/demo/chart-pie-demo.js"></script>
        
        </body>
        
        </html>
        ');
  }
}
