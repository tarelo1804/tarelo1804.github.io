<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!--ICONO-->
    <link rel="icon" href="../img/LOGO NOVAMIND-ROBOT.ico">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <!-- SweetAlert2 CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="../css/admin/lecciones.css">

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
                <h4>Lecciones</h4>
                <a class="btn btn-dark" href="../lecciones/lecciones-add.php">
                    <i class="bi bi-plus"></i>
                    Agregar
                </a>
            </div>
            <!--TITLE SECTION-->
            <!--DATA-->
            <div class="row px-4 mt-4">
                <div class="col-3 mb-4">
                    <div class="card" style="height:450px">
                        <img src="../img/admin/computadora.webp" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">¿Qué es una computadora?</h5>
                            <p class="card-text">Descubre qué es una computadora, cómo funciona y para qué sirve.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <!-- Botón Ver alineado a la izquierda -->
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <!-- Botones Eliminar y Editar alineados a la derecha -->
                                <div>
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarLeccion">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-3 mb-4">
                    <div class="card" style="height:450px">
                        <img src="../img/admin/programmer.webp" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Primeros pasos en programación: variables y operadores.</h5>
                            <p class="card-text">Aprende qué son las variables, los operadores y cómo se utilizan para crear programas básicos.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <!-- Botón Ver alineado a la izquierda -->
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <!-- Botones Eliminar y Editar alineados a la derecha -->
                                <div>
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarLeccion" >
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-3 mb-4">
                    <div class="card" style="height: 450px;">
                        <img src="../img/admin/cablered.webp" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Configurando una red doméstica.</h5>
                            <p class="card-text">Descubre cómo configurar tu propia red en casa, conectando computadoras, impresoras y otros dispositivos.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <!-- Botón Ver alineado a la izquierda -->
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <!-- Botones Eliminar y Editar alineados a la derecha -->
                                <div>
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarLeccion" >
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-3 mb-4">
                    <div class="card" style="height:450px">
                        <img src="../img/admin/chatgpt.webp" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Chatbots: ¿cómo funcionan?</h5>
                            <p class="card-text">Curso básico para entender los principios de la inteligencia artificial.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <!-- Botón Ver alineado a la izquierda -->
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <!-- Botones Eliminar y Editar alineados a la derecha -->
                                <div>
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarLeccion" >
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-3 mb-4">
                    <div class="card" style="height:450px">
                        <img src="../img/admin/hacker.webp" class="card-img-top" alt="..." style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Evita los peligros de internet: consejos prácticos.</h5>
                            <p class="card-text">Identifica amenazas comunes en línea y aprende a navegar de forma segura evitando virus y estafas.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <!-- Botón Ver alineado a la izquierda -->
                                <a id="boton" href="#" class="btn btn-sm mx-1">Ver</a>
                                <!-- Botones Eliminar y Editar alineados a la derecha -->
                                <div>
                                    <button id="eliminar" class="btn btn-sm mx-1 btnEliminar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                    <button id="editar" class="btn btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editarLeccion" >
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

    <!-- Modal -->
<div class="modal fade" id="editarLeccion" tabindex="-1" aria-labelledby="editarLeccionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarLeccionLabel">Editar Lección</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulario -->
          <form action="" class="needs-validation" novalidate id="form">
            <div class="row p-4">
              <div class="col-4">
                <label for="">Nombre</label>
                <input required min="18" type="text" class="form-control" placeholder="Inserta el nombre de la lección">
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
                <div class="invalid-feedback">Selecciona una imagen</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-12">
                <label for="">Tipo de lección</label>
                <select required class="form-control">
                  <option value="" disabled selected>Selecciona el tipo de lección</option>
                  <option value="1">Multimedia</option>
                  <option value="2">Juego</option>
                  <option value="3">Presentación</option>
                  <option value="4">Texto</option>
                </select>
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione el tipo de lección</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-12">
                <label for="">Nombre del curso</label>
                <select required class="form-control">
                  <option value="" disabled selected>Selecciona el curso</option>
                  <option value="1">Introducción a la computadora</option>
                  <option value="2">Programación básica</option>
                  <option value="3">Redes de computadoras</option>
                  <option value="4">Introducción a la IA</option>
                  <option value="5">Seguridad en Internet</option>
                </select>
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione el curso</div>
              </div>
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
          </form>
        </div>
      </div>
    </div>
  </div>

     <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>

   <script src="../js/leccion.js"></script>
</body>
</html>