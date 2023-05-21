<?php
    include './includes/template/header.php';
?>
    
    <main>
        <div class="contenedor-info">
            <h3>Casas y Depas en venta</h3>
            <picture class="imagen-destacada">
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source src="build/img/destacada.jpg" type="image/jpeg">
                <img src="build/img/destacada.jpg" alt="Imagen de apartamento con exelente vista">
            </picture>

            <p class="precio">$300.000.000</p>
    
            <ul>
                <li class="icono"><img src="build/img/icono_wc.svg" alt="wc">3</li>
                <li class="icono"><img src="build/img/icono_estacionamiento.svg" alt="estacionamiento">3</li>
                <li class="icono"><img src="build/img/icono_dormitorio.svg" alt="dormitorio">4</li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed pariatur quae suscipit nisi eaque, iure cum molestias asperiores atque hic modi magnam optio, obcaecati animi. Quasi quas officiis eligendi omnis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro voluptatibus voluptatem illum accusantium perspiciatis doloribus quasi, asperiores aliquam alias sequi ducimus, amet blanditiis natus corporis perferendis facilis nulla ex? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, sed exercitationem repellat deserunt earum ex amet doloribus ad placeat sequi debitis, maiores quam ipsa distinctio nesciunt magni accusantium labore ab.
            </p>
        </div>
    </main>


    <?php
     include './includes/template/footer.php';
    ?>