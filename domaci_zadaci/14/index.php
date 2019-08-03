<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 14</title>
    <style>
        body {
            font-size: 1.2em;
            text-align: center;
            background-color: lightgray;
        }
        b {
            color: red;
        }
    </style>
</head>

<body>
    <?php

    // 1.

    $niz = array(-12, -76, -23, 3, -69, -88, -88, -12, -9);

    echo "Niz 1: ";
    foreach ($niz as $vrednost) {
        echo "<b>$vrednost </b>";
    }


    $max = $niz[0];
    $maxCount = 0;

    foreach ($niz as $vrednost) {
        if ($vrednost > $max) {
            $max = $vrednost;
        }
    }

    echo "<br>";
    echo "<hr>";

    for ($i = 0; $i < count($niz); $i++) {
        if ($max == $niz[$i]) {
            $maxCount++;
        }
    }


    echo "Najveci broj niza je: <b>$max</b>, a ima ih: <b>$maxCount</b>.";

    echo "<br>";
    echo "<hr>";

    // 2.

    $niz2 = array(2, 4, 13, 22, -7, 3, 20, -15, 9, 5);

    echo "Niz 2: ";
    foreach($niz2 as $vrednost) {
        echo "<b>$vrednost </b>";
    }

    echo "<br>";

    $suma = 0;
    $sredVr = 0;
    $index = 0;

    foreach ($niz2 as $vrednost) {
        $suma += $vrednost;
    }

    $sredVr = $suma / count($niz2);

    echo "Srednja vrednost drugog niza je: <b>$sredVr</b><br>";

    $fakeMin = abs($niz2[0] - $sredVr);
    // $realMin = 0;

    for ($i = 0; $i < count($niz2); $i++) {
        if (abs($niz2[$i] - $sredVr) < $fakeMin) { /* ako je razlika $i-tog elementa niza i
            $sredVr manja od moje pretpostavljene $fakeMin, to znaci da je inkrement na elementu
            najblizeg niza i tu poziciju inkrementa upisujemo u $index*/
            
            // $realMin = abs($niz[$i] - $sredVr); kao da je bespotrebno jer u if-u imam vec isto to

            // $elem = niz[$i]; isto je kao i da odstampam $niz[$index]
            $index = $i;
        }
    }

    echo "Najbliza vrednost srednjoj: <b>$niz2[$index]</b>, a indeks joj je: <b>$index</b>";
    echo "<hr>";

    // Idalje mi se cini kao da nesto nije u redu




    ?>
</body>

</html>