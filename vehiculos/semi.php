<?php
require __DIR__ . '/../includes/funciones.php';
incluirTemplate('header');
?>


<div class="auto">
    <div class="auto_overlay">
        <img src="/src/img/vehiculos/semi/main.jpg" alt="auto ingreso del mes" class="auto_img">

        <div class="auto_infoA">
            <div class="info_totalA contenedorS">
                <div class="info">
                    <p class="info_T">Marca</p>
                    <p class="info_V">Torresi</p>
                </div>
                <div class="info">
                    <p class="info_T">Dimensión</p>
                    <p class="info_V">14/50</p>
                </div>
                <div class="info">
                    <p class="info_T">Ejes</p>
                    <p class="info_V">2+1</p>
                </div>
            </div>
        </div>
    </div>

    <div class="auto_infoB contenedorS">
        <div class="info_totalB">
            <div class="info_titulo">
                <p class="year">2011</p>
                <h3 class="model">Semi Remolque Torresi</h3>
            </div>
            <div class="info_marca">
                
            </div>
        </div>
        <div class="info_detalles">
            <p class="info_auto">2+1 eje direccional, 14/50, baranda volcable, puerta estaquera, puerta contenedora, se entrega con arcos y lona, estado general: muy bueno</p>
            <p class="info_precio">Listo para trabajar</p>
        </div>
    </div>


    <div class="galeria">
        <div class="contenedor">
            <h4>Galería de fotos</h4>

            <section class="galeria-desk">
                <div class="product-gallery separador">
                    <div class="thumbnail-images">
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/semi/01.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/semi/02.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/semi/03.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/semi/04.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        <div class="thumbnail-image">
                        <img loading="lazy" src="/src/img/vehiculos/semi/05.jpg" alt="Miniatura 1" onclick="changeImage('mainImage1', this)">
                        </div>
                        
                    </div>
                    <div class="main-image">
                        <img loading="lazy" id="mainImage1" src="/src/img/vehiculos/semi/01.jpg" alt="foto principal">
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