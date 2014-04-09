/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var n = 0;
var x;
var array_img;
var array_txt;
function slider() {    
    var imagepath = "/buelnalapintada/resources/images_slider/";
    var imageSlider = document.getElementById("slider");
    var tittle = document.getElementById("tittle");
    x = array_img.length;

    if (n >= x) {
        n = 0;
    }

    
    imageSlider.src = imagepath + array_img[n];
    tittle.innerHTML = array_txt[n];
    n++;

}

function nextImage() {
    window.clearInterval(nIntervId);
    slider();
    nIntervId = window.setInterval(slider, "6000");
}

function prevImage() {
    window.clearInterval(nIntervId);

    n--;
    if (n == 0) {
        n = x - 1;
    } else {
        n--;
    }
   
    slider();
    nIntervId = window.setInterval(slider, "6000");
}
