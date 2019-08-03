<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 16</title>
    <style>
        .crv {
            color: red;
        }

        .plv {
            color: blue;
        }
    </style>
</head>

<body>
    <?php

    $predmeti = array("Matematika" => 7, "Fizika" => 7, "Beton" => 6, "Statika" => 9, "CAD" => 9);

    echo "Svi predmeti i njihove ocene: ";
    echo "<br>";

    foreach ($predmeti as $predmet => $ocena) {
        echo "<span class='plv'>$predmet </span>";
        echo "<span class='crv'>$ocena</span>";
        echo "<br>";
    }

    echo "<hr>";

    foreach ($predmeti as $predmet => $ocena) {
        $max = 0;
        if ($ocena > $max) {
            $max = $ocena;
        }
    }

    echo "Najveca ocena studenta je: <span class='crv'>$max</span>, a predmeti sa tom ocenom su: ";

    foreach ($predmeti as $predmet => $ocena) {
        if ($ocena == $max) {
            echo "<span class='crv'>$predmet</span>" . " ";
        }
    }

    echo "<hr>";

    

    $suma = 0;

    foreach ($predmeti as $predmet => $ocena) {
        $suma += $ocena;
    }

    $prosecna = $suma / count($predmeti);

    echo "Prosecna ocena je: <span class='crv'>$prosecna</span>";

    echo "<br>";
    
    echo "Predmeti na kojima je student dobio vecu ocenu od prosecne: ";

    foreach ($predmeti as $predmet => $ocena) {
        if ($ocena > $prosecna) {
            echo "<span class='crv'>$predmet</span>" . " ";
        }
    }

    echo "<br>";




    ?>
</body>

</html>