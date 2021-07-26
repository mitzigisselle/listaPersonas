
<?php include "header.php"; ?>

    
<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
        <h1 class="font-weight-light">Agregar Persona</h1>
        <p class="lead">
            <div class="row">
                <div class="col-sm-12">
                    <form action="servidor/agregarPersona.php" method="POST">
                        <label for="nombre">Nombre o nombres</label>
                        <input type="text" name="nombre" required class="form-control">
                        <label for="aPaterno">Apellido Paterno</label>
                        <input type="text" name="aPaterno" required class="form-control">
                        <label for="aMaterno">Apellido Materno</label>
                        <input type="text" name="aMaterno" required class="form-control">
                        <label for="fecha">Fecha de nacimiento</label>
                        <input type="date" name="fecha" required class="form-control">
                        <label for="sexo">Sexo</label>
                        <input type="text" name="sexo" required class="form-control">
                        <br>
                        <button class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla de Personas</h3>
                        <?php include "tablaPersonas.php";?>
                    </div>
                </div>
            <br>
        </p>
    </div>
</div>
</div>


<?php include "footer.php"; ?>



<script>
  $(document).ready(function(){
      $('#ejemploTabla').DataTable();
  })
</script>




