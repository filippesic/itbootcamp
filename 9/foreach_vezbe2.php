<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezbe</title>
</head>
<body>
    <?php

    // pre promene znaka

    function stampajNiz($niz) {
        foreach($niz as $element) {
            echo $element  . " ";
        }
        echo "<br>";
    }
    
    $niz = array(2, 12, 23, 54, 44, 98, 56);
    stampajNiz($niz);

    echo "<br>";
    echo "<hr>";

    // menjam znak

    for($i = 0; $i < count($niz); $i++) {
        $niz[$i] = -$niz[$i];
        // $niz[$i] *= -1
    }

    stampajNiz($niz);

    echo "<br>";
    echo "<hr>";



    for($i = 0; $i < count($niz); $i+=2) {
        if($niz[$i] % 2 == 0) {
            $niz[$i] = -$niz[$i];
        }
    }

    stampajNiz($niz);

    echo "<br>";
    echo "<hr>";


    // Ispisati dužinu svakog elementa u nizu stringova

    $zadnjaKlupa = array('Bojana', 'Nikola', 'Dimitrije', 'Vanja', 'Rade');

    foreach($zadnjaKlupa as $element) {
        echo strlen($element) . "<br>";
    }

    echo "<br>";
    echo "<hr>";
    
    // Odrediti element u nizu stringova sa najvećom dužinom.

    $maksDuzina = strlen($zadnjaKlupa[0]);
    $index = 0;

    for($i = 1; $i < count($zadnjaKlupa); $i++) {
        if(strlen($zadnjaKlupa[$i]) > $maksDuzina) {
            $maksDuzina = strlen($zadnjaKlupa[$i]);
            $index = $i;
        }
    }

    echo "Ime sa najvecom duzinom: " . $zadnjaKlupa[$index];



    echo "<br>";
    echo "<hr>";
    

    //Odrediti broj elemenata u nizu stringova čija je dužina
    // veća od prosečne dužine svih stringova u nizu.

    $zbir = 0;
    $n = count($zadnjaKlupa);

    foreach($zadnjaKlupa as $ime) {
        $zbir += strlen($ime);
    }

    $srDuz = $zbir / $n;
    echo "Srednja duzina imena je: $srDuz";

    echo "<br>";
    echo "<hr>";

    $broj = 0;

    foreach($zadnjaKlupa as $ime) {
        if(strlen($ime) > $srDuz) {
            $broj++;
        }
    }

    echo "Broj imena: $broj";

    echo "<br>";
    echo "<hr>";


    // Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.


    $broj = 0;

    foreach($zadnjaKlupa as $ime) {
        if(strpos($ime, 'a') != FALSE) {
            $broj++;
        }
    }
    
    echo "Broj elemenata u nizu stringova koji sadrze slovo a: $broj";
    
    
    
    
    
    
    
    ?>
</body>
</html>