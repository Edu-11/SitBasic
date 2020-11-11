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

const nombre = document.getElementById("SitBasicPedido_NomPers");
const inputs = document.querySelectorAll('input');
const botonEnviar = document.querySelector('.boton_enviar');

if (nombre != null){
nombre.addEventListener('focus', function () {
  console.log("Seguridad Botón");
  console.log(inputs)
  inputs.forEach(input => {
      if (input.value !== '') {
          botonEnviar.disabled = true;
          setTimeout(() => {
              botonEnviar.disabled = false;
              console.log("funciona botón")
          }, 10000)
      } 
  })
})}

/* Comprobación de que la dirección de email insertada es correcta */

const email = document.querySelector('#SitBasic_Email');
const check = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
const mensajeEmail = document.getElementById('mensajeEmail');
const mensaje = document.getElementsByClassName('mensaje')
const br = document.createElement('br');

email.addEventListener('focusout', function () {
  console.log(email.value);
  if (check.test(email.value)) {
    if (mensaje.length == 0) {
    mensajeEmail.classList.add("mensaje")
    }
  } else if (!check.test(email.value)) {
    if (mensaje.length > 0) {
    mensajeEmail.appendChild(br);
    mensajeEmail.classList.toggle("mensaje")
    }
  }
})

/* Limpia el fomulario cuando carga la página */
const form = document.querySelector("#formulario_compra #form");
window.addEventListener('load', function () {
  form.reset()
})

