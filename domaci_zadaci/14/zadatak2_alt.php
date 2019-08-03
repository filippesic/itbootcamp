<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drugi pokusaj za zadatak 2 - najblizi element srednjoj vrednosti</title>
    <style>
        body {
            text-align: center;
            font-size: 1.2em;
            background-color: darkred;
            color: yellow;
        }
    </style>
</head>
<body>
    <?php
    
    
    //$a = array(-10, -3, 13, 66, 43, 39, 12, -7, 333);
    $a = array(2, 4, 13, 22, -7, 3, 20, -15, 9, 5);
    $suma = 0;    
    $index = 0;

    foreach($a as $element) {
        $suma += $element;
    }

    $srednjaVrednost = $suma / count($a);
    $razlika = abs($a[0] - $srednjaVrednost); // pretpostavka da je prvi najblizi

    echo "Srednja vrednost je: $srednjaVrednost";

    for($i = 0; $i < count($a); $i++) {
        $iRazlika = abs($a[$i] - $srednjaVrednost);
        // poredjenje svakog elementa da li je blizi nego pretpostavljeni
        if($iRazlika < $razlika) {
            $index = $i; // belezimo na kom indeksu je "pronadjen" najblizi element srednjoj vrednosti
            //$razlika = $iRazlika;
        }
    }

    echo "<br>";
    echo "<hr>";

    $najbliziBroj = $a[$index];
    echo "Najblizi broj srednjoj vrednosti je: " .  $najbliziBroj . " a indeks tog elementa je: " . $index;

    
    
    
    
    
    
    ?>
</body>
</html>