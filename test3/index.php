<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 3</title>
    <style>
    body {
        text-align: center;
        font-size: 1.2em;
    }
    img {
        margin-top: 1em;
    }
    </style>
</head>
<body>
    <?php
    

    $godinaRodjenja = 1993;
    $pol = "m";
    $tezina = 77;
    $visina = 180;
    $visinaM = $visina / 100;
    $kvad = $visinaM * $visinaM;
    $godineFinal = date("Y") - $godinaRodjenja;


    $BMI = $tezina / $kvad;

    if ($pol == "m") {
        echo "BMI muske osobe je : " . round($BMI, 2);
        echo "<br>";
        echo "<img src='/mojPhp/test3/img/male.png'>";        
    } else {
        echo "BMI zenske osobe je: " . round($BMI, 2);
        echo "<br>";
        echo "<img src='/mojPhp/test3/img/female.png'>";
    }

    echo "<br>";

    if ($BMI <= 18.5) {
        echo "Osoba ima $godineFinal godina i pothranjena je.";
        echo "<br>";
        echo "<img src='/mojPhp/test3/img/poth.png'>";
    } else if ($BMI <= 24.9) {
        echo "Osobaima $godineFinal godina i normalne je tezine";
        echo "<br>";
        echo "<img src='/mojPhp/test3/img/norm.png'>";
    } else if ($BMI <= 29.9) {
        echo "Osoba ima $godineFinal godina i ima povisenu tezinu.";
        echo "<br>";
        echo "<img src='/mojPhp/test3/img/povs.png'>";
    } else if ($BMI > 30.0) {
        echo "Osoba ima $godineFinal godina i ugojena je.";
        echo "<br>";
        echo "<img src='/mojPhp/test3/img/gojaz.png'>";
    } else {
        echo "zasto preskace";
    }
    
    
    ?>
</body>
</html>