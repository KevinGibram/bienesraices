<?php

require 'app.php';

function incluteTemplate( string $nombre ,bool $inicio = false){

    include TEMPLATE_URL ."/{$nombre}.php";
}