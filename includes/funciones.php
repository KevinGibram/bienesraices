<?php

require 'app.php';

function incluteTemplate( string $nombre ,bool $inicio = false){

    include TEMPLATE_URL ."/{$nombre}.php";
}

function estaAunticado() : bool {
    session_start();

    $auth = $_SESSION['login'];
    if($auth){
        return true;
    }

    return false;
}