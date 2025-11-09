<?php
require __DIR__ . '/../includes/funciones.php';
incluirTemplate('header');
?>


<div class="auto">
    <div class="auto_overlay">
        <img src="/src/img/vehiculos/308/main.jpg" alt="auto ingreso del mes" class="auto_img">

        <div class="auto_infoA">
            <div class="info_totalA contenedorS">
                <div class="info">
                    <p class="info_T">Kilometros</p>
                    <p class="info_V">??????</p>
                </div>
                <div class="info">
                    <p class="info_T">Combustión</p>
                    <p class="info_V">??????</p>
                </div>
                <div class="info">
                    <p class="info_T">Precio</p>
                    <p class="info_V">U$D ?????</p>
                </div>
            </div>
        </div>
    </div>

    <div class="auto_infoB contenedorS">
        <div class="info_totalB">
            <div class="info_titulo">
                <p class="year">2014</p>
                <h3 class="model">Peugeot 308</h3>
            </div>
            <div class="info_marca">
                <img src="/src/img/marcas/peugeot.png" alt="marca peugeot">
            </div>
        </div>
        <div class="info_detalles">
            <p class="info_auto">Auto usado en impecable estado, con excelente desempeño y confort. Perfecto para quienes buscan calidad, estilo y confianza en cada kilómetro. Diseño atractivo, mantenimiento al día y listo para su próximo dueño.</p>
            <p class="info_precio">U$D ?????</p>
        </div>
    </div>

    <!-- <div class="detalle-iconos">
        <div class="detalle-icon1 a">
            <img src="/src/img/iconos/auto-icon1.png" alt="">
            <p class="may">Exterior</p>
            <p>??????</p>
        </div>
        <div class="detalle-icon2 b">
            <img src="/src/img/iconos/auto-icon2.png" alt="">
            <p class="may">Interior</p>
            <p>??????</p>
        </div>
        <div class="detalle-icon1 c">
            <img src="/src/img/iconos/auto-icon3.png" alt="">
            <p class="may">Pintura</p>
            <p>??????</p>
        </div>
        <div class="detalle-icon2 d">
            <img src="/src/img/iconos/auto-icon4.png" alt="">
            <p class="may">Mecánica</p>
            <p>??????</p>
        </div>
    </div> -->

    <div class="galeria">
        <div class="contenedor">
            <h4>Galería de fotos</h4>

            <section class="galeria-desk">
                <div class="product-gallery separador">
                    <div class="thumbnail-images">
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/01.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/02.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/03.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/04.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/05.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/06.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/308/07.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        
                    </div>
                    <div class="main-image">
                        <img loading="lazy" id="mainImage1" src="/src/img/vehiculos/308/01.jpg" alt="foto principal">
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