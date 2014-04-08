<?php
require '../conexion/Conexion.php';

$conn = new Conexion();

$query = "select * from imagenes";
$result = mysqli_query($conn->conectar(), $query);
?>

<table id="tbl">
    <th><b>Id</b></th>
    <th><b>Sección</b></th>
    <th><b>Archivo</b></th>
    <th><b>Eliminar</b></th>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["seccion"]; ?></td>
            <td><?php echo $row["nombre"]; ?></td> 
            <td><div style="cursor: pointer; display: inline-block;" onclick="eliminarArchivo(<?php echo $row["id"]; ?>)">X</div></td> 
        </tr>

        <?php
    }
    ?>
</table>