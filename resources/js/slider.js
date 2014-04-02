/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var n = 0;
var x;

function slider() {

    var array = new Array("img_1.jpg", "img_2.jpg", "img_3.jpg", "img_4.jpg");
    var imagepath = "/buelnalapintada/resources/images_slider/";
    var imageSlider = document.getElementById("slider");
    x = array.length;

    if (n >= x) {
        n = 0;
    }

    imageSlider.src = imagepath + array[n];
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
