<?php
//importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//consultar
$query = "SELECT * FROM propiedades LIMIT $limite";

//obtener resultado
$resultado = mysqli_query($db, $query);
    
?>

<div class="contenedor-anuncios"> 

    <?php

         while($propiedad = mysqli_fetch_assoc($resultado)): 
    
    ?>
            <div class="anuncio">

                <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de apartamento con exelente vista">

                <div class="contenedor-info">
                        <h3><?php echo $propiedad['titulo']; ?></h3>
                        <p><?php echo $propiedad['descripcion']; ?></p>
                        <p class="precio">$<?php echo $propiedad['precio']; ?></p>

                        <ul>
                            <li class="icono"><img src="build/img/icono_wc.svg" alt="wc"><?php echo $propiedad['wc']; ?></li>
                            <li class="icono"><img src="build/img/icono_estacionamiento.svg" alt="estacionamiento"><?php echo $propiedad['estacionamiento']; ?></li>
                            <li class="icono"><img src="build/img/icono_dormitorio.svg" alt="dormitorio"><?php echo $propiedad['habitaciones']; ?></li>
                        </ul>
                        <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Ver Propiedades</a>
                </div> <!-- .contenido info -->
            </div> <!-- .anuncio -->
            
            <?php endwhile; ?>
</div> <!-- .contenedor-anuncios -->

<?php
    //Cerrar la conexion
    mysqli_close($db);
?>