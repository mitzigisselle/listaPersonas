<?php

    $idPersonas = $_POST['idPersonas'];

    //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
    //debemos obtener los datos asociados

    $sql = "SELECT id_personas, 
                    nombre, 
                    aPaterno,
                    aMaterno, 
                    fecha,
                    sexo 
            FROM t_personas 
            WHERE id_personas = '$idPersonas'";
    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);
?>

<?php include "header.php"; ?>

    
    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Editar Personas</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="servidor/agregarPersona.php" method="POST">
                            <input type="text" name="idPersonas" value="<?php echo $datos['id_personas'] ?>" hidden>

                            <label for="nombre">Nombre o nombres</label>
                            <input type="text" name="nombre" required class="form-control" value="<?php echo $datos['nombre'] ?>">
                            <label for="aPaterno">Apellido Paterno</label>
                            <input type="text" name="aPaterno" required class="form-control"value="<?php echo $datos['aPaterno'] ?>">
                            <label for="aMaterno">Apellido Materno</label>
                            <input type="text" name="aMaterno" required class="form-control"value="<?php echo $datos['aMaterno'] ?>">
                            <label for="fecha">Fecha de nacimiento</label>
                            <input type="date" name="fecha" required class="form-control"value="<?php echo $datos['fecha'] ?>">
                            <label for="sexo">Sexo</label>
                            <input type="text" name="sexo" required class="form-control"value="<?php echo $datos['sexo'] ?>">
                            <br>
                            <button class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </p>
        </div>  
    </div>
    </div>


<?php include "footer.php"; ?>

