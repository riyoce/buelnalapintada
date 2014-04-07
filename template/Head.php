<?php

class Head {

    public function printHead($tittle) {
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">        
        <script type=\"text/javascript\" src=\"/buelnalapintada/resources/js/jquery-2.1.0.js\"></script>
        <script type=\"text/javascript\" src=\"/buelnalapintada/resources/js/slider.js\"></script>
        <link rel=\"stylesheet\" href=\"/buelnalapintada/resources/css/cssLayout.css\"/>
        <link rel=\"stylesheet\" href=\"/buelnalapintada/resources/css/default.css\"/>
        
        

        <title>$tittle</title>
    </head>
    <body>         
        <div id=\"top_bar\">
            <div id=\"nav_menu\">
                <a href=\"#\">HOME</a>
                <div class=\"linea\"></div>
                <a href=\"#\">ABOUT US</a>
                <div class=\"linea\"></div>
                <a href=\"#\">OUTFITTER DEALS</a>
                <div class=\"linea\"></div>
                <a href=\"#\">HUNTING</a>
                <div class=\"linea\"></div>
                <a href=\"#\">FISHING</a>
                <div class=\"linea\"></div>
                <a href=\"#\">LOCATION</a>
                <div class=\"linea\"></div>
                <a href=\"#\">ACCOMMODATIONS</a>
                <div class=\"linea\"></div>
                <a href=\"#\">CONTACT US</a>
            </div>
        </div>       
        <div id=\"mascara\" onclick=\"hola();\">
            <div id=\"prev_slider\" onclick=\"prevImage();\">
            </div> 
            
            <div id=\"main_content\">
                <img id=\"logo\" src=\"http://buelnalapintada.com/wp-content/uploads/2013/01/logo_buelna_lapintada1.png\"/>
                <div id=\"tittle\">
                    WELCOME TO BUELNA - LA PINTADA HUNTING
                </div>
                <div id=\"content\">
                    
                ";
    }

}
?>

