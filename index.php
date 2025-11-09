<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<div class="hero">
    <div class="contenedor overlay">
        <h1 class="hero_titulo">Elegí comprar sin vueltas</h1>
        <div class="hero_ctas">
            <a href="#modelos" class="btn2">Conoce los modelos</a>
            <a href="/contacto.php" class="btn3">Contactanos</a>
        </div>
    </div>
</div>


<?php
incluirTemplate('vehiculos');
incluirTemplate('testDrive');
?>


<div class="nuevo">
    <div class="nuevo_img">
        <div class="nuevo_overlay contenedorS">
            <h2 class="nuevo_t">Nuevo ingreso</h2>
            <img src="src/img/strada.png" alt="nuevo ingreso del mes" class="nuevo_img-img">
        </div>
    </div>

    <div class="nuevo_info contenedorS">
        <div class="nuevo_infoT">
            <div class="info_modelo">
                <p class="year">2014</p>
                <h4 class="model">Fiat Strada Adventure*</h4>
            </div>
            <div class="info_marca">
                <img src="src/img/marcas/fiat.png" alt="marca fiat" class="logo_marca">
            </div>
        </div>

        <div class="nuevo_infoB">
            <div class="info_total">
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
                    <p class="info_V">??????</p>
                </div>
            </div>
            <a href="/vehiculos/strada.php" class="btn2">Conoce más detalles</a>

        </div>

    </div>

</div>


<div class="compramos">

    <div class="compramos-top">
        <div class="compramos-img"></div>
        <div class="compramos-info">
            <span>Consultanos</span>
            <h3>Compramos tu usado</h3>
            <p>¿Tenés un vehículo? consúltanos para comprarlo o tomarlo como parte de pago para cambiarlo. Escuchamos tu propuesta y te hacemos una oferta justa.</p>
            <a href="/contacto.php" class="btn2">Consúltanos hoy</a>
        </div>
    </div>

    <div class="compramos-bot">
        <div class="compramos-iconos">
            <div class="compramos-icon1">
                <img src="src/img/iconos/icon1.png" alt="icono 1">
                <p>Tu mejor opción en sierras chicas</p>
            </div>
            <div class="compramos-icon2">
                <img src="src/img/iconos/icon2.png" alt="icono 2">
                <p>Siempre nuevas propuetas</p>
            </div>
            <div class="compramos-icon2">
                <img src="src/img/iconos/icon3.png" alt="icono 3">
                <p>El mejor trato</p>
            </div>
            <div class="compramos-icon1">
                <img src="src/img/iconos/icon4.png" alt="icono 4">
                <p>Papeles siempre en regla y orden</p>
            </div>
        </div>

        <div class="compramos-img">
            <img src="/src/img/compramos2.jpg" alt="imagen principal" class="imagen-principal">
        </div>
</div>

</div>



<div class="pagos contenedor">
    <div class="pago">
        <img src="src/img/iconos/pagos-icon1.png" alt="" class="pago_icono">
        <div class="pago_copy">
            <h4 class="pago_t">Compramos tu usado</h4>
            <p class="pago_p">Compramos tu usado al precio justo, sin vueltas, gestiones innecesarias ni complicaciones.</p>
        </div>
        <a href="/contacto.php" class="btn2">Tengo un auto para vender</a>
    </div>
    <div class="pago">
        <img src="src/img/iconos/pagos-icon2.png" alt="" class="pago_icono">
        <div class="pago_copy">
            <h4 class="pago_t">Parte de pago</h4>
            <p class="pago_p">¿Querés cambiar tu auto? Escribinos y te asesoramos fácil, rápido y sin compromiso alguno.</p>
        </div>
        <a href="/contacto.php" class="btn2">Quiero cambiar mi auto</a>
    </div>
    <div class="pago">
        <img src="src/img/iconos/pagos-icon3.png" alt="" class="pago_icono">
        <div class="pago_copy">
            <h4 class="pago_t">Usados seleccionados</h4>
            <p class="pago_p">No vendemos autos en cualquier estado, compramos vehículos seguros y en buen estado.</p>
        </div>
        <a href="/contacto.php" class="btn2">Quiero ver los modelos</a>
    </div>
</div>



<?php
incluirTemplate('whatsapp');
incluirTemplate('banner');
incluirTemplate('footer');
?>