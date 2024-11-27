<?php session_start();
            include "./conexion.php";
            //Cachar datos
            $email = $_POST['txtEmail'];
            $password = $_POST ['txtPassword'];

            $sql = "select * from users where email = '$email' and password = '$password'";

            $res = $conexion->query($sql) or die($conexion->error);
            if(mysqli_num_rows($res) > 0){
                echo "Login correcto <br>";
                $fila = mysqli_fetch_row($res); //trae la primera fila
                $name = $fila[1];
                $ap = $fila[2];
                $am = $fila[3];
                $id = $fila[0];
                $email = $fila[5];
                $image = $fila[8];
                echo "Hola $name, tu id es $id";
                $_SESSION['user_data'] = [
                    'id'=>$id, 
                    'name'=>$name,
                    'ap'=>$ap,
                    'am'=>$am,
                    'email'=>$email,
                    'img'=>$image,
                ];
                header('Location: ../admin/admin.php');
            }else{
                echo "Datos no válidos";
                header("Location: ../login.php?error=1"); //redireccionar
            }
?>