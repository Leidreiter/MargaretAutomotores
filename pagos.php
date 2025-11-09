<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<div class="ubicacion">
    <div class="ubicacion-overlay contenedorS">
        <p>Ubicación</p>
        <h2>Estamos en zona Sierras Chicas</h2>
        <span>Zona Norte de Córdoba, Salispuedes / Río Ceballos</span>
    </div>
</div>

<?php
incluirTemplate('testDrive');
?>

<div class="detalles">
    <h3>Medios de Pagos</h3>
    <div class="detalle-iconos">
        <div class="detalle-icon1 a">
            <img src="/src/img/iconos/pago-icon1.png" alt="">
            <p>Podes señarnos tu auto en efectivo</p>
        </div>
        <div class="detalle-icon2 b">
            <img src="/src/img/iconos/pago-icon2.png" alt="">
            <p>Pagos al contado en pesos y usd</p>
        </div>
        <div class="detalle-icon1 c">
            <img src="/src/img/iconos/pago-icon3.png" alt="">
            <p>Transferencias Bancarias, NO bancos digitales</p>
        </div>
        <div class="detalle-icon2 d">
            <img src="/src/img/iconos/pago-icon4.png" alt="">
            <p>NO TRABAJAMOS con bancos digitales como MercadoPago</p>
        </div>
    </div>
</div>

<div class="pagos-info">
    <div class="contenedorS">
        <div class="pagos-condiciones">
            <span>Más información</span>
            <h3>Condiciones de pagos</h3>
            <p>En Automotores Margaret sabemos que comprar un vehículo no es una decisión cualquiera: es una inversión importante 
                y una experiencia que debe vivirse con total confianza. Por eso, nos esforzamos en ofrecerte opciones de pago flexibles, 
                seguras y adaptadas a tus posibilidades.
            </p>
            <p>
                Podés realizar tu seña en efectivo, tanto en pesos argentinos como en dólares estadounidenses, para reservar tu vehículo 
                de forma rápida y sin complicaciones. También aceptamos transferencias bancarias, siempre que se cumplan las condiciones 
                establecidas más abajo. De esta manera, garantizamos operaciones claras y seguras en todo momento.
            </p>
            <p>
                Para el pago total del vehículo, podés optar por efectivo o transferencia bancaria, en cualquiera de las dos monedas. 
                Cada operación se realiza dentro del marco legal vigente y se documenta con su correspondiente comprobante. 
                Los pagos en efectivo se concretan de forma presencial, cuidando la seguridad de ambas partes. En el caso de transferencias, 
                solicitamos que los fondos provengan de cuentas personales o empresariales a nombre del comprador, evitando intermediarios, 
                para asegurar la trazabilidad y transparencia de la operación.
            </p>
            <p>
                En cuanto a las transferencias bancarias, aceptamos únicamente aquellas que se realicen desde entidades financieras oficiales y reguladas. 
                No trabajamos con bancos digitales, billeteras virtuales o plataformas de pago no tradicionales, ya que no garantizan la verificación 
                plena de identidad ni de origen de fondos. Nuestro equipo revisa cada comprobante de transferencia para validar su autenticidad y 
                así mantener la seguridad y confianza que caracterizan a Automotores Margaret.
            </p>
            <p>
                Financiación y entrega:
                Te ofrecemos la posibilidad de financiar hasta el 50% del valor del vehículo, con condiciones adaptadas a tu perfil y necesidades. 
                Además, para garantizar la transparencia total de la operación, la entrega del vehículo se realiza únicamente una vez que la 
                transferencia está inscripta y el automotor figura a nombre del comprador en el registro correspondiente. Esta política protege 
                tu compra y asegura una transacción 100% segura y legal.
            </p>
            <p>
                Sabemos que muchos clientes prefieren los bancos digitales por su practicidad y rapidez, y lamentamos los inconvenientes que pueda 
                generar esta medida. Sin embargo, ante el aumento de fraudes y estafas online, decidimos priorizar tu seguridad y la de nuestras 
                operaciones por encima de todo. En Automotores Margaret, trabajamos cada día para ofrecerte un proceso de compra confiable, 
                transparente y sin sorpresas, porque tu tranquilidad al comprar es nuestra mayor garantía.
            </p>
        </div>
    </div>
</div>



<?php
incluirTemplate('whatsapp');
incluirTemplate('footer');
?>