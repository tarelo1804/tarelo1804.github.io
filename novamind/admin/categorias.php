<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!--ICONO-->
    <link rel="icon" href="../img/LOGO NOVAMIND-ROBOT.ico">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="../css/admin/categoria.css">

</head>
<body class="d-flex">
    <!--SIDEBAR-->
    <aside class="d-flex">
        <div class="text-white p-3 vh-100 w-100" id="aside" >
            <h2 class="h3 text-center" style="font-weight: bold;">NOVAMIND</h2>
            <nav>   
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="../admin/admin.php" class="nav-link text-white">
                        <i class="bi bi-house-fill"></i>&nbsp;&nbsp;&nbsp;Inicio
                    </a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/users.php" class="nav-link text-white">
                          <i class="bi bi-person-fill"></i>&nbsp;&nbsp;&nbsp;Usuarios
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/cursos.php" class="nav-link text-white">
                            <i class="bi bi-laptop"></i>&nbsp;&nbsp;&nbsp;Cursos
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/lecciones.php" class="nav-link text-white">
                            <i class="bi bi-list-task"></i>&nbsp;&nbsp;&nbsp;Lecciones
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/categorias.php" class="nav-link text-white">
                            <i class="bi bi-bookmark-fill"></i>&nbsp;&nbsp;&nbsp;Categorías
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/instructores.php" class="nav-link text-white">
                            <i class="bi bi-person-vcard-fill"></i>&nbsp;&nbsp;&nbsp;Instructores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../admin/pagos.php" class="nav-link text-white">
                            <i class="bi bi-currency-dollar"></i>&nbsp;&nbsp;&nbsp;Pagos
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--END SIDEBAR-->
    <!--MAIN CONTENT-->
    <main class="flex-grow-1 " >
        <header class="pt-3">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a href="" class="navbar-brand">Mi Dashboard</a>
                    
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="navbar-item mx-4">
                                <button type="button" class="btn btn-ligth position-relative">
                                    <i class="bi bi-bell-fill"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      99+
                                      <span class="visually-hidden">unread messages</span>
                                    </span>
                                  </button>
                                
                            </li>
                            <li class="navbar-item mx-1">
                                <img style="border-radius: 50%; border: 3px solid rgb(0, 90, 0); width:50px; 
                                height: 50px;" src="../img/admin.jpg" alt="">
                            </li>
                            <li class="navbar-item droptown">
                                <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" 
                                data-bs-toggle="dropdown" aria-expanded="false">Administrador</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i class="bi bi-person-fill"></i> 
                                            Perfil</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">

                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i class="bi bi-box-arrow-left"></i>
                                            Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="container mt-4 p-4">
            
            <!--TITLE SECTION-->
            <div class="d-flex justify-content-between">
                <h4>Categorías</h4>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-fill-add"></i>
                    Agregar
                </button>
            </div>
            <!--TITLE SECTION-->
            <!--DATA-->
            <div class="row p-3" style="text-align: center;">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categoría</th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="text-align: center;">1</th>
                        <td>Fundamentos de la tecnología</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminarCategoria" >
                                <i class="bi bi-trash3-fill"></i>
                            </button>   
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCategoria" >
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">2</th>
                        <td>Productividad digital</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminarCategoria">
                                <i class="bi bi-trash3-fill"></i>
                            </button>   
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCategoria" >
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">3</th>
                        <td>Ciberseguridad</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminarCategoria">
                                <i class="bi bi-trash3-fill"></i>
                            </button>   
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCategoria">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">4</th>
                        <td>Redes</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminarCategoria">
                                <i class="bi bi-trash3-fill"></i>
                            </button>   
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCategoria">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">5</th>
                        <td>Programación</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminarCategoria">
                                <i class="bi bi-trash3-fill"></i>
                            </button>   
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCategoria">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">6</th>
                        <td>Inteligencia artificial</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminarCategoria">
                                <i class="bi bi-trash3-fill"></i>
                            </button>   
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCategoria">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                    </tbody>
                  </table> 
            </div>
            <!--END DATA-->

        </section>
    </main>
    <!--END MAIN CONTENT-->

    <!-- Modal Editar -->
    <div class="modal fade modal-xl" id="editarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Categoría</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" class="needs-validation" novalidate id="form">
                <div class="modal-body">
                    <div class="row mb-2 p-2">
                        <div class="col-4">
                            <label for="">Nombre de la categoría</label>
                            <input required type="text" class="form-control" placeholder="Inserta el nombre de la categoría">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Nombre incorrecto</div>
                        </div>
                    </div>
                    <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                        Favor de llenar todos los campos
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Categoría</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" class="needs-validation" novalidate id="formCategoria">
                <div class="modal-body">
                    <div class="row mb-2 p-2">
                        <div class="col-4">
                            <label for="">Nombre de la categoría</label>
                            <input required type="text" class="form-control" placeholder="Inserta el nombre de la categoría">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Nombre incorrecto</div>
                        </div>
                    </div>
                    <div class="alert alert-danger mt-4 d-none" id="alertaCategoria" role="alert">
                        Favor de llenar todos los campos
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnGuardarCategoria" >Guardar</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <script src="../js/categoria.js"></script>

</body>
</html>