<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];
?>

<?php
    include "../php/conexion.php";
    $sql = "select courses.*, instructors.idInstructor , categories.idCategory from courses inner join instructors 
    on courses.idInstructor = instructors.idInstructor inner join categories 
    on courses.idCategory = categories.idCategory;";
    $res= $conexion->query("$sql") or die ($conexion->error);
?>

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
    <?php include "../layouts/aside.php"; ?>
    <!--END SIDEBAR-->
    <!--MAIN CONTENT-->
    <main class="flex-grow-1 " >
        <?php include "../layouts/header.php"; ?>
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
                 <?php 
                      while($fila = mysqli_fetch_array($res)){
                ?>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card" style="height: 400px;">
                        <img src="../img/admin/<?php echo $fila['img'] ?>" class="card-img-top" style="height: 200px;">
                        <div class="card-body">
                            <h5 id="compu" class="card-title"><?php echo $fila['name'] ?></h5>
                            <p class="card-text"><?php echo $fila['description'] ?></p>
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
                <?php  } ?>
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
                <input name="txtName" required min="18" type="text" class="form-control" placeholder="Inserta el nombre del curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Nombre incorrecto</div>
              </div>
              <div class="col-4">
                <label for="">Descripción</label>
                <input name="txtDescription" required type="text" class="form-control" placeholder="Inserta la descripción">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Descripción incorrecta</div>
              </div>
              <div class="col-4">
                <label for="">Imagen</label>
                <input name="txtFile" required type="file" class="form-control">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Por favor seleccione una imagen</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-6">
                <label for="">Nivel</label>
                <select name="txtLevel" required class="form-control">
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
                <select name="txtStatus" required class="form-control">
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
                <input name="txtDuration" required type="number" class="form-control" placeholder="Inserta la duración del curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Duración incorrecta</div>
              </div>
              <div class="col-6">
                <label for="">Categoría</label>
                <select name="txtCategory" required class="form-control">
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
                <input name="txtInstructor" required type="text" class="form-control" placeholder="Inserta el nombre del instrutor que impartirá el curso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Nombre incorrecto</div>
              </div>
            </div>
            <div class="row p-4">
              <div class="col-6">
                <label for="">Fecha de inicio</label>
                <input name="txtStartDate" required type="date" class="form-control">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Fecha incorrecta</div>
              </div>
              <div class="col-6">
                <label for="">Costo</label>
                <input name="txtCost" required type="number" class="form-control" placeholder="Inserta el costo del curso">
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