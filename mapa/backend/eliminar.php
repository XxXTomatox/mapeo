<?php 
    include "..//conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    
    $sql = "DELETE FROM paises WHERE id='$id'";
    $respuesta = mysqli_query($conexion,$sql);

    if ($respuesta) {
        header('location:../index.php');
    }else{
        echo "No se pudo Elininar";
    }
?>