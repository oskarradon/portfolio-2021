// import * as basicLightbox from "/assets/js/vendor/basicLightbox.min.js";

for (const lightbox of document.querySelectorAll(".lightbox")) {
  lightbox.onclick = () => {
    basicLightbox.create(lightbox.innerHTML).show();
  };
}

document.querySelector("footer p span").innerHTML = new Date().getFullYear();

/* Toggle Nav with Raw JavaScript */
// Set variables for key elements
var mainNav = document.getElementById("more-info");
var navToggle = document.getElementById("about");

// Establish a function to toggle the class "collapse"
function mainNavToggle() {
  mainNav.classList.toggle("showing");
}

// Add a click event to run the mainNavToggle function
navToggle.addEventListener("click", mainNavToggle);
