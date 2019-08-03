<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezba funkcije</title>
    <style>
        body {
            text-align: center;
            font-size: 1.2em;
        }

        img {
            width: 60%;
        }
    </style>
</head>

<body>
    <?php

    // 1.

    function pozdrav($ime, $prezime)
    {
        echo "Pozdrav $ime $prezime";
    }

    pozdrav("Filip", "Pesic");

    echo "<br>";
    echo "<hr>";

    // 2.

    function zbir($a, $b)
    {
        echo (int) $rezultat = $a + $b;
    }

    zbir(6, 5.9);

    echo "<br>";
    echo "<hr>";

    // 3.

    function neparan($n)
    {
        if ($n % 2 != 0) {
            echo "True";
        } else {
            echo "False";
        }
    }

    neparan("17");

    echo "<br>";
    echo "<hr>";

    // 4.

    function maks2($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }

    $najveci2 = maks2(123, 9);
    echo $najveci2;
    echo "<br>";
    $najveci4 = maks2(maks2(8, 142), maks2(4, 9));
    echo $najveci4;
    echo "<br>";

    function maks4($a, $b, $c, $d)
    {
        if ($a > $b && $a > $c && $a > $c) {
            echo "$a je najveci broj";
        } elseif ($b > $a && $b > $c && $b > $d) {
            echo "$b je najveci broj";
        } elseif ($c > $a && $c > $b && $c > $d) {
            echo "$c je najveci broj";
        } else {
            echo "$d je najveci broj";
        }
    }

    maks4(4, 5, 6, 7);

    echo "<br>";
    echo "<hr>";


    // 5.

    function slika($s)
    {
        echo "<img src='$s'>";
    }

    slika('/mojPhp/img/ring_planet2.png');

    // 6.

    function boja($color)
    {
        echo "<p style = 'color:$color'>Tekst boje koju ste uneli</p>";
    }

    boja("red");
    echo "<hr>";

    // 7. 

    function ceoBroj($font)
    {
        echo "<p style = 'font-size: ${font}px'>Font velicine koju ste uneli</p>";
    }


    ceoBroj(40);
    echo "<hr>";


    // 8.


    function recenica($puta)
    {
        $i = 0;
        while ($i <= $puta) {
            echo "<p style = 'font-size: ${puta}px'>
            Recenica ispisana koliko puta ste uneli i velicina fonta koliko ste uneli takodje
            </p>";
            $i++;
        }
    }

    recenica(14);
    echo "<hr>";


    // 9. 

    function sedmiDan($dan)
    {
        if ($dan % 7 == 1) {
            echo "Ponedeljak";
        } elseif ($dan % 7 == 2) {
            echo "Utorak";
        } elseif ($dan % 7 == 3) {
            echo "Sreda";
        } elseif ($dan % 7 == 4) {
            echo "Cetvrtak";
        } elseif ($dan % 7 == 5) {
            echo "Petak";
        } elseif ($dan % 7 == 6) {
            echo "Subota";
        } elseif ($dan % 7 == 0) {
            echo "Nedelja";
        } else {
            echo "Not working mate";
        }
    }


    sedmiDan(6);
    echo "<br>";

    // MESEC

    function mesec($dan)
    {
        if ($dan % 12 == 1) {
            echo "Januar";
        } elseif ($dan % 12 == 2) {
            echo "Februar";
        } elseif ($dan % 12 == 3) {
            echo "Mart";
        } elseif ($dan % 12 == 4) {
            echo "April";
        } elseif ($dan % 12 == 5) {
            echo "Maj";
        } elseif ($dan % 12 == 6) {
            echo "Jun";
        } elseif ($dan % 12 == 7) {
            echo "Juli";
        } elseif ($dan % 12 == 8) {
            echo "Avgust";
        } elseif ($dan % 12 == 9) {
            echo "Septembar";
        } elseif ($dan % 12 == 10) {
            echo "Oktobar";
        } elseif ($dan % 12 == 11) {
            echo "Novembar";
        } elseif ($dan % 12 == 0) {
            echo "Decembar";
        } else {
            echo "Not working mate";
        }
    }

    mesec(4);
    echo "<hr>";

    // 10.


    function deljivSaTri($n, $m) {
        $suma = 0;
        
        echo "Brojevi deljivi sa tri su: ";
        for($i = $n; $i <= $m; $i++) {            
            if($i % 3 == 0) {
                echo $i . " ";
                $suma++;
            }            
        }
        echo "<br>";
        echo "Ovih brojeva ima: $suma";
    }

    deljivSaTri(3, 9);
    echo "<br>";
    echo "<hr>";


    // 11.

    function deljivSaNM($n, $m) { // NEEDS CORRECTION!
        for($i = $n; $i <= $m; $i++) {
            if($i % 2 == 0 && $i % 3 != 0 && $i % 5 != 0 && $i % 7 != 0) {
                echo "Sa 2: $i <br>";
            } else if($i % 3 == 0 && $i % 2 != 0 && $i % 5 != 0 && $i % 7 != 0) {
                echo "Sa 3: $i <br>";
            } else if($i % 5 == 0 && $i % 2 != 0 && $i % 3 != 0 && $i % 7 != 0) {
                echo "Sa 5: $i <br>";
            } else if($i % 7 == 0 && $i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0) {
                echo "Sa 7: $i <br>";
            }
        }
    }

    deljivSaNM(1, 10);
    echo "<hr>";






    ?>
</body>

</html>