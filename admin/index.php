<?php

echo "<pre>";
var_dump($_POST);
echo "</pre>";

//importar la conexion

require '../includes/config/database.php';
$db = conectarDB();

//escribir el query

$query = "SELECT * FROM  propiedades";

//consultar la BD

$resultadoConsulta = mysqli_query($db, $query);

//muestra mensaje condicional

    $resultado = $_GET['resultado'] ?? null;

    require('../includes/funciones.php');
    incluteTemplate('header', $inicio = false);
?>

    <main class="seccion">
        <h1>Administrador de Bienes Raices</h1>
    <?php if($resultado === '1') : ?>
        <p class="alerta">Registrado Correctamente</p>
    <?php elseif($resultado === '2') : ?> 
        <p class="alerta">Actualizado Correctamente</p>
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
            <tbody> <!-- Mostrar los resultados -->
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td>  <img src="/imagenes/<?php echo $propiedad['imagen']; ?> " class="imagenPropiedad"> </td>
                    <td> $ <?php echo $propiedad['precio']; ?></td>
                    <td>
                        <form method="POST"  class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        
                        <a class="boton-amarillo-block" href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

        //cerrar la conexion
        mysqli_close($db);
    incluteTemplate('footer')
?>