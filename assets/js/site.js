document.querySelector("footer p span").innerHTML = new Date().getFullYear();

document.getElementById("about-toggle").addEventListener("click", function () {
  document.getElementById("more-info").classList.toggle("showing");
});

// document
//   .getElementById("footer-nav-toggle")
//   .addEventListener("click", function () {
//     document.querySelector("footer nav").classList.toggle("showing");
//   });

// * * * * * * *
// IMAGE GALLERY
// * * * * * * *

// Exhibition page uses Swiper library: https://swiperjs.com/

const swiper = new Swiper(".swiper", {
  keyboard: {
    enabled: true,
  },
  slidesPerView: 1.5,
  spaceBetween: 20,
  speed: 500,
  centeredSlides: false,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    600: {
      spaceBetween: 40,
    },
    1024: {
      spaceBetween: 100,
    },
  },
});

hljs.highlightAll();

const players = Array.from(document.querySelectorAll(".player")).map(
  (p) =>
    new Plyr(p, {
      controls: [
        "play-large",
        "play",
        "progress",
        "current-time",
        "mute",
        "volume",
        // "captions",
        // "settings",
        "pip",
        // "airplay",
        // "fullscreen",
      ],
    })
);
