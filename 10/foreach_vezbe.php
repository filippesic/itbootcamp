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

    function stampajNiz($niz)
    {
        foreach ($niz as $element) {
            echo $element  . " ";
        }
        echo "<br>";
    }

    $niz = array(2, 12, 23, 54, 44, 98, 56);
    stampajNiz($niz);

    echo "<br>";
    echo "<hr>";

    // menjam znak

    for ($i = 0; $i < count($niz); $i++) {
        $niz[$i] = -$niz[$i];
        // $niz[$i] *= -1
    }

    stampajNiz($niz);

    echo "<br>";
    echo "<hr>";



    for ($i = 0; $i < count($niz); $i += 2) {
        if ($niz[$i] % 2 == 0) {
            $niz[$i] = -$niz[$i];
        }
    }

    stampajNiz($niz);

    echo "<br>";
    echo "<hr>";


    // Ispisati dužinu svakog elementa u nizu stringova

    $zadnjaKlupa = array('Bojana', 'Nikola', 'Dimitrije', 'Vanja', 'Rade');

    foreach ($zadnjaKlupa as $element) {
        echo strlen($element) . "<br>";
    }

    echo "<br>";
    echo "<hr>";

    // Odrediti element u nizu stringova sa najvećom dužinom.

    $maksDuzina = strlen($zadnjaKlupa[0]);
    $index = 0;

    for ($i = 1; $i < count($zadnjaKlupa); $i++) {
        if (strlen($zadnjaKlupa[$i]) > $maksDuzina) {
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

    foreach ($zadnjaKlupa as $ime) {
        $zbir += strlen($ime);
    }

    $srDuz = $zbir / $n;
    echo "Srednja duzina imena je: $srDuz";

    echo "<br>";
    echo "<hr>";

    $broj = 0;

    foreach ($zadnjaKlupa as $ime) {
        if (strlen($ime) > $srDuz) {
            $broj++;
        }
    }

    echo "Broj imena: $broj";

    echo "<br>";
    echo "<hr>";

    // 10 DAN POCINJE ODAVDE


    // Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.


    $broj = 0;

    foreach ($zadnjaKlupa as $ime) {
        if (strpos($ime, 'a') !== FALSE) { // mora dva znaka jednakosti
            $broj++;
        }
    }

    echo "Broj elemenata u nizu stringova koji sadrze slovo a: $broj";


    // Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'.

    $broj = 0;

    foreach ($zadnjaKlupa as $ime) {

        /* var_dump($ime);
        var_dump(strpos($ime, 'a'));
        echo " ";
        var_dump(strpos($ime, 'A'));
        echo "<br>"; */

        if (strpos($ime, 'a') === 0 || strpos($ime, 'A') === 0) { // -3, -2, -1, 0, 1, 2, 3 
            //   -> samo 0 je FALSE, sve ostalo je TRUE
            $broj++;
        }
    }

    /* 
        = je dodeljivanje vrednosti
        == je poredjenje vrednosti, ako a i b imaju istu vrednost, a FALSE inace
        === je poredjenje i po vrednosti i tipu, TRUE ako a i b imaju isti tip i vrednost, a FALSE inace
    */


    // alternativni nacin

    $brojac = 0;

    foreach ($zadnjaKlupa as $ime) {
        /*
        substr($str, $pos, $len)
            Vraca podstring od stringa $str, duzine $len, pocev od pozicije $pos
        */

        if (substr($ime, 0, 1) == "a" || substr($ime, 0, 1) == "A") {
            $brojac++;
        }
    }

    echo "Broj stringova koji pocinju na A preko substr metode koji pocinju na A: " . $brojac .  "<br>";



    /*Dati su nizovi $a[0], $a[1], …, $a[n - 1] i  $b[0], $b[1], …, $b[n - 1].
    Formirati niz $c[0], $c[1], …, $c[2n – 1]
    čiji su elementi $a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n - 1].
    */

    $a = array(5, 8, 9, -2);
    $b = array(7, 0, -1, 2);
    $c = array();

    for ($i = 0; $i < count($a); $i++) {
        $c[2 * $i] = $a[$i];
        $c[2 * $i + 1] = $b[$i];
    }
    stampajNiz($c);
    echo "<br>";
    echo "<hr>";

    // 19.

    for ($i = 0; $i < count($a); $i++) {  // ???
        if ($a[$i] > 0) {
            $b[$i] = $a[$i];
        }
    }
    echo "<br>";
    echo "<hr>";

    // 21.

    // for ($i = 0; $i < count($a); $i++) {
    //     $c[] = $a[$i] * $b[$i];
    // }
    // echo  "A element * B element cine niz C, a to su: " . $c;
    // echo "<br>";
    // echo "<hr>";



    // 22.

    // for($i = 0; $i < count($a); $i++) {

    // }



    // Asocijativni nizovi, vezba 1.

    $automobili = array(
        "BMW E32" => "1993", "Porsche 911" => "2001", "Opel Corsa" => "2004", "Opel Astra" => "2011",
        "BMW 1M" => "1999", "Porsche Panamera" => "2006",
        "Opel Mondeo" => "2001", "Tesla Model 3" => "2017"
    );

    foreach ($automobili as $marka => $vrednost) {
        echo "Marka: " . $marka . ", a godiste: " . $vrednost . "<br>";
    }

    echo "<hr>";

    foreach ($automobili as $marka => $vrednost) {
        if ($vrednost <= 2009) {
            echo "Marka: " . $marka . ", a godiste starije od 10 godina:  " . $vrednost . "<br>";
        }
    }

    echo "<hr>";


    foreach ($automobili as $marka => $vrednost) {
        if (strpos($marka, "Opel") !== FALSE && $vrednost >= 2000) {
            echo "Opel-i prozivedeni posle 2000 godine: " . $vrednost . "<br>";
        }
    }

    echo "<br>";
    echo "<hr>";


    // 2.

    $osobe = array(
        "Jelena" => "173",
        "Nikolina" => "150",
        "Pera" => "192",
        "Filp" => "173"
    );

    foreach ($osobe as $x => $xVisina) {
        echo "Osoba $x je visoka $xVisina cm <br>";
    }

    $suma = 0;

    foreach ($osobe as $x => $xVisina) {
        $suma += $xVisina;
    }

    $prosek = $suma / count($osobe);
    echo "Prosek je: $prosek";
    echo "<br>";

    echo "Osoba(e) koje su iznad proseka su:";
    foreach ($osobe as $x => $xVisina) {
        if ($xVisina > $prosek) {
            echo $x . " ";
        }
    }
    echo "<br>";

    $max = 0;

    foreach ($osobe as $x => $xVisina) {
        if ($max < $xVisina) {
            $max = $xVisina;
        }
    }

    echo "Najvisa visina je: $max";
    echo "<br>";

    foreach ($osobe as $x => $xVisina) {
        if ($xVisina == $max) {
            echo "Osoba $x je visoka $xVisina <br>";
        }
    }




    ?>
</body>

</html>