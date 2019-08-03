<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezbe nizovi</title>
</head>
<body>
    <?php
    
    $autoNiz = array("Audi","BMW", "Tesla", "Mazuda");
    $prvaKlupa = array("Nikola", "Milica", "Jelena", "Milica2", "Vanja", "Jelena2");
    $drugaKlupa[0] = "Bogdan";
    $drugaKlupa[1] = "Nemanja";
    $drugaKlupa[2] = "Rade";
    $drugaKlupa[3] = "Sanja";

    echo $autoNiz[0]; echo "<br>";
    echo $autoNiz[1]; echo "<br>";
    echo $autoNiz[2]; echo "<br>";
    echo "<hr>";

    echo $prvaKlupa[0]; echo "<br>";
    echo $prvaKlupa[1]; echo "<br>";
    echo $prvaKlupa[2]; echo "<br>";
    echo $prvaKlupa[3]; echo "<br>";
    echo $prvaKlupa[3]; echo "<br>";
    echo $prvaKlupa[4]; echo "<br>";

    echo "<hr>";

    $duzinaNiza = count($prvaKlupa);


    for($i = 0; $i < $duzinaNiza; $i++) {
        echo $prvaKlupa[$i];
        echo "<br>";
        echo "<br>";
    }


    $petStringa = array("Opeth", "Shokran", "Parkway Drive", "Godsmack", "Monuments");
    $duzinaPet = count($petStringa);

    // 1.

    for($i = 0; $i < $duzinaPet; $i++) {
        echo $petStringa[$i] . " ";
    }

    echo "<br>";
    echo "<hr>";
    
    // 2.

    $celobrojni = array(5, 3, 4, 9);

    $cDuz = count($celobrojni);
    $suma = 0;

    for($i = 0; $i < $cDuz; $i++) {
        $suma += $celobrojni[$i];
    }

    echo $suma;
    echo "<br>";
    echo "<hr>";
    

    // 4.

    $srednji = array(21, 23, 47, 56, 18, 66);
    $srDuz = count($srednji);
    $suma = 0;

    for($i = 0; $i < $srDuz; $i++) {
        $suma += $srednji[$i];
    }
    echo $suma / round($srDuz, 2);

    echo "<br>";
    echo "<hr>";

    // 5.
    
    $maxx = 0;

    for($i = 0; $i < $srDuz; $i++) {
        if($srednji[$i] > $maxx) {
            $maxx = $srednji[$i];
        }        
    }

    echo "Max je: " . $maxx;

    echo "<br>";
    echo "<hr>";

    // 6.

    $min = $maxx;

    for($i = 0; $i < $srDuz; $i++) {
        if($srednji[$i] < $min) {
            $min = $srednji[$i];
            //echo key($srednji[$i]);
        }
    }

    echo "Min je: " . $min;

    echo "<br>";
    echo "<hr>";

    // 7.

    
    $maxx = 0;

    foreach($srednji as $vrednost) {
        if($vrednost > $maxx) {
            $maxx = key(array($vrednost));
        }        
    }

    echo "Max je: " . $maxx;

    echo "<br>";
    echo "<hr>";
    

    // broj parnih elementa u nizu (kucano sa sledeceg casa)

    $niz = array(22, -13, 56, 31, 87, -64, -68);

    $broj = 0;

    foreach($niz as $elem) {
        if($elem % 2 == 0) {
            $broj++;
        }
    }

    echo $broj;

    echo "<br>";
    echo "<hr>";

    


    
    
    ?>
</body>
</html>