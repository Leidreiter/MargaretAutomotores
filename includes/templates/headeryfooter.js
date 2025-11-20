// Ejecutar la función al cargar la página
document.addEventListener("DOMContentLoaded", cargarTemplate);


// HTML del header
const headerHTML = `
<header class="header">
        <div class="contenido-header">
            <div class="izq">
                <a href="/index.html">
                <img src="/src/img/logo.png" alt="logo margaret automotores" class="logo">
                </a>
                <div class="menu">
                    <div class="mobile-menu">
                        <img src="/src/img/barras.svg" alt="barras-menu">
                    </div>
                    <nav class="navegacion">
                        <a href="/index.html" class="nav-enlace">Inicio</a>
                        <a href="/vehiculos.html" class="nav-enlace">Vehículos</a>
                        <a href="/pagos.html" class="nav-enlace">Métodos de pago</a>
                        <a href="/contacto.html" class="nav-enlace">Contacto</a>
                    </nav>
                </div>


            </div>
            <div class="der">
                <a href="" class="location">
                    <i class="fa-solid fa-location-dot"></i>
                    Estamos en Sierras Chicas, Córdoba</a>
                <a href="" class="btn1 login"><i class="fa-solid fa-circle-user"></i>Ingresar</a>
            </div>
        </div>
    </header>

        <div class="popup-overlay" id="popup">
        <div class="popup">
            <h3>Iniciar sesión</h3>
            <form>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Tu usuario">

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Tu contraseña">

                <button type="button" class="btn-popup">Ingresar</button>
            </form>
        </div>
    </div>

    <div class="whatsapp">
        <a href="https://wa.me/+5493513511031?text=Hola, quería consultar  " target="_blank">
            <img loading="lazy" src="/imagenes/whatsapp.png" alt="whatsapp Margaret Automotores">
        </a>
    </div>


`;

// HTML del footer
const footerHTML = `
<footer class="footer">
    <div class="footer_top">
        <div class="footer_content contenedor">
            <a href="/index.html">
            <img src="/src/img/logo.png" alt="logo footer" class="logo_footer">
            </a>
            <div class="footer_navs">
                <ul class="reset-lista menu_footer">
                    <li>
                        <a href="/vehiculos.html">Vechículos</a>
                        <a href="/pagos.html">Métodos de pago</a>
                        <a href="/contacto.html">Vente tu auto</a>
                        <a href="/contacto.html">Coontacto</a>
                    </li>
                </ul>
                <ul class="reset-lista menu_footer">
                    <li>
                        <a href="#">Políticas de privacidad</a>
                        <a href="#">Términos y condiciones</a>
                        <a href="#">Legales</a>
                    </li>
                </ul>
            </div>
            <a href="https://soymarcus.pages.dev/" target="_blank">
                <img src="/src/img/designby.png" alt="diseño y desarrollo por SoyMarcus" class="designby">
            </a>
        </div>
    </div>
    <div class="footer_bot">
        <p class="copyright">
            Margaret Automotores 2025 © - Todos los derechos reservado. Diseño y desarrollo del sitio por SoyMarcus.
        </p>
        <p class="copyright">
            * Algunas imágenes utilizadas en la web son de modo ilustrativas, para conocer en detalle el estado de cada vehículo solicítelo a través de los contactos de la web.
        </p>
    </div>
</footer>
`;




// Función para inyectar el header y footer en el DOM
function cargarTemplate() {
    document.querySelector("header").innerHTML = headerHTML;
    document.querySelector("footer").innerHTML = footerHTML;

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
}



