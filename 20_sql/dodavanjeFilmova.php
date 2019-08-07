<?php

$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "videoteka";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
}

echo "Uspesna konekcija";

echo "<br>";
mysqli_set_charset($conn, "utf8");

//$dodavanje = "INSERT INTO pacijenti (id, god_rodjenja, ime, prezime, tezina, visina)
//    VALUES(14, '1999', 'Teca', 'Ljiljkovic', 83, 184)";
$dodavanje = "INSERT INTO filmovi (id, naslov, reziser, god_izdavanja, zanr, ocena)
                            VALUES(11, 'Maratonci Trce..', 'Slobodan Šijan', 1982, 'komedija', 9.0)";



if (mysqli_query($conn, $dodavanje)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .
    mysqli_error($conn);
}
