<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <div id="main_content">
            <form id="myForm" action="scripts/Upload.php" method="post" enctype="multipart/form-data">
                <input type="file" size="60" name="myfile" value="Selecciona un archivo"/>
                <input type="submit" value="Cargar"/>
            </form>

            <div id="progress">
                <div id="bar"></div>
                <div id="percent">0%</div>
            </div>
            <br/>

            <div id="message"></div>

            <div id="content" ></div>
        </div>
    </body>

</html>
