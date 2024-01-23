<?php
    session_start();

    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                <img src="/build/img/logo.svg" alt="logotipo de bienes raices">
                </a>

                <div class="barra-menu">
                    <img src="/build/img/barras.svg">
                </div>

                <div class="dark-mode">
                    <img class="dark-mode-boton icono" src="/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="/anuncios.php">Anuncios</a>
                        <a href="/blog.php">Blog</a>
                        <a href="/contacto.php">Contacto</a>
                        <?php if($auth) : ?>
                            <a href="/cerrar-sesion.php">Cerrar Cesión </a>
                        <?php endif; ?>
                    </nav>
                </div>
                
                
            </div>
            <?php if($inicio) { ?>
                <h1>Venta de Casas y Apartamentos Exclusivos de Lujo</h1> 
            <?php }; ?>
        </div>
    </header>   