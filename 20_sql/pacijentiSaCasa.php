<html>

<head>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
    <p>Ovo je moj lep sajt.</p>
    <p>Ovo su moji lepi pacijenti:</p>
    <?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $database = "ambulanta";

    $conn = mysqli_connect(
        $servername,
        $username,
        $password,
        $database
    );
    if (!$conn) {
        die("Neuspela konekcija. Razlog: "
            . mysqli_connect_error()
            . "</body></html>");
    }
    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT ime, prezime, visina, 
        tezina, god_rodjenja FROM pacijenti";
    $result = mysqli_query($conn, $sql);
    // Da li postoje redovi u tabeli??
    if ($result != false) {
        if (mysqli_num_rows($result) == 0) {
            echo "<p>Ne postoje pacijenti u bazi.</p>";
        } else {
            echo "<ul>";
            $red = mysqli_fetch_assoc($result);
            while ($red != false) {
                // Red pisemo u listu
                echo "<li>";
                echo "Pacijent " . $red["ime"] . " " . $red["prezime"];
                echo " ima visinu: " . $red["visina"]
                    . ", tezinu: " . $red["tezina"]
                    . ", godina rodjenja: "
                    . $red["god_rodjenja"];
                echo "</li>";
                // Dohvatimo novi red
                $red = mysqli_fetch_assoc($result);
            }
            echo "</ul>";
        }
    } else {
        echo "<p>Upit nije uspesno izvrsen</p>";
    }

    // Stampanje tabele
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi.</p>";
    } else {
        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Ime pacijenta</th>";
        echo "<th>Prezime pacijenta</th>";
        echo "<th>Visina</th>";
        echo "<th>Težina</th>";
        echo "<th>Godina rođenja</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ime"] . "</td>";
            echo "<td>" . $row["prezime"] . "</td>";
            echo "<td>" . $row["visina"] . "</td>";
            echo "<td>" . $row["tezina"] . "</td>";
            echo "<td>" . $row["god_rodjenja"] . "</td>";
            echo "</tr>";
        } // end-while
        echo "</table>";
    }


    // Stampanje tabele - svi pacijenti
    // poredjani po visini opadajuce
    $sql = "SELECT ime, prezime, tezina,
        visina, god_rodjenja FROM pacijenti
        ORDER BY visina DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi.</p>";
    } else {
        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Ime pacijenta</th>";
        echo "<th>Prezime pacijenta</th>";
        echo "<th>Visina</th>";
        echo "<th>Težina</th>";
        echo "<th>Godina rođenja</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ime"] . "</td>";
            echo "<td>" . $row["prezime"] . "</td>";
            echo "<td>" . $row["visina"] . "</td>";
            echo "<td>" . $row["tezina"] . "</td>";
            echo "<td>" . $row["god_rodjenja"] . "</td>";
            echo "</tr>";
        } // end-while
        echo "</table>";
    }


    // Svi pacijenti cije je prezime Petrovic
    echo "<p>Svi pacijenti cije je prezime Petrovic</p>";
    $sql = "SELECT ime, prezime, tezina,
        visina, god_rodjenja FROM pacijenti
        WHERE prezime = 'Petrović'
        ORDER BY ime";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<p>Ne postoje pacijenti u bazi.</p>";
    } else {
        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Ime pacijenta</th>";
        echo "<th>Prezime pacijenta</th>";
        echo "<th>Visina</th>";
        echo "<th>Težina</th>";
        echo "<th>Godina rođenja</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ime"] . "</td>";
            echo "<td>" . $row["prezime"] . "</td>";
            echo "<td>" . $row["visina"] . "</td>";
            echo "<td>" . $row["tezina"] . "</td>";
            echo "<td>" . $row["god_rodjenja"] . "</td>";
            echo "</tr>";
        } // end-while
        echo "</table>";
    }

    // Odredi sva razlicita prezimena pacijenata u bazi,
    // i ispisati pacijente sa datim prezimenom
    $sql = "SELECT DISTINCT prezime FROM pacijenti ORDER by prezime";
    $result = mysqli_query($conn, $sql);
    while ($red = mysqli_fetch_assoc($result)) {
        $prezime = $red["prezime"];
        echo "<p>Pacijenti cije je 
            prezime $prezime:</p>";
        $sql1 = "SELECT * FROM pacijenti
            WHERE prezime='$prezime'
            ORDER BY ime";
        $result1 = mysqli_query($conn, $sql1);
        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Ime pacijenta</th>";
        echo "<th>Prezime pacijenta</th>";
        echo "<th>Visina</th>";
        echo "<th>Težina</th>";
        echo "<th>Godina rođenja</th>";
        echo "</tr>";
        while ($row1 = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td>" . $row1["ime"] . "</td>";
            echo "<td>" . $row1["prezime"] . "</td>";
            echo "<td>" . $row1["visina"] . "</td>";
            echo "<td>" . $row1["tezina"] . "</td>";
            echo "<td>" . $row1["god_rodjenja"] . "</td>";
            echo "</tr>";
        } // end-while
        echo "</table>";
    }
    ?>
</body>

</html>