// Ejecutar la función al cargar la página
document.addEventListener("DOMContentLoaded", cargarTemplate);

const vehiculosHTML = `
<main class="main" id="modelos">
    <div class="vehiculos contenedor">

        <div class="vehiculo1">
            <div class="vehiculo1_overlay">
                <p class="modelo">Peugeot 206</p>
                <p class="año">2011</p>
                <a href="/vehiculos/peugeot206.html" class="btn3">Más información</a>
            </div>
        </div>

        <div class="vehiculo2">
            <div class="vehiculo2_overlay">
                <p class="modelo">Volkswagen gol</p>
                <p class="año">2001</p>
                <a href="/vehiculos/vwgol.html" class="btn3">Más información</a>
            </div>
        </div>

        <div class="vehiculo3">
            <div class="vehiculo3_overlay">
                <p class="modelo">Fiat Strada Adventure</p>
                <p class="año">2014</p>
                <a href="/vehiculos/strada.html" class="btn3">Más información</a>
            </div>
        </div>

        <div class="vehiculo4">
            <div class="vehiculo4_overlay">
                <p class="modelo">Chevrolet Agile</p>
                <p class="año">2010</p>
                <a href="/vehiculos/agile.html" class="btn3">Más información</a>
            </div>
        </div>

        <div class="vehiculo5">
            <div class="vehiculo5_overlay">
                <p class="modelo">Scania G360 124</p>
                <p class="año">2000</p>
                <a href="/vehiculos/scania.html" class="btn3">Más información</a>
            </div>
        </div>

        <div class="vehiculo6">
            <div class="vehiculo5_overlay">
                <p class="modelo">Semi remolque Torresi</p>
                <p class="año">2011</p>
                <a href="/vehiculos/semi.html" class="btn3">Más información</a>
            </div>
        </div>

        <div class="vehiculo7">
            <div class="vehiculo6_overlay">
                <p class="modelo">Peugeot 308</p>
                <p class="año">2014</p>
                <a href="/vehiculos/peugeot308.html" class="btn3">Más información</a>
            </div>
        </div>

         <div class="vehiculo8">
            <div class="vehiculo7_overlay">
                <p class="modelo">Volkwagen Gol</p>
                <p class="año">1996</p>
                <a href="/vehiculos/vwgol2.html" class="btn3">Más información</a>
            </div>
        </div>

    </div>
</main>

`;


// Función para inyectar el header y footer en el DOM
function cargarTemplate() {
    document.querySelector("#vehiculos").innerHTML = vehiculosHTML;
}



