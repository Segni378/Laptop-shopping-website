"use strict";

// Filtering UI code

const toggleFilter = document.querySelectorAll(".cat-nav-filter-title");

for (let i = 0; i < toggleFilter.length; i++) {
  toggleFilter[i].addEventListener("click", function () {
    let filters = this.nextElementSibling;
    let toggleArrow = this.querySelector(".toggle-arrow");
    toggleArrow.classList.toggle("active");
    filters.classList.toggle("deactive");
  });
}

// product detail expand

const showDetails = document.querySelectorAll(".show-details");

console.log(showDetails);
for (let i = 0; i < showDetails.length; i++) {
  showDetails[i].addEventListener("click", function() {
    var parentElement = showDetails[i].parentElement;
    var productDetails = parentElement.querySelector(".product-details");
    productDetails.classList.toggle("active");
    showDetails[i].classList.toggle("expand-rotate");
  })
}






window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;


function myFunction() {

  console.log("Navbar " + sticky + "window " + window.pageYOffset);
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
    var x = document.getElementsByClassName("heroSlides");

    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 


    setTimeout(carousel, 6000); 
}


document.getElementById('open_here').addEventListener('click', function(){
  document.querySelector('.registration_nav').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', 
function() {
  document.querySelector('.registration_nav').style.display = 'none';
});










// const hellow = document.querySelector(".hellow");
// const close = document.querySelector(".close");
// const registerMe = document.querySelector(".registerMe");
// const overlay = document.querySelector(".overlay");
// console.log("RLJLJLK", registerMe);

// close.addEventListener("click", function() {
//   hellow.classList.remove("active");
//   close.classList.toggle("active");
//   overlay.classList.toggle("active");

// })

// registerMe.addEventListener("click", function() {
//   hellow.classList.add("active");
//   close.classList.add("active");
//   overlay.classList.add("active");
// })















