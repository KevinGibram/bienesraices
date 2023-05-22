<?php
    require('../../includes/config/database.php');
    $db = conectarDB();

    if($_SERVER["REQUEST_METHOD"] === 'GET'){
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';
    }

    require('../../includes/funciones.php');
    incluteTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a class="boton-verde" href="/admin">Volver</a>

        <for class="formulario" method="GET" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo">

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Valor">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="ej:3" min=1 max=9>

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="ej:3" min=1 max=9>

                <label for="estacionamientos">Estacionamientos</label>
                <input type="number" id="estacionamientos" name="estacionamientos" placeholder="ej:3">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select>
                    <option value="1">kevin</option>
                    <option value="2">maria</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton-verde">
        </for>
    </main>
    
<?php
    incluteTemplate('footer');
?>