<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezba 1</title>
    <style>
        .blue {
            color: blue;
        }
        .yellow {
            color: yellow;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    
        $text = "Some text ..";

        $i = 1;
        
        while($i <= 6) {
            if($i % 3 == 1) {
                echo "<p class='blue'>$text</p>";
            } else if ($i % 3 == 2) {
                echo "<p class='yellow'>$text</p>";
            } else {
                echo "<p class='red'>$text</p>";
            }
            $i++;
        }
    
        $pr = 50;
        $dr = 5;

        if ($pr < $dr) {
            $suma = 0;
            $i = $pr;
            while($i <= $dr) {
                $suma = $suma + $i;
                $i++;
            }
        } else {
            $suma = 0;
            $i = $dr;
            while($i <= $pr) {
                $suma = $suma + $i;
                $i++;
            }
        }
        echo $suma;
        echo "<br>";


        $f = 56;
        $g = 69;

        $i = $f;
        $proizvod = 1;

        while($i <= $g) {
            $proizvod *= $i;
            $i++;
        }
        echo $proizvod;
        echo "<br>";




        $n = 2;
        $m = 5;
        $suma = 0;
        $i = $n;

        while($i <= $m) {
            $suma += $i * $i;
            // $suma += pow($i, 2);
            // $suma += $i ** 2;
            $i++;
        }
        echo $suma;
        echo "<br>";


    ?>
</body>
</html>