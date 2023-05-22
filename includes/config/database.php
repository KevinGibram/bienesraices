<?php

function conectarDB() : mysqli { //retorna una conexion de mysqli
    $db = mysqli_connect('localhost', 'root', '0911', 'bienesraices_crud');

    if( !$db ){
        echo 'No nos hemos podido conectar a la base de datos amigo';
        exit;
    }

    return $db;
}