<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bahianita&display=swap" rel="stylesheet">
    <title>8. Domaci Zadatak</title>
    <style>
        body {
            margin: 0;
            font-family:'Bahianita', 'Arial', cursive;
            text-align: center;
            font-size: 1.7em;
            background-color: darkgray;
        }
    </style>
</head>

<body>
    <?php

    // 1. Celzijus

    $celzijus = -22;

    if ($celzijus >= 100) {
        echo "Voda kljuca.";
    } else if ($celzijus <= 0) {
        echo "Voda se ledi.";
    } else {
        echo "Voda je u tecnom stanju.";
    }

    echo "<br>";
    echo "<br>";

    // 2. Tip licnosti

    $tipLicnosti = "melanholik";

    if ($tipLicnosti == "sangvinik") {
        echo "<img src='/php/Domaci_zadaci/8/img/sangvinik.png'>";
    } else if ($tipLicnosti == "melanholik") {
        echo "<img src='/php/Domaci_zadaci/8/img/melanholik.png'>";
    } else if ($tipLicnosti == "flegmatik") {
        echo "<img src='/php/Domaci_zadaci/8/img/flegmatik.png'>";
    } else {
        echo "<img src='/php/Domaci_zadaci/8/img/kolerik.png'>";
    }

    echo "<br>";
    echo "<br>";

    // 3. Konverzija kalorija u kJ

    $kcal = 20;
    $kJ = $kcal * 4.1868; // *  would be 4.184 Google data

    if ($kJ < 2000) {
        echo "Povecajte dnevni unos.";
    } else if ($kJ > 4000) {  // real world about 6000-7500kJ i think for woman and 8000-10000kJ :)
        echo "Smanjite dnevni unos.";
    } else {
        echo "Dnevni unos je u redu.";
    }

    echo "<br>";

    echo "<p>This is not data from a medicine school, doctor or real world scenario,
            this is just for an exercise!</p>"

    ?>
</body>

</html>