// Ejecutar la función al cargar la página
document.addEventListener("DOMContentLoaded", cargarTemplate);



const testDriveHTML = `
    <div class="testDrive">
    <div class="testDrive_overlay contenedor">
        <div class="testDrive_contenido">
            <div class="testDrive_I">
                <h2>Vení a probarlo</h2>
                <p>“Viví la experiencia antes de decidir.
                    En Automotores Margaret, probá el auto que te gusta y sentí la confianza de tu próxima historia”</p>
            </div>
            <div class="testDrive_D">
                <a href="/contacto.html">Solicita una cita <i class="fa-solid fa-chevron-right"></i> </a>
            </div>
        </div>
    </div>
</div>
`;

const bannerCTAHTML = `
<div class="banner">
    <div class="banner_img"></div>
    <div class="banner-contenido">
        <h3 class="banner_t">Comienza un nuevo camino</h3>
        <p class="banner_p">Un auto para cada necesidad, un auto para cada historia.</p>
        <a href="/contacto.html" class="btn3">Contactanos</a>
    </div>
</div>
`;

const destacadoHTML = `
<div class="nuevo">
    <div class="nuevo_img">
        <div class="nuevo_overlay contenedorS">
            <h2 class="nuevo_t">Destacado</h2>
            <img src="/src/img/scania.png" alt="Vehículo destacado del mes" class="nuevo_img-img">
        </div>
    </div>

    <div class="nuevo_info contenedorS">
        <div class="nuevo_infoT">
            <div class="info_modelo">
                <p class="year">2000</p>
                <h4 class="model">Scania G360 124</h4>
            </div>
            <div class="info_marca">
                <img src="/src/img/marcas/scania.png" alt="marca scania">
            </div>
        </div>

        <div class="nuevo_infoB">
            <div class="info_total">
                <div class="info">
                    <p class="info_T">Motor Km</p>
                    <p class="info_V">30.000</p>
                </div>
                <div class="info">
                    <p class="info_T">Combustión</p>
                    <p class="info_V">Gasoil</p>
                </div>
                <div class="info">
                    <p class="info_T">Precio</p>
                    <p class="info_V">Consultar</p>
                </div>
            </div>
            <a href="/vehiculos/scania.html" class="btn2">Conoce más detalles</a>
        </div>
    </div>
</div>
`;


// Función para inyectar el header y footer en el DOM
function cargarTemplate() {
    document.querySelector("#testDrive").innerHTML = testDriveHTML;
    document.querySelector("#bannerCTA").innerHTML = bannerCTAHTML;
    document.querySelector("#destacado").innerHTML = destacadoHTML;
}



