<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<div class="hero">
</div>

<div class="formulario">
    <div class="formulario-grid contenedor">
        <div class="grid-form">
            <h1>Contacto</h1>

            <form id="contactForm" onsubmit="return sendMessage()" class="form">
                    <div class="field">
                        <div class="campo_selector">
                            <label for="motivo" class="labels">Motivo de contacto</label>
                            <select id="motivo" name="motivo" required class="campo">
                                <option value="" disabled selected>Seleccione una opción</option>

                                <option value="Me interesa un vehículo">
                                    Me interesa un vehículo
                                </option>
                                <option value="Probar un vehículo">
                                    Probar un vehículo
                                </option>
                                <option value="Vender mi vehículo">
                                    Vender mi vehículo
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label for="nombre" class="labels">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Escriba su nombre" class="campo">
                    </div>
                    <div class="field">
                        <label for="telefono" class="labels">Teléfono de contacto</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Escriba su teléfono" class="campo">
                    </div>

                    <div class="field">
                        <input type="checkbox" id="acepto" name="acepto" checked disabled>
                        <label for="acepto">
                            Acepto que se me contacte por WhatsApp o llamada telefónica al número indicado como contacto por el motivo seleccionado.
                            Sus datos no se utilizarán para ningún otro medio o motivo.
                        </label>
                    </div>

                    <button type="submit" class="enviar"><i class="fab fa-whatsapp"></i>Contactar</button>
            </form>
        </div>


        <div class="contactos">
            <p class="whats"><i class="fab fa-whatsapp"></i>Carlos: 351 3511031</p>
            <p class="whats"><i class="fab fa-whatsapp"></i>Graciela: 351 2064739</p>
        </div>

    </div>
</div>


<?php
incluirTemplate('whatsapp');
incluirTemplate('footer');
?>