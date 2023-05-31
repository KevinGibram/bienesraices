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
    </main>

<?php
    incluteTemplate('footer')
?>