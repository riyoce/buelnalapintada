<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <script type="text/javascript" src="/buelnalapintada/resources/js/jquery-2.1.0.js"></script>
        <script type="text/javascript" src="/buelnalapintada/resources/js/slider.js"></script>
        <link rel="stylesheet" href="/buelnalapintada/resources/css/cssLayout.css"/>
        <link rel="stylesheet" href="/buelnalapintada/resources/css/default.css"/>
        <title>Buelnalapintada</title>
    </head>

    <?php
    ini_set('error_reporting', -1);
    ini_set('display_errors', 1);
    ini_set('html_errors', 1);

    $conn = mysqli_connect("localhost", "newuser", "Katiusha75", "buelnalapintada", "3306");
    
    $seccion = $_GET["seccion"];
    $sql = "SELECT * FROM imagenes WHERE seccion = '$seccion'";
    $result = mysqli_query($conn, $sql);
    $array_img = "";
    $array_txt = "";

    while ($row = mysqli_fetch_array($result)) {
        $array_img .= "\"" . $row["nombre"] . "\"" . ",";
        $array_txt .= "\"" . $row["descripcion"] . "\"" . ",";
    }
    
    
    ?>

    <body>         
        <div id="top_bar">
            <div id="nav_menu">
                <a href="/buelnalapintada/index.php?seccion=home">HOME</a>
                <div class="linea"></div>
                <a href="#">ABOUT US</a>
                <div class="linea"></div>
                <a href="/buelnalapintada/views/outfitter.php?seccion=home">OUTFITTER DEALS</a>
                <div class="linea"></div>
                <a href="#">HUNTING</a>
                <div class="linea"></div>
                <a href="#">FISHING</a>
                <div class="linea"></div>
                <a href="#">LOCATION</a>
                <div class="linea"></div>
                <a href="#">ACCOMMODATIONS</a>
                <div class="linea"></div>
                <a href="#">CONTACT US</a>
            </div>
        </div>       
        <div id="mascara" onclick="hola();">
            <div id="prev_slider" onclick="prevImage();">
            </div> 

            <div id="main_content">
                <img id="logo" src="http://buelnalapintada.com/wp-content/uploads/2013/01/logo_buelna_lapintada1.png"/>
                <div id="tittle">

                </div>
                <div id="content">

                    <script type="text/javascript">
                        array_img = [<?php echo $array_img; ?>];
                        array_txt = [<?php echo $array_txt; ?>];
                    </script>

