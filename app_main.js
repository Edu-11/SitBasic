/* Burger toggle */

const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

    burger.addEventListener("click", () => {
        //Toggle nav
        nav.classList.toggle("nav-active");

        //Animate link
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +
                    .4}s`;
            }
        });
        // Burger animation
        burger.classList.toggle('toggle');

    });
};

navSlide();


/* Slider - Galeria */

"use strict";

function _toConsumableArray(arr) {
    if (Array.isArray(arr)) {
        for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
            arr2[i] = arr[i];
        }
        return arr2;
    } else {
        return Array.from(arr);
    }
}

var getElement = {
    wrapper: document.getElementById("wrapper"),
    slides: [].concat(_toConsumableArray(document.querySelectorAll("#slide"))),
    currentSlide: document.querySelector(".slide.current"),
    nextBtn: document.querySelector(".slider__btn--next"),
    prevBtn: document.querySelector(".slider__btn--prev"),
    // indicators: [].concat(
    //     _toConsumableArray(document.querySelectorAll(".indicators__item"))
    // )
};
var prop = {
    id: 0,
    slideTime: 6000,
    autoSlide: true
};
var autoPlayInterval = void 0;

function init(id) {
    addClass(id);
    // changeIndicator(id);
    // clickIndicator();
    autoPlay();
    stopAutoPlay();
}

function addClass(numOfSlide) {
    reset("slides", "current");
    getElement.slides[numOfSlide].classList.add("current");
}

function reset(elems, className) {
    getElement[elems].forEach(function (elem) {
        elem.classList.remove(className);
    });
}

function changeSlide(num) {
    var lastSlide = getElement.slides.length - 1;
    var currentSlide = prop.id + num;
    if (currentSlide > lastSlide) {
        currentSlide = 0;
    }
    if (currentSlide < 0) {
        currentSlide = lastSlide;
    }
    prop.id = currentSlide;
    addClass(currentSlide);
    changeIndicator(currentSlide);
}

// function changeIndicator(id) {
//     reset("indicators", "active");
//     getElement.indicators[id].classList.add("active");
// }

function autoPlay() {
  if (prop.autoSlide) {
      autoPlayInterval = setInterval(function () {
          changeSlide(1);
      }, prop.slideTime);
  }
}

const video = document.getElementById("video1");
const galeria = document.getElementById("galeria");

function stopAutoPlay() {
  galeria.addEventListener("mouseenter", function () {
    clearInterval(autoPlayInterval);
  });
  galeria.addEventListener("mouseleave", function () {
    autoPlay();
  });
  video.addEventListener("play", function () {
    prop.autoSlide = false;
  });
  video.addEventListener("ended", function () {
    autoPlay();
  });
}

// function clickIndicator() {
//   getElement.indicators.forEach(function (indicator) {
//     indicator.addEventListener("click", function (e) {
//       reset("indicators", "active");
//       e.target.classList.add("active");
//       var currIndicator = e.target.dataset.slideTo * 1;
//       prop.id = currIndicator;
//       addClass(currIndicator);
//     });
//   });
// };

init(prop.id);

getElement.nextBtn.addEventListener("click", function () {
  changeSlide(1);
  video.load()
});
getElement.prevBtn.addEventListener("click", function () {
  changeSlide(-1);
  video.load()
});


/* Comprueba cuando el slider se ve en la pantalla. */
var myElement = document.getElementById('galeria');
var bounding = myElement.getBoundingClientRect();

function elementInViewport() {
  var bounding = myElement.getBoundingClientRect();
  if (bounding.top >= 0 && bounding.left >= 0 && bounding.right <= (window.innerWidth || document.documentElement.clientWidth) && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)) {
    return true
  } else {
    return false
  }
}

/* Para el vídeo cuando no está en pantalla y activa el slider */
video.onplaying = function () {
  window.addEventListener("scroll", function () {
    if (!elementInViewport()) {
      video.pause()
    } else if (elementInViewport()) {
      video.play()
    }
  })
};

// function setPause() {
//   if (video.pause()) {
//     console.log("PAUSA");
//   } else if (video.play()) {
//     console.log("REPRODUCIENDO")
//   }
// }

// setPause();

/* Seguridad, delay en el botón de enviar del formulario */

const form = document.querySelector('form');
const inputs = document.querySelectorAll('input');
const botonEnviar = document.querySelector('.boton_enviar');


form.addEventListener('keydown', function () {
    inputs.forEach(input => {
        if (input.value !== '') {
            botonEnviar.disabled = true;
            setTimeout(() => {
                botonEnviar.disable = false;
            }, 5000)
        } 
    })
    console.log('ya está el botón activo');
})

/* Seguridad, si en el texto del comentario hay una web no entra */
