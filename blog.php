<?php
    require 'includes/funciones.php';
    incluteTemplate('header', $inicio = false);
?>
    <main class="contenedor seccion">
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

            <article class="blog">
                <div>
                    <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <source srcset="build/img/blog3.jpg" type="image/jpeg">
                        <img src="build/img/blog3.jpg" alt="imagenes de nuestro trabajo">
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
                        <source srcset="build/img/blog4.webp" type="image/webp">
                        <source srcset="build/img/blog4.jpg" type="image/jpeg">
                        <img src="build/img/blog4.jpg" alt="imagenes de nuestro trabajo">
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
    </main>

    <?php
     incluteTemplate('footer');
    ?>
