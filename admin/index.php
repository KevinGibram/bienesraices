<?php

    $resultado = $_GET['resultado'] ?? null;

    require('../includes/funciones.php');
    incluteTemplate('header', $inicio = false);
?>

    <main class="contenerdor seccion">
        <h1>Administrador de Bienes Raices</h1>
    <?php if($resultado === '1') : ?>
        <p class="alerta">Registrado Correctamente</p>
    <?php endif ?>
        <a class="boton-verde" href="/admin/propiedades/crear.php">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>imagen</th>
                    <th>precio</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en el bosque</td>
                    <td> <img src="/imagenes/a2e9d7028152cbb0f5d2cc170cdcf6cc.jpg" class="imagenPropiedad"> </td>
                    <td>$140.000.000</td>
                    <td>
                        <a class="boton-rojo-block" href="#">Eliminar</a>
                        <a class="boton-amarillo-block" href="#">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
    incluteTemplate('footer')
?>