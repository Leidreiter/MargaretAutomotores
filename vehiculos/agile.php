<?php
require __DIR__ . '/../includes/funciones.php';
incluirTemplate('header');
?>


<div class="auto">
    <div class="auto_overlay">
        <img src="/src/img/vehiculos/agile/main.jpg" alt="auto ingreso del mes" class="auto_img">

        <div class="auto_infoA">
            <div class="info_totalA contenedorS">
                <div class="info">
                    <p class="info_T">Kilometros</p>
                    <p class="info_V">280.000</p>
                </div>
                <div class="info">
                    <p class="info_T">Combustión</p>
                    <p class="info_V">Gas y Nafta</p>
                </div>
                <div class="info">
                    <p class="info_T">Motor</p>
                    <p class="info_V">1.4</p>
                </div>
            </div>
        </div>
    </div>

    <div class="auto_infoB contenedorS">
        <div class="info_totalB">
            <div class="info_titulo">
                <p class="year">2010</p>
                <h3 class="model">Chevrolet agile</h3>
            </div>
            <div class="info_marca">
                <img src="/src/img/marcas/chevrolet.png" alt="marca chevrolet">
            </div>
        </div>
        <div class="info_detalles">
            <p class="info_auto">En venta Chevrolet Agile, motor 1.4 cierre centralizado, levantavidrio, GNC 5 generación</p>
            <a href=""><p class="info_precio">Consultar</p></a>
        </div>
    </div>

    <!-- <div class="detalle-iconos">
        <div class="detalle-icon1 a">
            <img src="/src/img/iconos/auto-icon1.png" alt="">
            <p class="may">Exterior</p>
            <p>Muy buen estado</p>
        </div>
        <div class="detalle-icon2 b">
            <img src="/src/img/iconos/auto-icon2.png" alt="">
            <p class="may">Interior</p>
            <p>Muy buen estado</p>
        </div>
        <div class="detalle-icon1 c">
            <img src="/src/img/iconos/auto-icon3.png" alt="">
            <p class="may">Pintura</p>
            <p>Muy buen estado</p>
        </div>
        <div class="detalle-icon2 d">
            <img src="/src/img/iconos/auto-icon4.png" alt="">
            <p class="may">Mecánica</p>
            <p>Muy buen estado</p>
        </div>
    </div> -->

    <div class="galeria">
        <div class="contenedor">
            <h4>Galería de fotos</h4>

            <section class="galeria-desk">
                <div class="product-gallery separador">
                    <div class="thumbnail-images">
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/01.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/02.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/03.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/04.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/05.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/06.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/agile/07.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        
                    </div>
                    <div class="main-image">
                        <img loading="lazy" id="mainImage1" src="/src/img/vehiculos/agile/01.jpg" alt="foto principal">
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>

<?php
incluirTemplate('testDrive');
?>

<div class="tituloPagina contenedor">
    <h2 class="tituloPrincipal">Nuestros vehículos</h1>
</div>

<?php
incluirTemplate('whatsapp');
incluirTemplate('vehiculos');
incluirTemplate('banner');
incluirTemplate('footer');
?>