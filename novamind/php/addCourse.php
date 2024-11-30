<?php
    include "./conexion.php";
    $nombre = $_POST['txtName'];
    $descripcion = $_POST['txtDescription'];
    $nivel = $_POST['txtLevel']; /*es con select*/
    $estado = $_POST['txtStatus']; /*es con select*/
    $duracion = $_POST['txtDuration'];
    $costo = $_POST['txtCost'];
    $fechainicio = $_POST['txtStartDate'];
    $imagen = $_POST['txtFile'];
    $instructor = $_POST['txtInstructor'];
    $categoria = $_POST['txtCategory'];
    
    
    /*$conexion -> query($consulta) or die ($conexion->error);
    echo "Registro insertado correctamente"*/


    // Ahora puedes usar directamente el idInstructor en la consulta de inserción
    $consulta = "insert into courses (name, description, level, status, durationHours,
    cost, startDate, img, idInstructor, idCategory) 
    values ('$nombre', '$descripcion', '$nivel', '$estado', '$duracion', '$costo', 
    '$fechainicio', '$imagen', '$instructor', '$categoria')";

    
     // Ejecutamos la consulta
     if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error al insertar registro: " . $conexion->error;
    }
    

?>