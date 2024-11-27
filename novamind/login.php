<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NovaMind te abre las puertas al mundo digital. Aprende sobre tecnología y computadoras de una manera fácil y divertida para todas las edades.">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/login.css">
    <!--Sweet Alert-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="./css/mediaquery-login.css">

     <!-- Bootstrap Icons -->
     <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
     <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"></noscript>

    <link rel="icon" href="./img/LOGO NOVAMIND-ROBOT.ico">

</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div id="top-side">
                <a href="./index.html"><img src="./img/mejorada/Logo-Nombre_1.webp" alt="logo"></a>
            <h2>INICIA <span>SESIÓN</span></h2>
            </div>
            <div id="center-side">
                <form action="./php/login.php" method="post">
                    <div class="input-group">
                        <input name="txtEmail" type="text" placeholder="Correo o nombre de usuario" required>
                    </div>
                    <div class="password-group">
                        <input name="txtPassword" type="password" id="password" placeholder="Contraseña" required>
                        <span id="togglePassword" class="eye-icon"><i class="bi bi-eye"></i></span>
                    </div>
                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                <button type="submit" class="login-btn">Iniciar sesión</button>
                </form>
            </div>
            <div id="bottom-side">
                <div class="other-login-options">
                    <div class="line"></div>
                    <p>Otras opciones de inicio de sesión</p>
                    <div class="line"></div>
                </div>
                <div class="social-login">
                    <a href="https://accounts.google.com/signin" target="_blank">
                        <img src="./img/google fondo.webp" alt="google">
                    </a>
                    <a href="https://www.facebook.com/login.php" target="_blank">
                        <img src="./img/facebook fondo.webp" alt="facebook">
                    </a>
                    <a href="https://account.apple.com/sign-in" target="_blank">
                        <img src="./img/apple fondo.webp" alt="apple">
                    </a>
                </div>
            <p class="register-text">¿No tienes una cuenta? <a href="./signup.html">Regístrate</a></p>
            </div>
            
        </div>
    </div>
    

    <!-- SweetAlert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>

   <script src="./js/scripts.js" defer></script>
   <?php
        if(isset($_GET['error'])){
   ?>
                <script>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: " Datos no válidos",
                    });
                </script>
    <?php } ?>

</body>
</html>