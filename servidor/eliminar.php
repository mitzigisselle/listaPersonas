<?php

    $idPersonas = $_POST['idPersonas'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_personas WHERE id_personas = '$idPersonas'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar, revisa tu query :(";
    }
?>