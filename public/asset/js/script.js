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