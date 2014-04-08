<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <script type="text/javascript" src="resources/js/jquery-2.1.0.js"></script>
        <script type="text/javascript" src="resources/js/jquery.form.js"></script>
        <script type="text/javascript" src="resources/js/crud.js"></script>

        <script type="text/javascript">
            window.onload = function() {
                uploadFile();
                $("#content").load("./scripts/getData.php");
            };
        </script>

        <link type="text/css" rel="stylesheet" href="resources/css/cssLayout.css"/>
        <title>Buelnalapintada Administrator</title>
    </head>
    <body>  
        <?php
        require './conexion/Conexion.php';
        $conn = new Conexion();
        $query = "select * from secciones";
        $result = mysqli_query($conn->conectar(), $query);
        ?>
        <div id="main_content">
            <form id="myForm" action="scripts/Upload.php" method="post" enctype="multipart/form-data">
                <input type="file" size="60" name="myfile" value="Selecciona un archivo"/>
                Sección:
                <select id="seccion" name="seccion">
                    <option value="">-- Selecciona un departamento --</option>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $row["nombre"] ?>"><?php echo $row["nombre"] ?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Cargar"/>
            </form>            
            <br/>

            <div id="message"></div>

            <div id="content" ></div>

        </div>
    </body>

</html>
