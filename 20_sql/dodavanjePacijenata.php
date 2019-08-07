<?php

$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "ambulanta";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
}

echo "Uspesna konekcija";

echo "<br>";
mysqli_set_charset($conn, "utf8");

//$dodavanje = "INSERT INTO pacijenti (id, god_rodjenja, ime, prezime, tezina, visina)
//    VALUES(14, '1999', 'Teca', 'Ljiljkovic', 83, 184)";
// $dodavanje = 'INSERT INTO pacijenti (id, god_rodjenja, ime, prezime, tezina, visina)
// VALUES(16, 1990, "Mićko", "Sergejevič", 76, 181)';

$sql = 'INSERT INTO pacijenti (id, god_rodjenja, ime, prezime, tezina, visina)
VALUES(17, 1968, "Marica", "Maric", 67, 168);';
$sql .= 'INSERT INTO pacijenti (id, god_rodjenja, ime, prezime, tezina, visina)
VALUES(18, 1977, "Jelena", "Marcic", 54, 178);';
mysqli_multi_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .
    mysqli_error($conn);
}
