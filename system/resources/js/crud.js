/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function uploadFile() {
    var options = {
        beforeSend: function() {            
            //clear everything            
            $("#message").html("");            
        },
        uploadProgress: function(event, position, total, percentComplete) {
            
        },
        success: function() {
            
        },
        complete: function(response) {
            $("#message").html("<font color='green'>" + response.responseText + "</font>");
            $("#content").load("/buelnalapintada/system/scripts/getData.php");
        },
        error: function() {
            $("#message").html("<font color='red'> ERROR: unable to upload files</font>");

        }

    };

    $("#myForm").ajaxForm(options);
}

function eliminarArchivo(id, nombre) {
    var r = confirm("¿En verdad deceas eliminar este anuncio?");

    if (r == true) {
        ajax = objetoAjax();        
        ajax.open("GET", "/buelnalapintada/system/scripts/DeleteFile.php?id=" + id+"&nom="+nombre);

        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {                
                $("#content").load("/buelnalapintada/system/scripts/getData.php");
            }
        }

        ajax.send(null);
    }

}