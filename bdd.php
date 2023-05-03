<?php

$serveurname= 'localhost';
$username = 'root';
$password = '';

$db_name = "projet1";

$conn = mysqli_connect($serveurname, $username, $password, $db_name);

if (!$conn) {
    echo "échec de la connexion !";
}