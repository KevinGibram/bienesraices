<?php

require 'app.php';

function incluteTemplate( $nombre , $inicio = false){

    include TEMPLATE_URL ."/{$nombre}.php";
}