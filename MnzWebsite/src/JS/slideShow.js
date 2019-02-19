var i = 0;
var j = 1;
var k = 2;
var l = 3;
var images = [];
var time = 2000;

images[0] = "../ressources/slide/bouncy.png";
images[1] = "../ressources/slide/film.png";
images[2] = "../ressources/slide/elaphant.png";
images[3] = "../ressources/slide/kidz.png";
images[4] = "../ressources/slide/tscan.png";
images[5] = "../ressources/slide/wcs.fw.png";
images[6] = "../ressources/slide/round.fw.png";
images[7] = "../ressources/slide/olorun.png";
images[8] = "../ressources/slide/apbr.png";
images[9] = "../ressources/slide/goodman.png";
images[10] = "../ressources/slide/pwatch.png";

function changeImg() {
    document.slide1.src = images[i];
    if ((i+j) > 10){
        document.slide2.src = images[(i+j) - 11];
    }
    else
        document.slide2.src = images[i+j];
    if ((i+k) > 10){
        document.slide3.src = images[(i+k) - 11];
    }
    else
        document.slide3.src = images[i+k];
    if ((i+l) > 10){
        document.slide4.src = images[(i+l) - 11];
    }
    else
        document.slide4.src = images[i+l];

    if (i < images.length - 1)
        i++;
    else
        i = 0;

    setTimeout ("changeImg()", time);
}
window.onload = changeImg;