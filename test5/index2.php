<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 5, zadatak 2</title>
</head>

<body>
    <?php

    $plateNiz = array(22500, 33000, 19000, 44000, 64000);

    function prosecna($plate)
    {
        $suma = 0;

        foreach ($plate as $plata) {
            $suma += $plata;
        }
        $prosek = $suma / count($plate);
        return $prosek;
    }

    $izrProsek = prosecna($plateNiz);
    echo "Prosecna plata je: $izrProsek";
    echo "<br>";

    function ispisiNiz($niz, $prosek, $boja1, $boja2)
    {
        foreach ($niz as $plata) {
            if ($plata > $prosek) {
                echo "<p style='color: $boja1'>Iznad proseka: $plata</p>";
            } else {
                echo "<p style='color: $boja2'> Ispod proseka: $plata</p>";
            }
        }
    }

    ispisiNiz($plateNiz, $izrProsek, "red", "blue");

    echo "<br>";

    function indeksMinMax($niz)
    {
        $min = $niz[0];
        $max = 0;
        $indexMin = 0;
        $indexMax = 0;
        for ($i = 0; $i < count($niz); $i++) {
            if ($niz[$i] > $max) {
                $max = $niz[$i];
                $indexMax = $i;
            } elseif ($niz[$i] < $min) {
                $min = $niz[$i];
                $indexMin = $i;
            }
        }
        echo "Zbir indeksa min i max plate je: ($indexMin + $indexMax) = " . ($indexMin + $indexMax);
    }

    indeksMinMax($plateNiz);
    echo "<br>";

    function slika($niz, $adr1, $adr2)
    {
        $prosek = prosecna($niz);
        $indexNat = 0;
        foreach ($niz as $radnik) {
            if ($radnik > $prosek) {
                $natprosecna = $radnik;
                $indexNat++;
                if($indexNat > count($niz / 2)) {
                    echo "<img src='$adr1'>";
                } else {
                    echo "<img src='$adr2'>";
                }
            }
        }
    }

    slika($plateNiz,"img/sad.png", "img/happy.png");



    ?>
</body>

</html>