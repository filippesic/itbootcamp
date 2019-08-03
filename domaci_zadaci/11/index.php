<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 11</title>
    <style>
        body {
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <?php

    // echo nacin

    function digitron($x, $y, $znak)
    {
        if ($znak == "+") {
            echo "Izabrali ste sabiranje dva broja, a rezultat je: $x + $y = " . ($x + $y);
            // kao sto je Stefan napomenuo jos odavno, zagrade su neophodne za sabiranje i oduzimanje..
        } else if ($znak == "-") {
            echo "Izabrali ste oduzimanje dva broja, a rezultat je: $x - $y = " . ($x - $y);
        } else if ($znak == "/") {
            echo "Izabrali ste deljenje dva broja, a rezultat je: $x / $y = " . round(($x / $y), 2);
        } else {
            echo "Izabrali ste mnozenje dva broja, a rezultat je: $x * $y = " . $x * $y;
        }
    }

    digitron(5, 8, '*');
    echo "<hr>";

    // return nacin gde je promenljiva neophodna u koju se smesta rezultat koji je vracen :)

    function digitron2($x, $y, $znak)
    {
        if ($znak == "+") {
            return "Izabrali ste sabiranje dva broja, a rezultat je: $x + $y = " . ($x + $y);
            // kao sto je Stefan napomenuo jos davno, zagrade su neophodne za sabiranje i oduzimanje..
        } else if ($znak == "-") {
            return "Izabrali ste oduzimanje dva broja, a rezultat je: x - $y = " . ($x - $y);
        } else if ($znak == "/") {
            return "Izabrali ste deljenje dva broja, a rezultat je: $x / $y = " . round(($x / $y), 2);
        } else {
            return "Izabrali ste mnozenje dva broja, a rezultat je: $x * $y = " . $x * $y;
        }
    }


    $rez = digitron2(4123, 7, '/');
    echo $rez;
    //echo "<br>";












    ?>
</body>

</html>