<?php

//importar la base de datos
require 'includes/config/database.php';
$db = conectarDB();

//crear un email y password
$email = "correo@correo.com";
$password = "12345";

//query para crear el usuario
$query = "INSERT INTO usuarios(id, email, password) VALUES ('1', '$email', '$password')";

echo $query;

//agregarlo a la base de datos
mysqli_query($db, $query);