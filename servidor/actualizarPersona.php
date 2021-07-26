<?php 

    $idPersonas = $_POST['idPersonas'];
    $nombre = $_POST['nombre'];
    $aPaterno = $_POST['aPaterno$aPaterno'];
    $aMaterno = $_POST['aMaterno'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['sexo'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_personas 
            SET nombre = '$nombre', 
                aPaterno = '$aPaterno', 
                aMaterno = '$aMaterno', 
                fecha = '$fecha', 
                sexo = '$sexo' 
            WHERE id_personas = '$idPersonas'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }