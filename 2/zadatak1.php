<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 9;
    $b = 23;

    if ($a > $b) {
        echo "A je vece od B";
    } else {
        echo "A nije vece od B";
    }

    echo "<br>";

    $temperatura = 267;

    if ($temperatura >= 0) {
        echo "Temeperatura je u plusu.";
    } else {
        echo "Temperatura je u minusu.";
    }
    echo "<br>";

    $pol = "zenski";

    if ($pol == "muski") {
        echo "Pol je muski";
        echo "<br>";
        echo "<img src='/php/img/male.png'>";
    } else {
        echo "Pol je zenski";
        echo "<br>";
        echo "<img src='/php/img/female.png'>";
    }

    echo "<br>";

    $vreme = date("h:i:sa");
    //echo $vreme;
    // $asdf = date("a");
    // echo $asdf;

    if (strpos($vreme, 'am')) {
        echo "Prepodne je";
    } else {
        echo "Popodne je";
    }

    echo "<br>";

    $godinaRodjenja = "1993";
    $trenutniDatum = date("Y");
    // echo $trenutniDatum;

    if ($trenutniDatum - $godinaRodjenja >= 18) {
        echo "Lice je punoletno lol";
    } else {
        echo "Lice nije punoletno";
    }

    echo "<br>";

    $c = 23;
    $d = 44;
    $e = 54;


    echo "<br>";

    if ($c > $b && $c > $e) {
        echo "C je najeci broj preko if metode";
    } else if ($b > $c && $b > $e) {
        echo "B je najveci broj preko if metode";
    } else {
        echo "E je najveci broj preko if metode";
    }

    echo "<br>";

    echo "Najveci broj preko max metode je: " . max($c, $d, $e);

    echo "<br>";

    $poeni = 30;


    if ($poeni < 60) {
        echo "Ucenik je pao";
    } else if ($poeni > 50 && $poeni <= 60) {
        echo "Ucenik je polozio sa ocenom 6";
    } else if ($poeni > 60 && $poeni <= 70) {
        echo "Ucenik je polozio sa ocenom 7";
    } else if ($poeni > 70 && $poeni <= 80) {
        echo "Ucenik je polozio sa ocenom 8";
    } else if ($poeni > 80 && $poeni <= 90) {
        echo "Ucenik je polozio sa ocenom 9";
    } else {
        echo "Ucenik je polozio sa ocenom 10";
    }

    echo "<br>";

    $dan = date("l");
    //echo $dan;

    if ($dan != "Saturday" || "Sunday") {
        echo "Radni je dan!";
    }


    echo "<br>";

    $vreme2 = date("H");

    if ($vreme2 <= 12) {
        echo "Gutten morgen";
    } else if ($vreme2 > 12 && $vreme2 <= 18) {
        echo "Gutten abend";
    } else {
        echo "Gutten nachmittag";
    }

    echo "<br>";

    $datum = date("d/m/Y");
    $datum2 = "03/04/1993";

    if ($datum > $datum2) {
        echo "Prvi datum je raniji";
    } else {
        echo "Drugi datum je stariji";
    }

    echo "<br>";

    // sekundarno resenje

    $dan1 = 23;
    $dan2 = 10;
    $mes1 = 1;
    $mes2 = 1;
    $god1 = 1992;
    $god2 = 1993;

    if ($dan1 > $dan2 && $mes1 > $mes2 && $god1 > $god2) { // NE RADI
        echo "Prvi datum je mladji.";
    } else {
        echo "Drugi datum je stariji";
    }




    echo "<br>";

    $trenutnoVreme = date("H");

    if ($trenutnoVreme >= 9 && $trenutnoVreme <= 17) {
        echo "Firma trenutno radi";
    } else {
        echo "Firma je zatvorena trenutno";
    }

    echo "<br>";

    $trenutnoVreme = date("H");
    //LEKARI ??
    //if ($trenutnoVreme <= )


    $paranBroj = 23;

    if ($paranBroj / 2 && $paranBroj % 2 == 0) {
        echo "Broj je paran";
    } else {
        echo "Broj je neparan";
    }

    echo "<br>";

    $deljivSaTri = 13;

    if ($deljivSaTri / 3 && $deljivSaTri % 3 == 0) {
        echo "Broj je deljiv sa 3";
    } else {
        echo "Broj nije deljiv sa 3";
    }

    echo "<br>";

    $broj1 = 49;
    $broj2 = 44;

    if ($broj1 > $broj2) {
        echo "Broj 1 je veci, a rezultat je " . ($broj1 - $broj2);
    } else {
        echo "Broj 2 je veci, a rezultat je: " . ($broj2 - $broj1);
    }

    echo "<br>";

    $nula = -2;

    if ($nula <= 0) {
        echo "Broj je manji od 0 i njegov prethodnik je" . ($nula - 1);
        // $broj = $broj -1
        // echo $broj
    } else {
        echo "Broj je veci od nule i njegov slebednik je: " . ($nula + 1);
        // $broj = $broj + 1
        //echo $broj
    }

    echo "<br>";


    $x2 = 1;
    $y2 = 24;
    $z2 = 36;

    if ($x2 > $y2 && $x2 > $z2) {        // max
        echo $x2 . " je najveci broj.";
    } else if ($y2 > $x2 && $y2 > $z2) { // max
        echo $y2 . " je najveci broj.";
    } else if ($z2 > $y2 && $z2 > $x2) { // max
        echo $z2 . " je najveci broj.";
    } else if ($x2 > $y2 && $x2 < $z2) { // mid
        echo $x2 . " je srednji broj.";
    } else if ($y2 > $x2 && $y2 < $z2) { // mid
        echo $y2 . " je srednji broj.";
    } else if ($z2 > $x2 && $z2 < $y2) { // mid
        echo $z2 . " je srednji broj.";
    } else if ($x2 < $y2 && $x2 < $z2) { // min
        echo $x2 . " je najmanji broj";
    } else if ($y2 < $x2 && $y2 < $z2) { // min
        echo $y2 . " je najmanji broj.";
    } else if ($z2 < $x2 && $z2 < $y2) { // min
        echo $z2 . " je najmanji broj";
    }

    echo "<br>";

    $ceoBroj = 9.232;

    if ((int)($ceoBroj) == $ceoBroj) {
        echo $ceoBroj . " je ceo broj.";
    } else {
        echo $ceoBroj . " nije ceo broj.";
    }

    echo "<br>";


    $paran1 = 200;
    $paran2 = 55;

    if ($paran1 > $paran2 && $paran1 % 2 == 0) {
        echo $paran1 . " je veci i paran broj.";
    } else {
        echo "Prvi broj nije veci od drugog.";
    }


    echo "<br>";

    $ekstraTemp = 2;

    if ($ekstraTemp < -15 || $ekstraTemp > 40) {
        echo $ekstraTemp . " je ekstremna temperatura.";
    } else {
        echo $ekstraTemp . " nije ekstremna temperatura.";
    }

    echo "<br>";

    // resenje sa casa 

    $start1 = "09"; $end1 = "19";
    $start2 = "18"; $end2 = "23";

    if ($start1 <= $start2) {
        if ($start2 <= $end1) {
            echo "DA";
        } else {
            echo "NE";
        }
    } else if ($start2 < $start1) {
        if ($start1 <= $end2) {
            echo "DA";
        } else {
            echo "NE";
        }
    }

    echo "<br>";


    $dan = date("N");

    switch($dan) {

        case 1:
            echo "Preostalo je jos 4 dana do vikenda";
            break;

        case 2:
            echo "Preostalo je jos 3 dana do vikenda";
            break;

        case 3:
            echo "Preostalo je jos 2 dana do vikenda";
            break;

        case 4:
            echo "Preostalo je jos 1 dana do vikenda";
            break;


        default:
            echo "Niste uneli dobru vrednost recimo";

    }



    ?>
</body>

</html>