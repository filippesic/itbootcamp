<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 10</title>
    <style>
        body {
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <?php

    // 1. Zadatak - FOR

    $pr1 = 1;
    $pr2 = 20;
    $zb1 = 1;
    $zb2 = 30;
    $sumaF = 0;
    $proizF = 1;

    for ($i = $pr1; $i <= $pr2; $i++) {
        $proizF *= $i;
    }
    echo "ProizvodF je: $proizF";
    echo "<br>";

    for ($i = $zb1; $i <= $zb2; $i++) {
        $sumaF += $i;
    }
    echo "SumaF je: $sumaF";
    echo "<br>";


    echo "ProizvodF - sumaF: $proizF - $sumaF" . " = " . ($proizF - $sumaF);
    echo "<hr>";

    // WHILE

    $k = 1;
    $j = 0;
    $sumaW = 0;
    $proizW = 1;

    while ($j <= 30) {
        $sumaW += $j;
        $j++;
    }
    echo "SumaW je: $sumaW";
    echo "<br>";

    while ($k <= 20) {
        $proizW *= $k;
        $k++;
    }
    echo "ProizvodW je: $proizW";
    echo "<br>";

    echo "ProizvodW - sumaW: $proizW - $sumaW" . " = " . ($proizW - $sumaW);
    echo "<hr>";

    // 2. Zadatak kub FOR


    $n = 2;
    $m = 6;
    $sumaKF = 0;


    if ($n > $m) {
        echo "Moze i obrnuto. <br>";
        for ($p = $m; $p <= $n; $p++) {
            $sumaKF += (pow($p, 3));
        }
        echo "Suma kubovaF od $n do $m je: $sumaKF";
    } else {
        for ($p = $n; $p <= $m; $p++) {
            $sumaKF += (pow($p, 3));
        }

        echo "Suma kubovaF od $n do $m je: $sumaKF";
    }
    echo "<br>";

    // WHILE


    // $n2 = 2;
    // $m2 = 5;
    $x = $n;
    $sumaKW = 0;


    while ($x <= $m) {
        $sumaKW += (pow($x, 3));
        $x++;
    }


    echo "Suma kubovaW od $n do $m je: $sumaKW";




    ?>
</body>

</html>