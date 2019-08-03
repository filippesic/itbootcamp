<html lang="en">

<head>
</head>

<body>

    <h2>Naslov</h2>
    <?php

    $neca = 30;
    $peca = 20;

    $c = $neca + $peca;


    echo $c;

    echo "<br>";
    echo "<br>";

    $x = 5;
    $y = 3;
    $z = $x;
    $x = $y;
    $y = $z;


    echo "<br>";
    echo "<br>";


    echo "x je: ".$x;
    echo "<br>";
    echo "y je: ".$y;
    echo "<br>";
    echo "z je: ".$z;


    $a = "Peca";
    echo "<br>";
    $b = "Neca";
    

    echo $a;
    echo $b;

    $c = $a;
    $a = $b;
    $c = $c;
    
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;

    

    /*class Klasa
    {
        function Func()
        {
            $this->model = "funkcija";
        }
    }

    $objekat = new Klasa();
    echo $Klasa->model;
    */

    ?>

</body>

</html>