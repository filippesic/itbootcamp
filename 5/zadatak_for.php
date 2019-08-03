<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak PHP</title>
    <style>
    body {
        font-size: 1.2em;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php

    // 1.

    for ($i = 1; $i <= 20; $i++) {
        echo $i . " ";
    }
    echo "<br>";

    // 2.

    for ($i = 20; $i >= 1; $i--) {
        echo $i . " ";
    }
    echo "<br>";

    // 3.

    for ($i = 0; $i <= 20; $i += 2) {
        echo $i . " ";
    }
    echo "<br>";

    // 4.

    for ($i = 5; $i <= 15; $i++) {
        echo $i * 2 . " ";
    }

    echo "<br>";

    // 5.

    $suma = 0;

    for ($i = 1; $i <= 100; $i++) {
        $suma += $i;
    }
    echo $suma;
    echo "<br>";

    // 6.

    $suma = 0;
    $n = 23;

    for ($i = 1; $i < $n; $i++) {
        $suma += $i;
    }
    echo $suma;
    echo "<br>";


    // 7. 


    $f = 5;
    $g = 10;
    $suma1 = 0;

    for ($i = $f; $i <= $g; $i++) {
        $suma1 += $i;
    }
    echo $suma1;
    echo "<br>";


    // 8.

    $e = 2;
    $h = 4;
    $suma2 = 1;

    for ($i = $e; $i <= $h; $i++) {
        $suma2 *= $i;
    }
    echo $suma2;
    echo "<br>";

    // 9.

    $n = 2;
    $m = 4;
    $suma = 0;

    for ($i = $n; $i <= $m; $i++) {
        $suma = $suma + ($i * $i);
    }

    echo $suma;
    echo "<br>";

    // 10.

    for ($i = 1; $i <= 3; $i++) { // ili 3 petlje
        echo "<img src='/mojPhp/5/img/$i.png'>";
    
    }

    echo "<br>";

    // 11.

    $suma1 = 0;

    for ($i = 1; $i <= 30; $i++) {
        if ($i % 9 == 0) {
            $suma1 += $i;
        }
    }
    echo $suma1;
    echo "<br>";

    // 12.

    $proiz2 = 1;

    for ($i = 20; $i <= 100; $i++) {
        if ($i % 11 == 0) {
            $proiz2 *= $i;
        }
    }
    echo $proiz2;




    ?>
</body>

</html>