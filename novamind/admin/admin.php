<?php session_start();
    if(!isset($_SESSION['user_data'])){
        header("Location: ../login.php");
    }
    $user_data = $_SESSION['user_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración NovaMind</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!--ICONO-->
    <link rel="icon" href="../img/LOGO NOVAMIND-ROBOT.ico">
    <link rel="stylesheet" href="../css/admin/index.css">
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
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $user_data['name'].' ' .$user_data['ap'];?>
                            </a>
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
        <section class="container mt-4">
            <h4 id="bienvenida" >Bienvenido al Panel de Administración de <span>NovaMind</span></h4>

            <!--STATS-->
            <div class="row p-2">
                <div class="col-3 p-2">
                    <div class="card" id="carta" style="height: 120px;">
                        <div class="card-body p-3">
                            <label for="" class="" id="colorCarta">
                                <i class="bi bi-piggy-bank-fill" style="color: #66FCF1; font-size: 1.2rem;"></i>
                                &nbsp;&nbsp;Total de ingresos mensuales
                            </label>
                            <h5 class="h3 text-center" id="colorCarta1">$2,500.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3 p-2">
                    <div class="card" id="carta" style="height: 120px;">
                        <div class="card-body p-3">
                            <label for="" class="" id="colorCarta">
                                <i class="bi bi-people-fill" style="color: #66FCF1;font-size: 1.2rem;"></i>
                                &nbsp;&nbsp;Usuarios activos
                            </label>
                            <h5 class="h3 text-center" id="colorCarta1">1,200</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3 p-2">
                    <div class="card" id="carta" style="height: 120px;">
                        <div class="card-body p-3">
                            <label for="" class="" id="colorCarta">
                                <i class="bi bi-laptop" style="color: #66FCF1;font-size: 1.2rem;"></i>
                                &nbsp;&nbsp;Cursos publicados
                            </label>
                            <h5 class="h3 text-center " id="colorCarta1">5</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3 p-2">
                    <div class="card" id="carta" style="height: 120px;">
                        <div class="card-body p-3">
                            <label for="" class="" id="colorCarta" style="font-size: 1.2rem;">
                                <i class="bi bi-list-task" style="color: #66FCF1;font-size: 1.2rem;"></i>
                                &nbsp;&nbsp;Lecciones completadas
                            </label>
                            <h5 class="h3 text-center" id="colorCarta1">5,715</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!--STATS-->
            <!--CHARTS-->
            <div class="row mt-4">
                <div class="col-6">
                    <div class="card" style="height: 380px;">
                        <div class="card-header">
                            Ingresos por Mes
                        </div>
                        <div class="card-body">
                            <canvas id="chartIngresos"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card d-flex justify-content-center align-items-center" style="height: 380px;">
                        <div class="card-header" style="width: 100%;">
                            Popularidad por Categoría
                        </div>
                        <div class="card-body" style="height: 250px; width: 300px;">
                            <canvas id="chartCategorias" ></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--CHARTS-->
        </section>
    </main>
    <!--END MAIN CONTENT-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/admin.js"></script>
</body>
</html>