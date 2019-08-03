<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci zadatak 12</title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant&display=swap&subset=latin-ext"
    rel="stylesheet">
    <style>
        body {
            font-size: 1.3em;
            font-weight: bold;
            text-align: center;
            background-color: darkgray;
            font-family: 'Cormorant Infant','Arial', serif;
        }


        .treca {
            border: 4px solid yellow;
            
        }

        .treca td {
            border: 1px solid greenyellow;
            padding: 3 3;
            color: midnightblue;
        }

        .druga td {
            border: 2px solid darkblue;
            padding: 3 3;
            color: darkmagenta;
        }

        table,
        .druga {
            width: 100%;
            font-size: 1.4em;
            text-align: center;
            border: 3px solid blue;
            border-collapse: collapse;
        }

        td {
            border: 3px solid darkred;
            padding: 3 3;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php

    // Zadatak 1.

    function lista($boja, $velicinaPX, $tekst)
    {
        echo "<li style='color: $boja; font-size: ${velicinaPX}px'>$tekst</li>";
    }

    ?>

    <ul>
        <?php
        lista('darkred', 60, 'Opeth');
        lista('blue', 50, 'Shokran');
        lista('mediumspringgreen', 40, 'Manson');
        lista('yellow', 30, 'Parkway Drive');
        lista('rebeccapurple', 20, 'Lamb Of God');
        lista('darkgreen', 30, 'Фэйс');
        ?>
    </ul>





    <?php

    // Zadatak 2.

    function tabela($italik, $tekst2) // sa stringom bi bilo skoro isto, samo ne bi bila brojka nego slovo
    {
        if ($italik == 1) {
            echo "<td style = 'font-style: italic; color: orangered'>$tekst2</td>";
        } else {
            echo "<td style = 'font-style: normal'>$tekst2</td>";
        }
    }


    ?>

    <table border=1>
        <?php
        echo "<tr>";
        tabela(0, 'Eins');
        tabela(1, 'Zwei');
        tabela(0, 'Vier');
        echo "</tr>";
        echo "<tr>";
        tabela(1, 'Fünf');
        tabela(0, 'Sechs');
        tabela(1, 'Sieben');
        echo "</tr>";
        echo "<tr>";
        tabela(0, 'Acht');
        tabela(1, 'Neun');
        tabela(0, 'Aus');
        echo "</tr>";

        ?>
    </table>
    <br>
    <hr color="white" size="10em"><br>


    <table border=1 class='druga'>
        <?php
        echo "<tr>";
        tabela(0, 'Oдин');
        tabela(1, 'Dва');
        tabela(0, 'Четыре');
        echo "</tr>";
        echo "<tr>";
        tabela(1, 'Пять');
        tabela(0, 'Шесть');
        tabela(1, 'Семь');
        echo "</tr>";

        ?>
    </table>
    <br>
    <hr color="white" size="10em"><br>

    <?php

    // Na neki nacin alternativa, ali ne potpuno iste funkcionalnosti..

    function tabela2($tip, $tekst3, $red, $kol)
    {
        echo "<table class='treca'>";
        for ($i = 0; $i < $red; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $kol; $j++) {

                // for($f = 0; $f <= $tip; $f++) {
                //     if($f == $tip) {
                //         echo "<td style='font-style: italic'>$tekst3</td>";
                //     } else {
                //         echo "<td style='font-style: normal'>$tekst3</td>";
                //     }
                // }

                if ($j % 2 == $tip) { // nije stvarno naizmenicno, jer uvek kao da pocinje iz pocetka :|
                    echo "<td style='font-style: italic'>$tekst3</td>";
                } else {
                    echo "<td style='font-style: normal'>$tekst3</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    tabela2(1, 'PseudoNaizmenicno', 4, 5);


    ?>


</body>

</html>