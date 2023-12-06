<?php
    require 'includes/funciones.php';
    incluteTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div>
            
        </div>
        <div class="contenedor-iconos">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono de seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p> Ipsam nemo illum reiciendis blanditiis? Perspiciatis nostrum doloremque tenetur rerum commodi, culpa sunt facilis? Rerum, illum a.</p>
            </div>
        
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono de dinero" loading="lazy">
                <h3>dinero</h3>
                <p> Ipsam nemo illum reiciendis blanditiis? Perspiciatis nostrum doloremque tenetur rerum commodi, culpa sunt facilis? Rerum, illum a.</p>
            </div>
        
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono de tiempo" loading="lazy">
                <h3>tiempo</h3>
                <p> Ipsam nemo illum reiciendis blanditiis? Perspiciatis nostrum doloremque tenetur rerum commodi, culpa sunt facilis? Rerum, illum a.</p>
            </div>
            
        </div> <!-- .contenedor-iconos -->
    </main>

    <section class="seccion contacto">
        <h3>Casas y Depas en venta</h3>

        <?php
            $limite = 3;
            include 'includes/template/anuncios.php';
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton boton-verde">Ver Propiedades</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ullam ea quod vero provident. </p>
        <a class="boton-amarillo" href="contacto.php">Contacto</a>
    </section>

    <div class="cotenedor seccion seccion-inferior">
        <section>
            <h3>Nuestro Blog</h3>
            <article class="blog">
                <div>
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="imagenes de nuestro trabajo">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito por: <span>14/05/2023 </span> por: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium doloremque quisquam voluptate.</p>
                    </a>
                   
                </div>
            </article>

            <article class="blog">
                <div>
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="imagenes de nuestro trabajo">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito por: <span>14/05/2023 </span> por: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium doloremque quisquam voluptate.</p>
                    </a>
                   
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium doloremque quisquam voluptate.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste aut maiores ipsum repellat magni tempora illo dolorum.
                </blockquote>
                <p>-Kevin Gibram Rincon</p>
            </div>
        </section>  
    </div>

    <?php
     incluteTemplate('footer');
    ?>