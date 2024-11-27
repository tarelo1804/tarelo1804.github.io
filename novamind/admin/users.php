<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!--Iconos Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <!--ICONO-->
    <link rel="icon" href="../img/LOGO NOVAMIND-ROBOT.ico">

    <link rel="stylesheet" href="../css/admin/usuario.css">

</head>
<body class="d-flex">
    <!--SIDEBAR-->
    <aside class="d-flex">
        <div class="text-white p-3 vh-100 w-100" id="aside" >
            <h2 class="h3 text-center" style="font-weight:bold;">NOVAMIND</h2>
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
                <h4>Usuarios</h4>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#agregarUsuario">
                    <i class="bi bi-person-fill-add"></i>
                    Agregar
                </button>
            </div>
            <!--TITLE SECTION-->
            <!--DATA-->
            <br>
            <div class="row p-3" style="text-align: center;">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ap Paterno</th>
                        <th scope="col">Ap Materno</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Recibir oferta</th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="text-align: center;">1</th>
                        <td>José</td>
                        <td>Gómez</td>
                        <td>Lozano</td>
                        <td>auroplais69</td>
                        <td>josegl@gmail.com</td>
                        <td>1234</td>
                        <td>1962/01/14</td>
                        <td>1</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                <i class="bi bi-trash3-fill"></i>
                              </button>
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarUsuario">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">2</th>
                        <td>Diego</td>
                        <td>Molina</td>
                        <td>Garcia</td>
                        <td>masterpro100</td>
                        <td>diegomg@outlook.com</td>
                        <td>123</td>
                        <td>2014/05/03</td>
                        <td>0</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                <i class="bi bi-trash3-fill"></i>
                              </button>
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarUsuario">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" style="text-align: center;">3</th>
                        <td>María</td>
                        <td>González</td>
                        <td>López</td>
                        <td>sugarmami45</td>
                        <td>mariagl@outlook.com</td>
                        <td>456</td>
                        <td>1979/02/18</td>
                        <td>0</td>
                        <td>
                            <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                <i class="bi bi-trash3-fill"></i>
                              </button>
                            <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarUsuario">
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

     <!-- Modal Editar Usuario -->
     <div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" class="needs-validation" novalidate id="form">
                <div class="modal-body">
                    <div class="row mb-2 p-2">
                        <div class="col-4">
                            <label for="">Nombre</label>
                            <input required type="text" class="form-control" placeholder="Inserta el nombre">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Nombre incorrecto</div>
                        </div>
                        <div class="col-4">
                            <label for="">Apellido Paterno</label>
                            <input  required type="text" class="form-control" placeholder="Inserta el apellido paterno">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Apellido paterno incorrecto</div>
                        </div>
                        <div class="col-4">
                            <label for="">Apellido Materno</label>
                            <input  required type="text" class="form-control" placeholder="Inserta el apellido materno">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Apellido materno incorrecto</div>
                        </div>
                        
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-12">
                            <label for="">Nombre de usuario</label>
                            <input required type="text" class="form-control" placeholder="Inserta el nombre">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Nombre de usuario incorrecto</div>
                        </div>
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-4">
                            <label for="">Correo Electrónico</label>
                            <input required min="18" type="email" class="form-control" placeholder="Inserta el correo electrónico">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Correo electrónico incorrecto</div>
                        </div>
                        <div class="col-4">
                            <label for="">Contraseña</label>
                            <input required type="password" class="form-control" placeholder="Inserta la contraseña">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Contraseña incorrecta</div>
                        </div>
                        <div class="col-4">
                            <label for="">Confirmar contraseña</label>
                            <input required type="password" class="form-control" placeholder="Confirma la contraseña">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Contraseña incorrecta</div>
                        </div>
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-12">
                            <label for="">Fecha de nacimiento</label>
                            <input required type="date" class="form-control">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Fecha de nacimiento incorrecta</div>
                        </div>
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-12">
                            <label for="">
                                <input type="checkbox" value="sí">
                                Recibir ofertas especiales y consejos de aprendizaje
                            </label>
                        </div>
                    </div>
                    <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                        Favor de llenar todos los campos
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary " id="btnGuardar" aria-hidden="true">Guardar</button>
                </div>
            </form>
        </div>
        </div>
    </div>


    <!-- Modal Agregar Usuario -->
    <div class="modal fade" id="agregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" class="needs-validation" novalidate id="formAgregar">
                <div class="modal-body">
                    <div class="row mb-2 p-2">
                        <div class="col-4">
                            <label for="">Nombre</label>
                            <input required type="text" class="form-control" placeholder="Inserta el nombre">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Nombre incorrecto</div>
                        </div>
                        <div class="col-4">
                            <label for="">Apellido Paterno</label>
                            <input  required type="text" class="form-control" placeholder="Inserta el apellido paterno">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Apellido paterno incorrecto</div>
                        </div>
                        <div class="col-4">
                            <label for="">Apellido Materno</label>
                            <input  required type="text" class="form-control" placeholder="Inserta el apellido materno">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Apellido materno incorrecto</div>
                        </div>
                        
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-12">
                            <label for="">Nombre de usuario</label>
                            <input required type="text" class="form-control" placeholder="Inserta el nombre">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Nombre de usuario incorrecto</div>
                        </div>
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-4">
                            <label for="">Correo Electrónico</label>
                            <input required min="18" type="email" class="form-control" placeholder="Inserta el correo electrónico">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Correo electrónico incorrecto</div>
                        </div>
                        <div class="col-4">
                            <label for="">Contraseña</label>
                            <input required type="password" class="form-control" placeholder="Inserta la contraseña">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Contraseña incorrecta</div>
                        </div>
                        <div class="col-4">
                            <label for="">Confirmar contraseña</label>
                            <input required type="password" class="form-control" placeholder="Confirma la contraseña">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Contraseña incorrecta</div>
                        </div>
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-12">
                            <label for="">Fecha de Nacimiento</label>
                            <input required type="date" class="form-control">
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Fecha de nacimiento incorrecta</div>
                        </div>
                    </div>
                    <div class="row mb-2 p-2">
                        <div class="col-12">
                            <label for="">
                                <input type="checkbox" value="sí">
                                Recibir ofertas especiales y consejos de aprendizaje
                            </label>
                        </div>
                    </div>
                    <div class="alert alert-danger mt-4 d-none" id="alerta" role="alert">
                        Favor de llenar todos los campos
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnGuardarAgregar" aria-hidden="true">Guardar</button>
                </div>
            </form>
        </div>
        </div>
    </div>

  

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
   
    <script src="../js/user.js"></script>
</body>
</html>