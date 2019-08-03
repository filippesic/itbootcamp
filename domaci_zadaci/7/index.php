<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7 Domaci Zadatak</title>
    <style>
    body {
        text-align: center;
        font-size: 1.2em;
    }
    </style>
</head>
<body>
    
    <?php
    
    // 1. Galoni u litre

    $galon = 11;

    $litar = $galon * 3.785;

    echo $galon . " galona je: " . round($litar, 1) . " litra.";

    echo "<br>";

    // 1. Litari u galone
    
    $litar2 = 64;

    $galon2 = $litar2 / 3.785;

    echo $litar2 . "L je: " . round($galon2, 1) . " galona.";

    echo "<br>";

    // 2. Farenhajt u kelvine i ostalo

    $celzijus = 72;

    $farenhajt = ($celzijus * (9/5)) + 32;

    echo $farenhajt . "F je: " . round($celzijus, 1) . " celzijusa."; 

    $kelvin = $celzijus + 273.15;

    echo "<br>";

    echo round($celzijus, 1) . "C je: " . round($kelvin, 1) . " kelvina.";

    echo "<br>";

    $kelvin2 = ($farenhajt - 32) * 5/9 + 273.15;

    echo $farenhajt . "F je: " . $kelvin2 . " kelvina.";

    $farenUkelvin = ($kelvin - 273.15) * 9/5 + 32;

    echo "<br>";

    echo $kelvin . "K je: " . $farenUkelvin . " farenhajta."
    
    ?>

</body>
</html>