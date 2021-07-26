<?php

    $nombre = $_POST['nombre'];
    $aPaterno = $_POST['aPaterno'];
    $aMaterno = $_POST['aMaterno'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['sexo'];
    

    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_personas (nombre, aPaterno, aMaterno, fecha, sexo) VALUES ('$nombre', '$aPaterno', '$aMaterno', '$fecha', '$sexo')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar, no sé porque :(";
    }

?>