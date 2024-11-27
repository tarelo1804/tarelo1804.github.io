<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!--ICONO-->
    <link rel="icon" href="../img/LOGO NOVAMIND-ROBOT.ico">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="../css/admin/cursos.css">

</head>
<body class="d-flex">
    <!--SIDEBAR-->
    <aside class="d-flex">
        <div class="text-white p-3 w-100" id="aside" >
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
                                <img style="border-radius: 50%; border:3px solid rgb(0, 90, 0); width:50px; 
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
                <h4>Cursos</h4>
                <a class="btn btn-dark" href="../cursos/cursos-add.php">
                    <i class="bi bi-plus"></i>
                    Agregar
                </a>
            </div>
            <!--TITLE SECTION-->
            <!--DATA-->
            <div class="row px-4 mt-4 d-flex flex-wrap">
                <!-- Tarjeta 1 -->
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card" style="height: 400px;">
                        <img src="../img/admin/pc1.webp" class="card-img-top" alt="Introducción a la computadora" style="height: 200px;">
                        <div class="card-body">
                            <h5 id="compu" class="card-title">Introducción a la computadora</h5>
                            <p class="card-text">Aprende los fundamentos de una computadora y componentes.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <div class="d-flex ms-auto">
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCurso">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card" style="height: 400px;">
                        <img src="../img/admin/python.webp" class="card-img-top" alt="Programación básica" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Programación básica</h5>
                            <p class="card-text">Curso de introducción a la programación con el lenguaje de Python.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <div class="d-flex ms-auto">
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCurso">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card" style="height: 400px;">
                        <img src="../img/admin/redes1.webp" class="card-img-top" alt="Redes de computadoras" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Redes de computadoras</h5>
                            <p class="card-text">Aprende los fundamentos de las redes de computadoras y su configuración.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <div class="d-flex ms-auto">
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCurso">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 4 -->
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card" style="height: 400px;">
                        <img src="../img/admin/ia1.webp" class="card-img-top" alt="Introducción a la IA" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Introducción a la IA</h5>
                            <p class="card-text">Curso básico para entender los principios de la inteligencia artificial.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <div class="d-flex ms-auto">
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCurso">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 5 -->
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card" style="height: 400px;">
                        <img src="../img/admin/security1.webp" class="card-img-top" alt="Seguridad en Internet" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Seguridad en Internet</h5>
                            <p class="card-text">Curso para aprender sobre seguridad y cómo proteger tu información en línea.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <div class="d-flex ms-auto">
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarCurso">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--END DATA-->

        </section>
    </main>
    <!--END MAIN CONTENT-->

    <!-- Modal Editar -->
<div class="modal fade" id="editarCurso" tabindex="-1" aria-labelledby="editarCursoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarCursoLabel">Editar Curso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Tu formulario aquí -->
          <form action="" class="needs-validation" novalidate id="form">
            <div class="row p-4">
              <div class="col-4">
                <label for="">Nombre</label>
                <input required min="18" type="text" class="form-control" placeholder="Inserta el nombre del curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Nombre incorrecto</div>
              </div>
              <div class="col-4">
                <label for="">Descripción</label>
                <input required type="text" class="form-control" placeholder="Inserta la descripción">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Descripción incorrecta</div>
              </div>
              <div class="col-4">
                <label for="">Imagen</label>
                <input required type="file" class="form-control">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione una imagen</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-6">
                <label for="">Nivel</label>
                <select required class="form-control">
                  <option value="" disabled selected>Selecciona el nivel</option>
                  <option value="1">Basico</option>
                  <option value="2">Intermedio</option>
                  <option value="3">Avanzado</option>
                </select>
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione el nivel</div>
              </div>
              <div class="col-6">
                <label for="">Estado</label>
                <select required class="form-control">
                  <option value="" disabled selected>Selecciona el estado</option>
                  <option value="activo">Activo</option>
                  <option value="inactivo">Inactivo</option>
                </select>
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione el estado</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-6">
                <label for="">Duración(horas)</label>
                <input required type="number" class="form-control" placeholder="Inserta la duración del curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Duración incorrecta</div>
              </div>
              <div class="col-6">
                <label for="">Categoría</label>
                <select required class="form-control">
                  <option value="" disabled selected>Selecciona la categoría</option>
                  <option value="1">Fundamentos de la tecnología</option>
                  <option value="2">Productividad digital</option>
                  <option value="3">Ciberseguridad</option>
                  <option value="4">Redes</option>
                  <option value="5">Programación</option>
                  <option value="6">Inteligencia artificial</option>
                </select>
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione la categoría</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-12">
                <label for="">Nombre del instructor</label>
                <input required type="text" class="form-control" placeholder="Inserta el nombre del instrutor que impartirá el curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Nombre incorrecto</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-6">
                <label for="">Fecha de inicio</label>
                <input required type="date" class="form-control">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Fecha incorrecta</div>
              </div>
              <div class="col-6">
                <label for="">Costo</label>
                <input required type="number" class="form-control" placeholder="Inserta el costo del curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Costo incorrecto</div>
              </div>
              <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                Favor de llenar todos los campos
              </div>
              <div class="d-flex justify-content-end p-4">
                <button type="submit" class="btn" id="btnGuardar">
                  <i class="bi bi-floppy-fill"></i>
                  Guardar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
   
   <script src="../js/curso.js" defer></script>
</body>
</html>