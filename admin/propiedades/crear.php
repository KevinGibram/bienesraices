<?php
    require('../../includes/config/database.php');
    $db = conectarDB();
    

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // echo '<pre>';
        // var_dump($_POST );
        // echo '</pre>';

        $titulo = $_POST['titulo'];
        $precio =$_POST['precio'];
        $descripcion =$_POST['descripcion'];
        $habitaciones =$_POST['habitaciones'];
        $wc =$_POST['wc'];
        $estacionamientos =$_POST['estacionamientos'];
        $vendedores_id =$_POST['vendedores_id'];


        //insertar valores a la base de datos

        $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id )
        VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos', '$vendedores_id')" ;

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if($resultado){
            echo 'los datos se almacenaron correctamente';
        }
    }

    require('../../includes/funciones.php');
    incluteTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a class="boton-verde" href="/admin">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo">

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Valor">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen"  accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="ej:3" min=1 max=9>

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="ej:3" min=1 max=9>

                <label for="estacionamientos">Estacionamientos</label>
                <input type="number" id="estacionamientos" name="estacionamientos" placeholder="ej:3">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedores_id" >
                    <option value="1">kevin</option>
                    <option value="2">maria</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton-verde">
        </form>
    </main>
    
<?php
    incluteTemplate('footer');
?>