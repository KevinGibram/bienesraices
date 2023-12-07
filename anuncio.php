<?php

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('location: /');
    }

    //importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//consultar
$query = "SELECT * FROM propiedades WHERE id = $id ";

//obtener resultado
$resultado = mysqli_query($db, $query);
$propiedad =
 mysqli_fetch_assoc($resultado);
    require 'includes/funciones.php';
    incluteTemplate('header', $inicio = false);
?>
    
    <main>
        <div class="contenedor-info">
            <h3><?php echo $propiedad['titulo']; ?></h3>

                <img src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de apartamento con exelente vista">

            <p class="precio">$<?php echo $propiedad['precio']; ?></p>
    
            <ul>
                <li class="icono"><img src="build/img/icono_wc.svg" alt="wc"><?php echo $propiedad['wc']; ?></li>
                <li class="icono"><img src="build/img/icono_estacionamiento.svg" alt="estacionamiento"><?php echo $propiedad['estacionamiento']; ?></li>
                <li class="icono"><img src="build/img/icono_dormitorio.svg" alt="dormitorio"><?php echo $propiedad['habitaciones']; ?></li>
            </ul>

            <p>
                <?php echo $propiedad['descripcion']; ?>
            </p>
        </div>
    </main>


    <?php
    mysqli_close($db);

     incluteTemplate('footer');
    ?>