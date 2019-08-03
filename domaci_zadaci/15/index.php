<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 15</title>
    <style>
        body {
            font-size: 1.2em;
            text-align: center;
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <?php

    // 19.

    $a = array(19, -2, 7, 11, 16, -23, 13, 19, -54, -33);

    $b = array();

    for ($i = 0; $i < count($a); $i++) {  // ???
        if ($a[$i] >= 0) {
            $b[$i] = $a[$i];
        }
    }

    echo "Niz B koji sadrzi samo pozitivne brojeve iz niza A: ";

    foreach ($b as $element) {
        echo $element . " ";
    }


    echo "<br>";
    echo "<hr>";


    // 21.

    $d = array(13, 2, 6, 17, 65, 44, 37, 10, 4, 77); // da ne bi bio isti kao b niz gore, zato je d
    $c = array();

    for ($i = 0; $i < count($a); $i++) {
        $c[] = $a[$i] * $d[$i];
    }


    echo  "A element * D element cine niz C, a to su: ";
    foreach($c as $element) {
        echo $element . " ";
    }

    echo "<br>";
    echo "<hr>";






    ?>
</body>

</html>