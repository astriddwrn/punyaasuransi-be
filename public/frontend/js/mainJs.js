
var slideIndex = 1;
showSlide(slideIndex);
setInterval(function(){ plusSlide(1)}, 6000);
var stripp = document.getElementsByClassName("strip");
stripp[0].classList.add("activee");


// next prev buttons
function plusSlide(n){
    showSlide(slideIndex+=n);
}

function currentSlidess(n){
    showSlide(slideIndex=n)
}

//to display slide when clicked
function showSlide(n){
    var i;
    var slides = document.getElementsByClassName("slideImage");
    var stripp = document.getElementsByClassName("strip");

    if (n > slides.length){
        slideIndex=1;
    }
    if (n < 1){
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < stripp.length; i++) {
        stripp[i].className = stripp[i].className.replace(" activee", "");
    }

    slides[slideIndex-1].style.display ="block";
    stripp[slideIndex-1].classList.add("activee");
}

