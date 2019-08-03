<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezbe foreach</title>
</head>

<body>
    <?php

    $niz = array(23, 42, 11, 89,);

    foreach ($niz as $vrednost) {
        echo "$vrednost <br>";
    }
    echo "<hr>";

    $nizS = array("BMW", "Audi", "Porsche", "Koenigsegg", "Tesla");

    foreach ($nizS as $vrednostS) {
        echo $vrednostS . "<br>";
    }
    echo "<hr>";


    foreach (array(4, 3, 2, 1) as $vredB) {
        echo "$vredB" . "<br>";
    }
    echo "<hr>";


    // zbir elementata

    $suma = 0;

    foreach ($niz as $element) {
        $suma += $element;
    }

    echo $suma;
    echo "<br>";
    echo "<hr>";


    // maks

    $max = $niz[0];

    for ($i = 1; $i < count($niz); $i++) {
        if ($niz[$i] > $max) {
            $max = $niz[$i];
        }
    }

    echo $max;
    echo "<br>";
    echo "<hr>";

    // indeks najveceg elementa


    $nizCount = count($niz);
    $maks = 0;
    $index = 0;

    for ($i = 0; $i < $nizCount; $i++) {
        if ($maks < $niz[$i]) {
            $maks = $niz[$i];
            $index++;
        }
    }

    echo "Najveci element niza je: " . $maks . ", a njegov indeks je: " . $index;

    echo "<br>";
    echo "<hr>";


    // broj elementa veci od srednje vrednosti

    $niz = array(23, 3, 11, 45, 58, 35, 77);
    $suma = 0;
    $indexSr = 0;

    foreach ($niz as $vredS) {
        $suma += $vredS;
    }

    $sredV = $suma / count($niz);

    foreach ($niz as $vredS) {
        if ($vredS > $sredV) {
            $indexSr++;
        }
    }


    echo "Elementi veci od srednje vrednosti: " . $indexSr;
    echo "<br>";
    echo "Srednja vrednost je: " . $sredV;
    echo "<br>";


    // zbir pozivitnih elementa

    $array = array(2, 3, 5, 6, 44, 66, 4, 66, 33, -2, -123, -43);
    $sumaM = 0;

    foreach ($array as $vredS) {
        if ($vredS > 0) {
            $sumaM += $vredS;
        }
    }

    echo $sumaM;
    echo "<br>";
    echo "<hr>";


    // broj parnih elemenata u nizu

    $brojP = 0;

    foreach ($array as $vr) {
        if ($vr % 2 == 0) {
            $brojP++;
        }
    }

    echo "Broj parnih elementa u nizu: $brojP";

    echo "<br>";
    echo "<hr>";


    // broj elemenata sa parnim indeksom

    $indexParni = 0;
    $sumaEl = 0;

    foreach ($array as $el) {
        $indexParni++;
        if ($indexParni % 2 == 0) {
            $sumaEl += $el;
        }
    }

    echo $sumaEl;

    echo "<br>";
    echo "<hr>";

    // promeniti znak svakom elementu u nizu

    $flipNiz = array(10, 20, 30, 40, -15, -25, -35);

    foreach ($flipNiz as $vr2) {
        if ($vr2 > 0) {
            echo $vr2 - ($vr2 * 2) . "<br>";
        } else {
            echo $vr2 * (-1) . "<br>";
        }
    }

    echo "<br>";
    echo "<hr>";

    // broj parnih elemenata sa neparnim indeksom

    $neparni = 0;
    $indexP = 0;

    foreach ($flipNiz as $element) {
        if ($indexP % 2 == 0 && $element % 2 != 0) {
            $element = $element * (-1);
            $indexP++;
        }
    }

    echo "Elementi sa neparnim elementom, ali sa parnim indeksom: " . $indexP;

    echo "<br>";
    echo "<hr>";

    // broj neparnih elemenata sa parnim indeksom

    $indexPP = 0;
    $br = 0;

    foreach ($flipNiz as $element) {
        // $indexPP = $indexPP + 2;
        if ($indexPP % 2 == 0 && $element % 2 != 0) {
            $br++;
        }
    }

    echo $indexPP;


    ?>
</body>

</html>