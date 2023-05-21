<?php
    include './includes/template/header.php';
?>

        <main class="contenedor-nosotros">
            <h1>Conoce Sobre Nosotros</h1>
            <div class="nosotros">
                <div class="nosotros-imagen">
                    <picture>
                        <picture>
                            <source srcset="build/img/nosotros.webp" type="image/webp">
                            <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                            <img src="build/img/nosotros.jpg" alt="imagenes de Nosotros">
                        </picture>
                    </picture>
                </div>
                <div>
                    <h2>21 Años de Experiencia</h2>
                    <p>Lorem, consequatur beatae quas voluptatem quis repellat tempora accusantium, eveniet voluptatum dolore laboriosam ipsam vero unde, iusto veniam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum possimus tempora id eos, soluta dicta ex exercitationem quam, expedita saepe adipisci repellat explicabo eius doloribus quae minima ab sit! Accusamus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, error quas soluta aut, expedita nobis nostrum eligendi alias dolorem explicabo debitis iste recusandae minus atque corporis eveniet deserunt adipisci ducimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quis facilis quia atque modi esse consequatur iusto quos porro, sequi suscipit corrupti, saepe eos molestias corporis iure incidunt voluptatem praesentium!</p>
                </div>
            </div>
        </main>

    <section class="contenedor seccion">

        <h1>Más sobre nosotros</h1>
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
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>