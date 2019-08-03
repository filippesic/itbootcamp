<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezba 2</title>

    <style>
    img {
        width: 50%;
    }
    </style>
</head>
<body>
    <?php
    /*Data je slika sa svojom putanjom i imenom. Prikazati datu sliku na veb stanici*/
    
    $putanja = "/php/2/beach.jpg";

    echo "<img src='$putanja'>";

    echo "<br>";
    
    /*Za radnika je pozatno:
        broj radnih sati u meseci
        cena rada po satu
        procetnat odbijanja na osnovu doprinosa
        
        Odrediti bruto i neto dohodak radnika*/

        $brojSati = 160;
        $cena = 5;

        $procenat = 65;

        $bruto = $brojSati * $cena;
        $neto = $bruto - $bruto * $procenat / 100;

        echo "<p>Bruto zarada: $bruto €,
        a neto zarada: $neto €</p>";

        // Broj minuta pretvoriti u sate i minute

        $brojMinuta = 63;
        $sati = (int) ($brojMinuta / 60);
        $minuti = $brojMinuta % 60;
        echo "<p>Broj sati: $sati, broj minuta: $minuti.</p>";

        // Ako je vrednost neke robe x dinara,
        // odretiti najmanju kolicunu novcanica od 500, 100, 10 i 1 dinar kojima se moze platiti data roba

        $x = 4699;
        $petsto = (int)($x / 500);
        $x = $x % 500;
        $sto = (int)($x / 100);
        $x = $x % 100;
        $deset = (int)($x / 10);
        $dinar = $x % 10;

        echo "<p>
        Petsto: $petsto,
        Sto: $sto,
        Deset: $deset,
        Dinar: $dinar</p>";


        $min = 73;

        /*if ($min <= 60) {
            return (int)($min / 60);
        } else {

        }*/

    ?>
</body>
</html>