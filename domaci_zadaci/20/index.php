<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci Zadatak 20</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Svi filmovi sortirani po naslovu</h2>
    <?php

    $servename = "localhost";
    $username = "admin";
    $password = "admin123";
    $database = "videoteka";

    $conn = mysqli_connect($servename, $username, $password, $database);

    if (!$conn) {
        die("Konekcija nije uspela, razlog: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT * FROM filmovi ORDER BY naslov ASC;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "Ne postoje filmovi u bazi";
    } else {
        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Naslov</th>";
        echo "<th>Reziser</th>";
        echo "<th>Godina izdavanja</th>";
        echo "<th>Zanr</th>";
        echo "<th>Ocena</th>";
        echo "</tr>";

        while ($red = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $red["naslov"] . "</td>";
            echo "<td>" . $red["reziser"] . "</td>";
            echo "<td>" . $red["god_izdavanja"] . "</td>";
            echo "<td>" . $red["zanr"] . "</td>";
            echo "<td>" . $red["ocena"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    echo "<h2>Svi najbolje rangirani filmovi sortirani po naslovu</h2>";


    $sql = "SELECT * FROM filmovi ORDER BY ocena DESC, naslov ASC;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "Ne postoje filmovi u bazi";
    } else {
        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Naslov</th>";
        echo "<th>Reziser</th>";
        echo "<th>Godina izdavanja</th>";
        echo "<th>Zanr</th>";
        echo "<th>Ocena</th>";
        echo "</tr>";

        while ($red = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $red["naslov"] . "</td>";
            echo "<td>" . $red["reziser"] . "</td>";
            echo "<td>" . $red["god_izdavanja"] . "</td>";
            echo "<td>" . $red["zanr"] . "</td>";
            echo "<td>" . $red["ocena"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    echo "<h2>Svaki zanr po jedna tabela</h2>";


    $sql = "SELECT DISTINCT zanr FROM filmovi ORDER BY naslov ASC;";
    $result = mysqli_query($conn, $sql);
    while($red = mysqli_fetch_assoc($result)) {

        $zanr = $red["zanr"];
        echo "Filmovi ciji zanr je zanr: $zanr";
        $sql1 = "SELECT * FROM filmovi WHERE zanr='$zanr' ORDER BY naslov;";

        $result1 = mysqli_query($conn, $sql1);

        echo "<table class='pac'>";
        echo "<tr>";
        echo "<th>Naslov</th>";
        echo "<th>Reziser</th>";
        echo "<th>Godina izdavanja</th>";
        echo "<th>Zanr</th>";
        echo "<th>Ocena</th>";
        echo "</tr>";

        while($red1 = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td>" . $red1["naslov"] . "</td>";
            echo "<td>" . $red1["reziser"] . "</td>";
            echo "<td>" . $red1["god_izdavanja"] . "</td>";
            echo "<td>" . $red1["zanr"] . "</td>";
            echo "<td>" . $red1["ocena"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }



    ?>
</body>

</html>