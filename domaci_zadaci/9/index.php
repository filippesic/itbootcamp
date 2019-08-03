<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci broj 9</title>
    <style>
        body {
            font-size: 1.4em;
            text-align: center;
            background-color: darkgray;
        }
    </style>
</head>

<body>
    <?php

    $boja = "lkdjfogidj";

    switch ($boja) {
        case "red":
            echo "<p style='color: red'>Crvena</p>";
            break;

        case "green":
            echo "<p style='color: green'>Zelena</p>";
            break;

        case "blue":
            echo "<p style='color: blue'>Plava</p>";
            break;

        default:
            echo "<p style='color: yellow'>Niste uneli ni crvenu, ni zelenu, a ni plavu.</p>";
    }


    $a = 5;
    $b = 1;
    $c = 7;

    if ($a > $b && $a > $c) {
        echo "A je najveci broj";
    } else if ($a > $b && $a < $c || $a > $c && $a < $b) {
        echo "A je srednji broj";
    } else if ($a < $b && $a < $c) {
        echo "A je najmanji broj";
    }

    echo "<br>";

    if ($b > $a && $b > $c) {
        echo "B je najveci broj";
    } else if ($b > $a && $b < $c || $b > $c && $b < $a) {
        echo "B je srednji broj";
    } else if ($b < $a && $b < $c) {
        echo "B je najmanji broj";
    }

    echo "<br>";

    if ($c > $a && $c > $b) {
        echo "C je najveci broj";
    } else if ($c > $a && $c < $b || $c > $b && $c < $a) {
        echo "C je srednji broj";
    } else if ($c < $a && $c < $b) {
        echo "C je najmanji broj";
    } else {
        echo "ne radi";
    }

    echo "<br>";

    $d = 12;
    $e = 15;

    if ($d == $e) {
        echo "Oba broja su ista.";
    } else {
        if ($d > $e) {
            if ($d % 2 == 0) {
                echo "Prvi je veci broj od i paran je";
            } else {
                echo "Prvi broj nije paran, ali je veci";
            }
        } else if ($d % 2 == 0 && $d < $e) {
            echo "Prvi broj nije veci od drugog, ali je paran";
        } else {
            echo "Prvi broj nije veci od drugog i neparan je";
        }
    }

    echo "<br>";


    $radniStart = "09";
    $radniStop = "20";
    $vikenStart = "10";
    $vikendStop = "18";
    $trenutniSat = date("H");
    $trenutniDan = date("l");


    // echo $trenutniSat;
    // echo "<br>";
    // echo $trenutniDan;
    // echo "<br>";


    if ($trenutniDan !== "Saturday" && $trenutniDan !== "Sunday") {
        if ($trenutniSat > $radniStart && $trenutniSat < $radniStop) {
            echo "Butik je trenutno otvoren i radni je dan";
        } else {
            echo "Butik nije trenutno otvoren i radni je dan";
        }
    } else {
        if ($trenutniSat > $vikenStart && $trenutniSat < $vikendStop) {
            echo "Butik trenutno radi i vikend je";
        } else {
            echo "Butik trenutno ne radi i vikend je";
    }
}


    




    ?>
</body>

</html>