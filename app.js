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
        var linkStyle = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = linkStyle;
            }
        });
        // Burger animation
        burger.classList.toggle('toggle');

    });
};

navSlide();


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
