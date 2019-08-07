<?php

$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "ambulanta";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
}

echo "Uspesna konekcija";