<?php
    require 'includes/funciones.php';
    incluteTemplate('header', $inicio = false);
?>

    <main class="contenedor seccion">
        <section class="seccion contacto">

            <h3>Casas y Depas en venta</h3>
           
            
        <?php
            $limite = 10;
            include 'includes/template/anuncios.php';
        ?>
    
        </section>
    </main>

    <?php
     incluteTemplate('footer');
    ?>