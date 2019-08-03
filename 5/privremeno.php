<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>datumi</title>
</head>

<body>
    <?php


    $dan1 = 14;
    $dan2 = date("d");
    $mes1 = 7;
    $mes2 = date("m");
    $god1 = 2019;
    $god2 = date("Y");

    if ($god1 == $god2 && $mes1 == $mes2 && $dan1 == $dan2) {
        echo "Uneli ste identicne datume!";
    } else {
        if ($god1 > $god2) {
            echo "Prvi datum je mladji";
        } else {
            if ($mes1 > $mes2) {
                echo "Prvi datum je mladji";
            } else {
                if ($dan1 > $dan2) {
                    echo "Prvi datum je mladji";
                } else {
                    echo "Drugi datum je mladji";
                }
            }
        }
    }

    echo "<br>";
    echo "<br>";

    ////////////////////////////////////////////////////////////////////

    $dat1 = "03041993";
    $dat2 = date("dmY");

    echo $dat2;

    echo "<br>";
    echo "<br>";

    if (substr("$dat2", 4) > $dat1) {                            // godina
        echo "Drugi datum je mladji po godini";
    } else {
        if (substr("$dat2", 2, -4) > $dat1) {                    // mesec
            echo "Drugi datum je mladji po mesecu";
        } else {
            if (substr("$dat2", 0, -6) > $dat1) {                // dan
                echo "Drugi datum je mladji po danu";
            } else {
                echo "It's not working m8";
            }
        }
    }

    echo "<br>";


    ///////////////////////////////////////////////////////////////////////


    // drugi primer za ostatke

    $a = 27;
    $b = 9;
    $kol = 0;

    $ost = $a;

    while($ost >= $b) {
        $ost = $ost - $b;
        $kol++;
    }
    echo "$a = $kol * $b + $ost";


    ?>
</body>

</html>