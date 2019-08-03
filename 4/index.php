<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vezba switch</title>
</head>
<body>
    <?php
    
    $boja = "crvena";

    switch ($boja) {
        case "crvena":
        echo "Odabrali ste crvenu boju!";
        break;

        case "plava":
        echo "Odabrali ste plavu boju!";
        break;

        case "zelena":
        echo "Odabrali ste zelenu boju!";
        break;
        
        default: echo "Niste odabrali ni crvenu, ni zelenu, ni plavu";
    }

    echo "<br>";



    $dan = date("N");

    switch ($dan) {
        case 1:
        echo "Ponedeljak";
        break;

        case 2:
        echo "Utorak";
        break;

        case 3:
        echo "Sreda";
        break;

        case 4:
        echo "Cetvrtak";
        break;

        case 5:
        echo "Petak";
        break;

        case 6:
        echo "Subota";
        break;

        case 7:
        echo "Nedelja";
        break;
        
        default: echo "Nista odabrali ni jedan od gazilion dana";
    }
    
    echo "<br>";
    
    $prestGod = 2100;

    // if ($prestGod % 4 == 0 || $prestGod % 400 == 0 && $prestGod % 100 !== 0) { NOPE
    //     echo $prestGod . " godina je prestupna godina.";
    // } else {
    //     echo $prestGod . " godina nije prestupna.";
    // }
    
    if (($prestGod % 400 == 0 || $prestGod % 100 !== 0) && $prestGod % 4 == 0) {
        echo $prestGod . " godina je prestupna godina.";
    } else {
        echo $prestGod . " godina nije prestupna.";
    }



    echo "<br>";


    $avgGrd = 4;

    switch ($avgGrd) {

        case 1:
        echo "Ucenik je nedovoljan";
        break;

        case 2:
        echo "Ucenik je dovoljan";
        break;

        case 3:
        echo "Ucenik je dobar";
        break;

        case 4:
        echo "Ucenik je vrlo dobar";
        break;

        case 5:
        echo "Ucenik je odlican";
        break;

        default:
        echo "Niste uneli ispravnu vrednost od 1 do 5, cmon m8";

    }

    echo "<br>";


    $paranBroj = 6;

    switch($paranBroj) {

        case 0:
        echo "Broj je nula";
        break;

        case 2:
        echo "Broj je dva";
        break;

        case 4:
        echo "Unet broj je cetiri";
        break;

        case 6:
        echo "Unet broj je sest";
        break;

        case 8:
        echo "Unet broj je osmica";
        break;

        default:
        echo "Unos je pogresan burke";

    }

    echo "<br>";


    $br1 = 22;
    $br2 = 48;
    $kr = "o";

    switch($kr) {

        case "o":
            echo "Oduzimanje, rezultat je: " . ($br1 - $br2);
            break;

        case "s":
        echo "Oduzimanje, rezultat je: " . ($br1 + $br2);
        break;

        case "m":
        echo "Oduzimanje, rezultat je: " . ($br1 * $br2);
        break;

        case "d":
        echo "Oduzimanje, rezultat je: " . round(($br1 / $br2), 1);
        break;

    }

    echo "<br>";


    $dan = date("N");

    switch($dan) {

        case 1:
            echo "Preostalo je jos 5 dana do vikenda.";
            break;

        case 2:
            echo "Preostalo je jos 4 dana do vikenda.";
            break;

        case 3:
            echo "Preostalo je jos 3 dana do vikenda.";
            break;

        case 4:
            echo "Preostalo je jos 2 dana do vikenda.";
            break;

        case 5:
            echo "Preostalo je jos 1 dan do vikenda.";
            break;

        default:
            echo "Niste uneli dobru vrednost recimo";

    }

    echo "<br>";


    $rdnMes = date("m");


    switch($rdnMes) {

            case 1:
            echo "Mesec je januar.";
            break;

            case 2:
            echo "Mesec je februar.";
            break;

            case 3:
            echo "Mesec je mart.";
            break;

            case 4:
            echo "Mesec je april.";
            break;

            case 5:
            echo "Mesec je maj.";
            break;

            case 6:
            echo "Mesec je jun.";
            break;

            case 7:
            echo "Mesec je juli.";
            break;
            case 8:
            
            echo "Mesec je avgust.";
            break;

            case 9:
            echo "Mesec je septembar.";
            break;

            case 10:
            echo "Mesec je oktobar.";
            break;

            case 11:
            echo "Mesec je novembar valjda.";
            break;

            case 12:
            echo "Mesec je decembar.";
            break;

        default:
            echo "Pogresna vrednost brateU";

    }


    

    
    ?>
</body>
</html>