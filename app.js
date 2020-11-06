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


/* Seguridad, desde que se comienza a rellenar delay de activación de 5 segundos en el botón de enviar del formulario */

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
})

/* Comprobación de que la dirección de email insertada es correcta */

const email = document.querySelector('#SitBasic_Email');
const check = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
const mensaje = document.getElementById('mensajeEmail');
const br = document.createElement('br');


email.addEventListener('focusout', function () {
  if (check.test(email.value)) {
    mensaje.classList.toggle("mensaje")
  } else if (!check.test(email.value)) {
    mensaje.appendChild(br);
    mensaje.classList.toggle("mensaje")
  }
})
