<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;  
        }
    </style>
</head>
<body>
    <?php
    
    
    $evro = 117.25;
    $dolar = $evro * 1.04;
    

    echo "Sto dolara je: ".round($dolar * 100) . " dinara.";
    echo "<br>";
    
    $faren = 40;
    $cels = ($faren - 32) * 5/9 . " C°";

    echo  $faren . " farenhajta je: " . round($cels, 1);
    echo "<br>";

    $sat = 14;
    $minut = 20;

    $ukupnoMinuta = $sat * 60 + $minut;

    echo "Od ponoci je proslo: " . $ukupnoMinuta . " minuta.";
    echo "<br>";

    $sati = date("H:i:s");
    $datum = date("d/m/Y");
    echo "Tacno je: " . $sati;
    echo "<br>";
    echo "Danas je: " . $datum;

    echo "<br>";

    $hour = date("G");
    $mins = date("i");
    $addedMins = $hour * 60 * $mins;
    echo $addedMins;
    echo "<br>";

    ?>
</body>
</html>