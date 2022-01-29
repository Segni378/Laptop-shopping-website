
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  
  } else {
    navbar.classList.remove("sticky");
  }
}


//Hero section slide 

var slideIndex = 0;

  carousel();

function carousel(){
    var i;
    var x = document.getElementsByClassName("heroSlides","hero-text");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 6000); 
}













const hellow = document.querySelector(".hellow");
const close = document.querySelector(".close");
const registerMe = document.querySelector(".registerMe");
const overlay = document.querySelector(".overlay");
console.log("RLJLJLK", registerMe);

close.addEventListener("click", function() {
  hellow.classList.remove("active");
  close.classList.toggle("active");
  overlay.classList.toggle("active");

})

registerMe.addEventListener("click", function() {
  hellow.classList.add("active");
  close.classList.add("active");
  overlay.classList.add("active");
})

