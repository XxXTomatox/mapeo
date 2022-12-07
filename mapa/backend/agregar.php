<?php 
    include "../conexion.php";
    $conexion= conexion();
    $nombre = $_POST['nombre'];
    $continente = $_POST['continente'];
    $bandera =$_POST['bandera'];
    $sql = "INSERT INTO paises (nombre,continente,bandera) VALUES ('$nombre','$continente','$bandera')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header('location:../index.php');
    }else {
        echo "No se pudo insertar";
    }
?>