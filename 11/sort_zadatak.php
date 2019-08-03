<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak(ci) sort</title>
</head>
<body>
    <?php

    $boje = array("#ff0000" => "red", "#0000ff" => "blue", "#00ff00" => "limegreen", "#ffff00" => "yellow");

    function stampaj($niz) {
        foreach($niz as $hex => $color) {
            echo "HEX: $hex, <br> BOJA: $color";
        }
    }

    //stampaj($boje);
    echo "<br>";
    echo "<br>";


    echo "<b>Rastuce po HEX-u:</b> <br>";
    krsort($boje);
    stampaj($boje);

    echo "<hr>";

    echo "<b>Opadajuce po HEX-u:</b> <br>";
    asort($boje);
    stampaj($boje);

    echo "<hr>";

    echo "<b>Rastuce po boji:</b> <br>";
    arsort($boje);
    stampaj($boje);

    echo "<hr>";




    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>