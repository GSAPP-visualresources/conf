var picturesOne = ['assets/img1.jpg','assets/img2.jpg','assets/img3.jpg','assets/img4.jpg','assets/img5.jpg'];
var picturesTwo = ['assets/img6.jpg','assets/img7.jpg','assets/img8.jpg','assets/img9.jpg','assets/img10.jpg'];


window.onload=function() {
    var left = document.getElementById('leftSelected');

    left.setAttribute('src', picturesOne[0]);
    rotate(picturesOne.length);

    var right = document.getElementById('rightSelected');

    right.setAttribute('src', picturesTwo[0]);
    rotateTwo(picturesTwo.length);
}

function rotate(num) {
    if(num >= picturesOne.length) {
        num = 0;
    }
    document.getElementById('leftSelected').src=picturesOne[num++];
    timerID=setTimeout('rotate('+num+')', 2000);
}

function rotateTwo(numTwo) {
    if(numTwo >= picturesTwo.length) {
        numTwo = 0;
    }
    document.getElementById('rightSelected').src=picturesTwo[numTwo++];
    timerID=setTimeout('rotateTwo('+numTwo+')', 2000);
}