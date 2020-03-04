<?php
require_once('../../templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Agregar empleado</h6>
                </div>
                <div class="card-body">
                    <input class="form-control mt-3" type="text" placeholder="Nombre del empleado">
                    <input class="form-control mt-3" type="password" placeholder="Clave">
                    <label for="exampleFormControlSelect1" class="mt-3">Estado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Activo</option>
                    <option>Inactivo</option>
                    </select>
                    <label for="exampleFormControlSelect1" class="mt-3">Tipo usuario</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Administrador general</option>
                    <option>Productos - Stock</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlFile1" class="mt-3">Imagen perfil</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <a href="#" class="btn btn-success btn-circle mt-3">
                    <i class="fas fa-check"></i>
                    <a href="#" class="btn btn-warning btn-circle mt-3 ml-3">
                    <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle mt-3 ml-3">
                    <i class="fas fa-trash"></i>
                     </a>
                    </a>

                </div>
        </div>
    </div>


    <div class="col-lg-3">
              <div class="card shadow mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/person_3.jpg" alt="google" width="100px" class="img-fluid rounded-circle"></div>
                <label for="nombre" class="mt-3 col-lg-12">Nombre:</label>
                <label for="nombre" class="mt-3 col-lg-12">Tipo usuario:</label>
                </div>
        </div>
        
        <div class="card shadow mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/person_3.jpg" alt="google" width="100px" class="img-fluid rounded-circle"></div>
                <label for="nombre" class="mt-3 col-lg-12">Nombre:</label>
                <label for="nombre" class="mt-3 col-lg-12">Tipo usuario:</label>
                </div>
        </div>

        <div class="card shadow mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/person_3.jpg" alt="google" width="100px" class="img-fluid rounded-circle"></div>
                <label for="nombre" class="mt-3 col-lg-12">Nombre:</label>
                <label for="nombre" class="mt-3 col-lg-12">Tipo usuario:</label>
                </div>
        </div>
        <nav aria-label="Page navigation example" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Seguiente</a>
                    </li>
                </ul>
            </nav>
    </div>
    
    <div class="col-lg-3">
              <div class="card shadow mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/person_3.jpg" alt="google" width="100px" class="img-fluid rounded-circle"></div>
                <label for="nombre" class="mt-3 col-lg-12">Nombre:</label>
                <label for="nombre" class="mt-3 col-lg-12">Tipo usuario:</label>
                </div>
        </div>
        
        <div class="card shadow mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/person_3.jpg" alt="google" width="100px" class="img-fluid rounded-circle"></div>
                <label for="nombre" class="mt-3 col-lg-12">Nombre:</label>
                <label for="nombre" class="mt-3 col-lg-12">Tipo usuario:</label>
                </div>
        </div>

        <div class="card shadow mb-4">
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/person_3.jpg" alt="google" width="100px" class="img-fluid rounded-circle"></div>
                <label for="nombre" class="mt-3 col-lg-12">Nombre:</label>
                <label for="nombre" class="mt-3 col-lg-12">Tipo usuario:</label>
                </div>
        </div>
    </div>
</div>
<?php
Page::footerTemplate();
?>