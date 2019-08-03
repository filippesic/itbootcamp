<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak for</title>
    <style>
        body {
            font-size: 1.2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php

        // 13.
    
        $br = 0;

        for($i = 5; $i <= 150; $i++) {
            if ($i % 13 == 0) {
                $br++;
            }
        }

        echo $br;
        echo "<br>";
    
        // 14.

        $n = 5;
        $m = 15;
        $suma = 0;
        $br;

        for($i = $n; $i <= $m; $i++) {
            $suma += $i;
            $br++;
        }
        $sr = $suma / $br;
        echo $sr;
        echo "<br>";

        // alternate way

        $br1 = $m - $n + 1;
        $sr1 = $suma / $br1;
        echo $sr1;
        echo "<br>";

        // 15.


        $n = -3;
        $m = 2;
        $brP = 0;
        $brN = 0;

        for($i = $n; $i <= $m; $i++) {
            if($i > 0) {
                $brP++;
            } elseif($i < 0) {
                $brN++;
            }
        }
        echo "Ima $brP pozitivnih brojeva i $brN negativnih brojeva.";
        echo "<br>";


        // 16.

        $br3 = 0;

        for($i = 5; $i <= 50; $i++) {
            if($i % 3 == 0 || $i % 5 == 0) {
                $br3++;
            }
        }
        echo $br3;
        echo "<br>";

        // 17.

        // BILO KOJI BROJ MOD 10 DOBIJAMO POSLEDNJU CIFRU TOG BROJ
        // 7 % 10 = 7
        // 17 % 10 = 7
        // 227 % 10 = 7
        // 2219 % 10 = 9

        $n = 10;
        $m = 30;
        $suma = 0;
        $br = 0;

        for($i = $n; $i <= $m;$i++) {
            $posL = $i % 10;
            if($posL == 4) {
                $suma += $i;
                $br++;
            }
        }
        echo $suma;
        echo "<br>";

        // 18.

        $n = 10;
        $m = 20;
        $a = 12;

        for($i = $n; $i <= $m; $i++) {
            if($i % $a == 0) {
                echo $i;
            }
        } 
        echo "<br>";

        // 19.

        $n = 10;
        $m = 20;
        $a = 12;

        for($i = $n; $i <= $m; $i++) {
            if($i % $a != 0) {
                echo $i;
            }
        } 
        echo "<br>";
    

        // 20.

        $n = 10;
        $m = 20;
        $a = 12;
        $suma = 0;

        for($i = $n; $i <= $m; $i++) {
            if($i % $a != 0) {
                $suma =+ $i;
            }
        }
        echo $suma;
        echo "<br>";
    
        // 21.


        $n = 1;
        $m = 5;
        $a = 2;
        $proizV = 1;

        for($i = $n; $i <= $m; $i++) {
            if($i % $a == 0) {
                $proizV *= $i;
            }
        }
        echo $proizV;
        echo "<br>";

    
    
    ?>
</body>
</html>