/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

n = 0;
var linkarray;
var array;
var x;
var z;

function slider() {
    var imagepath = "/buelnalapintada/resources/images_slider/";
    var imageSlider = document.getElementById("slider");
    //var link = document.getElementById("imagelink");


    if (n >= x) {
        n = 0;
    }

    if (n < 0) {
        n = 0;
    }


    if (z == 1) {
        array = new Array("img_1.jpg", "img_2.jpg", "img_3.jpg", "img_4.jpg");
        x = array.length;
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
    if (n == 1 || n == 0) {
        n = x;        
    } else {
        n = n - 1;
    }

    slider();
    nIntervId = window.setInterval(slider, "6000");
}
