<?php

require ("../conexion/Conexion.php");

$conn = new Conexion();

$output_dir = "../../resources/images_slider/";
$seccion = $_POST["seccion"];
if (isset($_FILES["myfile"])) {
    //Filter the file types , if you want.
    
    if ($_FILES["myfile"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {
        //move the uploaded file to uploads folder;
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $_FILES["myfile"]["name"])) {
            $filename = $_FILES["myfile"]["name"];
            
            mysqli_query($conn->conectar(), "INSERT INTO imagenes (nombre, seccion) VALUES ('$filename', '$seccion')");
            echo "Imagen cargada con éxito";
        }
    }
}
?>
