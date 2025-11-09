
/* Menú */

document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
})

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu')
    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion')
    navegacion.classList.toggle('mostrar')
}

/* ==== GALERÍA DE PRODUCTOS ==== */
function changeImage(mainImageId, thumbnail) {
    const mainImage = document.getElementById(mainImageId);
    mainImage.src = thumbnail.src;
}


/* Formulario de contacto */

function sendMessage() {
    const numero = '5493513511031';
    const motivo = document.getElementById('motivo').value;
    const nombre = document.getElementById('nombre').value.trim();

    if (!motivo) {
        alert('Por favor seleccioná un motivo de contacto.');
        return false;
    }

    if (!nombre) {
        alert('Por favor ingresá tu nombre.');
        return false;
    }

    // Mensaje con el formato solicitado
    const mensaje = `Hola, mi nombre es ${nombre}. Me contacto desde la web por ${motivo}.`;

    const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`;

    window.open(url, '_blank');
    return false; // evita que se recargue la página
}


// Popup ingresar

const btnIngresar = document.querySelector('.login');
const popup = document.getElementById('popup');

btnIngresar.addEventListener('click', (e) => {
    e.preventDefault();
    popup.classList.add('active');
});

popup.addEventListener('click', (e) => {
    if (e.target === popup) {
        popup.classList.remove('active');
    }
});