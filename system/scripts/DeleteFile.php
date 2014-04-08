<?php

require '../conexion/Conexion.php';

if ($_GET["id"]) {
    $id = $_GET["id"];
    $conn = new Conexion();    

    $query = "select * from imagenes where id = $id";
    $result = mysqli_query($conn->conectar(), $query);

    while ($row = mysqli_fetch_array($result)) {
        $filename = $row["nombre"];
    }
    
    $path = "../../resources/images_slider/".$filename;

    if (unlink($path)) {
        mysqli_query($conn->conectar(), "DELETE FROM imagenes WHERE id = $id");
        echo "Imagen eliminada con éxito";
    } else {
        echo "Error al eliminar el archivo";
    }
} else {
    echo "No hay u id para buscar";
}
?>

