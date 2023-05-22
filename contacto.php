<?php
    require '/includes/funciones.php';
    incluteTemplate('header', $inicio = false);
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="imagenes de nuestro trabajo">
        </picture>  

        <h2>Llene el formulario de contacto</h2>
        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre" >Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">
                <label for="email" >E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">
                <label for="tel">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="tel">
                <label for="textarea">Mensaje</label>
                <textarea id="textarea"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion de propiedad</legend>
                <label for="select">Vende o Compra</label>
                <select>
                    <option value="" disabled selected>--Seleccionar opcion--</option>
                    <option value="vende">Vende</option>
                    <option value="compre">Compra</option>
                </select>
                <label for="cantidad">Cantidad</label>
                <input type="number">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div>
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-email">E-Mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                

                <p>Si eligio telefono, elija la fecha y hora para ser contactado</p>

                <label for="fecha">Fecha</label>
                <input type="date">
                <label for="hora">Hora</label>
                <input type="time" min="08:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
     incluteTemplate('footer');
    ?>