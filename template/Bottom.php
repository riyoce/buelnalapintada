<?php

class bottom {

    public function printBottom() {
        echo "
            </div>                
                <div id=\"bottom\">
                    <span>CONTACT US</span>
                    <br/>
                    <br/>
                    Offices<br/>
                    Cerrada Aviñon No.47,<br/>
                    Marsella Residencial<br/>
                    Hermosillo, Son., Mex. C.P.83288<br/>                    
                    <br/>
                    Rancho Buelna – La Pintada<br/>
                    Outfitters Landowners<br/>
                    Carretera Internacional<br/>
                    Hermosillo – Guaymas Km.215<br/>                    
                    <br/>
                    <span>Tel</span>
                    011-52- 662-1366208<br/>
                    <span>Mobile</span>
                    011-52- 1 662-1905972<br/>
                    <span>Email</span>
                    contacto@buelnalapintada.com                                        
                </div>
                <br/>
                <div id=\"bottom_line1\"></div>
            </div>

            <div id=\"next_slider\" onclick=\"nextImage();\">
            </div>
        </div>
        <div>
            <img id=\"slider\"/>            
        </div>   
        
        <script type=\"text/javascript\">    
            window.onload = function(){
                slider();
                nIntervId = window.setInterval(slider, \"6000\");
            };
        </script>
      </body>
</html>";
    }

}

?>
