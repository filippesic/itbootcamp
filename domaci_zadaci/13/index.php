<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 13</title>
    <style>
        body {
            text-align: center;
            font-size: 1.2em;
            background-color: darkgray;
        }
        hr {
            width: 17%;
        }
    </style>
</head>

<body>    
    <?php

    // 1. Srednja vrednost

    echo "<hr>";

    $niz = array(654,56,23,267,33,49,77,3,69);
    $nizCount = count($niz);
    $suma = 0;

    for($i = 0; $i < $nizCount; $i++) {
        $suma += $niz[$i];
        $srednjaVr = $suma / $nizCount;
    }

    echo "Srednja vrednost niza je: " . round($srednjaVr, 1);
    echo "<br>";
    echo "<hr>";
    // echo $nizCount;
    // echo "<br>";

    // 2. Maksimalna/najveca vrednost

    $maks = 0;

    for($i = 0; $i < $nizCount; $i++) {        
        if($maks < $niz[$i]) {
            $maks = $niz[$i];
        }
    }

    echo "Najveci element niza je: " . $maks;

    echo "<br>";
    echo "<hr>";


    // 3. Najmanja vrednost

    $min = $niz[0]; // ili $min = 999999999; ili čak $min = $maks ili $min = max($niz);

    // Ne moze samo 0($min = 0;), jer onda nece da bude promenljivo, 
    // odnosno 0 ce uvek da bude najmanja vrednost, 
    // dok predhodni zadatak nema takav problem.
    // Ali zato moze recimo neka ogromna vrednost, tipa 999999 :)

    for($i = 0; $i < $nizCount; $i++) {        
        if($niz[$i] < $min) {
            $min = $niz[$i];
        }
    }

    echo "Najmanji element niza je: " . $min;
    echo "<hr>";



    ?>
</body>

</html>