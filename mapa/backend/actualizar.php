<?php 
    include "../conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $continente = $_POST['continente'];
    $bandera =$_POST['bandera'];

    $sql = "UPDATE paises SET nombre = '$nombre',continente = '$continente',bandera ='$bandera' WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header('location:../index.php');
    }else {
        echo "No se pudo actualizar";
    }
?>