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

for (let i = 0; i < showDetails.length; i++) {
  showDetails[i].addEventListener("click", function() {
    var parentElement = showDetails[i].parentElement;
    var productDetails = parentElement.querySelector(".product-details");
    productDetails.classList.toggle("active");
    showDetails[i].classList.toggle("expand-rotate");
  })
}

/* Revealing the brands section slowly on window load */

const availableBrands = document.querySelector(".cat-available-brands").querySelectorAll("a");
const availableSizes = document
  .querySelector(".cat-available-size")
  .querySelectorAll("a");
console.log(availableSizes);
window.addEventListener("load", () => {
    for(let i = 0; i < availableBrands.length; i++) {
      availableBrands[i].classList.add("active");
    }
    for(let i = 0; i < availableSizes.length; i++) {
      availableSizes[i].classList.add("active");
    }
})

/* Revealing sections on scroll */

const sections = document.querySelectorAll(".reveal-slowly");

const reveal = (entries, observer) => {
  const [entry] = entries;
  if(entry.isIntersecting){

    const childrenOfTarget = entry.target.querySelectorAll(".content");

    childrenOfTarget.forEach(child => {
      child.classList.remove("hide--section");
    })

    observer.unobserve(entry.target);
  }

}
const observeOptions = {
  root: null,
  threshold: 0.5
}

const sectionObserver = new IntersectionObserver(reveal, observeOptions);

sections.forEach(section => {

  sectionObserver.observe(section);
  const allChild = section.querySelectorAll(".content");
  allChild.forEach(child  => {
    child.classList.add("hide--section");
  })

});





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
