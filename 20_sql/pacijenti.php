<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacijenti</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "ambulanta";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
    }

    echo "Uspesna konekcija";

    echo "<br>";
    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti;";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postije pacijenti u bazi</p>";
    } else {
        echo "<ul>";
        $red = mysqli_fetch_assoc($result);
        while ($red != FALSE) {
            // Nesto radimo sa redom - red pisemo u listu
            echo "<li>";
            echo "Pacijent " . $red["ime"] . " " . $red["prezime"];
            echo " ima visinu " . $red["visina"] . "cm, tezinu: "
                . $red["tezina"] . "kg godina rodjenja " . $red["god_rodjenja"];
            $red = mysqli_fetch_array($result);
        }
        // Ima iterator za redove u bazi, kada vise nema redova onda vraca FALSE
        // Takodje funcija radi preko return-a
        echo "</ul>";
    }

    echo "<br>";
    echo "<br>";

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti;";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi</p>";
    } else {
        $red = mysqli_fetch_assoc($result);
        echo "<table border=1>";

        echo "<th>";
        echo "Ime";
        echo "</th>";
        echo "<th>";
        echo "Prezime";
        echo "</th>";
        echo "<th>";
        echo "Visina";
        echo "</th>";
        echo "<th>";
        echo "Tezina";
        echo "</th>";
        echo "<th>";
        echo "Godina rodjenja";
        echo "</th>";

        while ($red != FALSE) {

            echo "<tr>";

            echo "<td>";
            echo $red['ime'];
            echo "</td>";

            echo "<td>";
            echo $red['prezime'];
            echo "</td>";

            echo "<td>";
            echo $red['visina'];
            echo "</td>";

            echo "<td>";
            echo $red['tezina'];
            echo "</td>";

            echo "<td>";
            echo $red['god_rodjenja'];
            echo "</td>";

            echo "</tr>";
            $red = mysqli_fetch_assoc($result);
        }

        echo "</table>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<h2>PO VISINI</h2>";

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti ORDER BY visina DESC;";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi</p>";
    } else {
        $red = mysqli_fetch_assoc($result);
        echo "<table border=1>";

        echo "<th>";
        echo "Ime";
        echo "</th>";
        echo "<th>";
        echo "Prezime";
        echo "</th>";
        echo "<th>";
        echo "Visina";
        echo "</th>";
        echo "<th>";
        echo "Tezina";
        echo "</th>";
        echo "<th>";
        echo "Godina rodjenja";
        echo "</th>";

        while ($red != FALSE) {

            echo "<tr>";

            echo "<td>";
            echo $red['ime'];
            echo "</td>";

            echo "<td>";
            echo $red['prezime'];
            echo "</td>";

            echo "<td>";
            echo $red['visina'];
            echo "</td>";

            echo "<td>";
            echo $red['tezina'];
            echo "</td>";

            echo "<td>";
            echo $red['god_rodjenja'];
            echo "</td>";

            echo "</tr>";
            $red = mysqli_fetch_assoc($result);
        }

        echo "</table>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<h2>PO TEZINI</h2>";

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti ORDER BY tezina DESC;";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi</p>";
    } else {
        $red = mysqli_fetch_assoc($result);
        echo "<table border=1>";

        echo "<th>";
        echo "Ime";
        echo "</th>";
        echo "<th>";
        echo "Prezime";
        echo "</th>";
        echo "<th>";
        echo "Visina";
        echo "</th>";
        echo "<th>";
        echo "Tezina";
        echo "</th>";
        echo "<th>";
        echo "Godina rodjenja";
        echo "</th>";

        while ($red != FALSE) {

            echo "<tr>";

            echo "<td>";
            echo $red['ime'];
            echo "</td>";

            echo "<td>";
            echo $red['prezime'];
            echo "</td>";

            echo "<td>";
            echo $red['visina'];
            echo "</td>";

            echo "<td>";
            echo $red['tezina'];
            echo "</td>";

            echo "<td>";
            echo $red['god_rodjenja'];
            echo "</td>";

            echo "</tr>";
            $red = mysqli_fetch_assoc($result);
        }

        echo "</table>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<h2>PO GODINI RODJENJA</h2>";

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti ORDER BY god_rodjenja DESC;";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi</p>";
    } else {
        $red = mysqli_fetch_assoc($result);
        echo "<table border=1>";

        echo "<th>";
        echo "Ime";
        echo "</th>";
        echo "<th>";
        echo "Prezime";
        echo "</th>";
        echo "<th>";
        echo "Visina";
        echo "</th>";
        echo "<th>";
        echo "Tezina";
        echo "</th>";
        echo "<th>";
        echo "Godina rodjenja";
        echo "</th>";

        while ($red != FALSE) {

            echo "<tr>";

            echo "<td>";
            echo $red['ime'];
            echo "</td>";

            echo "<td>";
            echo $red['prezime'];
            echo "</td>";

            echo "<td>";
            echo $red['visina'];
            echo "</td>";

            echo "<td>";
            echo $red['tezina'];
            echo "</td>";

            echo "<td>";
            echo $red['god_rodjenja'];
            echo "</td>";

            echo "</tr>";
            $red = mysqli_fetch_assoc($result);
        }

        echo "</table>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";

    // Svi pacijenti cije je prezime Petrovic

    echo "<h2>PO GODINI RODJENJA</h2>";

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti
            WHERE prezime = 'Perić' ORDER BY ime ASC;";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi</p>";
    } else {
        $red = mysqli_fetch_assoc($result);
        echo "<table border=1>";

        echo "<th>";
        echo "Ime";
        echo "</th>";
        echo "<th>";
        echo "Prezime";
        echo "</th>";
        echo "<th>";
        echo "Visina";
        echo "</th>";
        echo "<th>";
        echo "Tezina";
        echo "</th>";
        echo "<th>";
        echo "Godina rodjenja";
        echo "</th>";

        while ($red != FALSE) {

            echo "<tr>";

            echo "<td>";
            echo $red['ime'];
            echo "</td>";

            echo "<td>";
            echo $red['prezime'];
            echo "</td>";

            echo "<td>";
            echo $red['visina'];
            echo "</td>";

            echo "<td>";
            echo $red['tezina'];
            echo "</td>";

            echo "<td>";
            echo $red['god_rodjenja'];
            echo "</td>";

            echo "</tr>";
            $red = mysqli_fetch_assoc($result);
        }

        echo "</table>";
    }

    // Odrediti sva razlicita prezimena pacijenata u bazi i ispisati pacijente sa datim prezimenom

    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<h2>SVA RAZLICITA PREZIMENA</h2>";
    // TREBALO BI DA JE ISPAVLJEN SADA :|


    $sql = "SELECT DISTINCT prezime FROM pacijenti;";
    $result = mysqli_query($conn, $sql);

    while ($red = mysqli_fetch_assoc($result)) {

        $prezime = $red["prezime"];
        echo "Pacijenti cije je prezime: $prezime";
        $sql1 = "SELECT * FROM pacijenti WHERE prezime = '$prezime' ORDER BY ime;";
        $result1 = mysqli_query($conn, $sql1);

        echo "<table class='pac'>";

        echo "<tr>";
        echo "<th>";
        echo "Ime";
        echo "</th>";
        echo "<th>";
        echo "Prezime";
        echo "</th>";
        echo "<th>";
        echo "Visina";
        echo "</th>";
        echo "<th>";
        echo "Tezina";
        echo "</th>";
        echo "<th>";
        echo "Godina rodjenja";
        echo "</th>";
        echo "</tr>";

        while ($red1 = mysqli_fetch_assoc($result1)) {


            echo "<tr>";

            echo "<td>";
            echo $red1['ime'];
            echo "</td>";

            echo "<td>";
            echo $red1['prezime'];
            echo "</td>";

            echo "<td>";
            echo $red1['visina'];
            echo "</td>";

            echo "<td>";
            echo $red1['tezina'];
            echo "</td>";

            echo "<td>";
            echo $red1['god_rodjenja'];
            echo "</td>";

            echo "</tr>";
            $red = mysqli_fetch_assoc($result1);
        }
        echo "</table>";
    }


    ?>
</body>

</html>