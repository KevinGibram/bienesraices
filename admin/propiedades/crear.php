<?php
    require('../../includes/config/database.php');
    $db = conectarDB();
    
    //crear array de errores
    $errores=[];
    
    //guardando los datos en variables
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

        if(!$titulo){
        $errores[] = 'El titulo es obligatorio';
        }
        if(!$precio){
        $errores[] = 'El precio es obligatorio';
        }
        if(strlen($descripcion) < 50){
            $errores[] = 'La descripcion no puede ir vacia y deve tener minimo 50 caracteres';
        }
        if(!$habitaciones){
            $errores[] = 'El numero de habitaciones no puede ir vacio';
        }
        if(!$wc){
            $errores[] = 'El numero de baños no puede ir vacio';
        }
        if(!$estacionamientos){
            $errores[] = 'El numero de lugares de estacionamiento no puede ir vacio';
        }
        if(!$vendedores_id){
            $errores[] = 'Seleccione un vendedor';
        }

        // echo '<pre>';
        // var_dump($errores);
        // echo '</pre>';
        // exit;

        //validando que el array de errores este vacio
        if(empty($errores)){
            $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id )
            VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos', '$vendedores_id')" ;

            // echo $query;
        //insertar valores a la base de datos
            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo 'los datos se almacenaron correctamente';
            }
        }  
    }

    require('../../includes/funciones.php');
    incluteTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a class="boton-verde" href="/admin">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

            
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
                    <option>--SELECIONE UNA OPCION--</option>
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