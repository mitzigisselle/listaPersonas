
<!--SELECT CodigoPostal, Nombre, Telefono FROM Clientes ORDER BY Nombre;-->

<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_personas, 
                    nombre, 
                    aPaterno,
                    aMaterno, 
                    fecha,
                    sexo 
            FROM t_personas ORDER BY nombre";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-hover">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Fecha</th>
        <th>Sexo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  
        ?>
        <tr>
            <td><?php echo $mostrar['id_personas'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['aPaterno'];?></td>
            <td><?php echo $mostrar['aMaterno'];?></td>
            <td><?php echo $mostrar['fecha'];?></td>
            <td><?php echo $mostrar['sexo']; ?></td>
            <td>
                <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="idPersonas" value="<?php echo $mostrar['id_personas']?>">
                    <button class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form action="servidor/eliminar.php" method="POST">
                    <input type="text" hidden name="idPersonas" value="<?php echo $mostrar['id_personas']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>