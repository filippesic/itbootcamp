<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zadatak while</title>
    <style>
        body {
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <?php

    $i = 0;

    while ($i < 20) {
        $i++;
        echo $i;
        echo "<br>";
    }

    echo "<hr>";

    $j = 20;

    while ($j >= 1) {
        echo $j;
        echo "<br>";
        $j--;
    }

    echo "<hr>";

    $k = 0;

    while ($k < 20) {
        $k += 2;
        echo $k;
        echo "<br>";
    }

    echo "<hr>";

    $l = 0;

    while ($l < 20) {
        echo 20  - $l;
        echo "<br>";
        $l++;
    }


    $m = 1;

    while ($m <= 20) {
        if ($m % 2 == 0) {
            echo $m;
            echo "<br>";
        }
        echo $m;
        echo "<br>";
        $m++;
    }

    echo "<hr>";

    $n = 2;

    while($n <= 20) {
        echo $n;
        echo "<br>";
        $n = $n + 2;
    }

    $a = 82;
    $b = 8;
    $kol = 0;

    $ost = $a;

    while($ost > $b) {
        $ost = $ost - $b;
        $kol++;
    }
    echo "$a = $kol * $b + $ost";
    echo "<br>";


    //alt

    $zbir = 0;

    while($zbir + $b <= $a) { // NEEDS CORRECTION
        $zbir = $zbir + $b;
        $ceoDeo = $ceoDeo + 1;
    }
    $ost = $a - $zbir;


    ?>
</body>

</html>