/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function uploadFile() {
    var options = {
        beforeSend: function() {
            $("#progress").show();
            //clear everything
            $("#bar").width('0%');
            $("#message").html("");
            $("#percent").html("0%");
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            $("#bar").width(percentVal);
            $("#percent").html(percentVal);
        },
        success: function() {
            $("#bar").width('100%');
            $("#percent").html('100%');

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
