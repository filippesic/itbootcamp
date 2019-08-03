<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 1</title>
</head>
<body>
    <?php

    // 6.
    
    $i = 0;
    $suma = 0;

    while($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo $suma;
    echo "<br>";
    
    // 7.
    
    $n = 950;
    $i = 0;
    $suma1 = 0;

    while($i <= $n) {
        $suma1 += $i;
        $i++;
    }
    echo $suma1;
    echo "<br>";

    // 8.

    $n = 23;
    $m = 50;
    $i = $n;
    $suma2 = 0;

    while($i <= $m) {
        $suma2 += $i;
        $i++;
    }
    echo $suma2;
    echo "<br>";
    
    // 9.

    $x = 2;
    $y = 4;
    $i = $x;
    $proiz = 1;

    while($i <= $y) {
        $proiz *= $i;
        $i++;
    }
    echo $proiz;
    echo "<br>";

    // 10. 

    // $f = 4;
    // $g = 4;
    // $i = $f;
    // $kvad = 1;

    // while($i <= $g) {
    //     $kvad ^= $i;
    //     $i++;
    // }
    // echo $kvad;
    // echo "<br>";
    
    ?>
</body>
</html>