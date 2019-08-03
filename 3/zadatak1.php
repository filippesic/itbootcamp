<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 1</title>
</head>
<body>
    <?php
   
    $pol = "m";
    $god = 2;

    if ($pol == "z" && $god >= 18) {
        echo "Zensko, punoletna";
    } else if ($pol == "z" && $god < 18) {
        echo "Zensko, maloletna.";
    } else if ($pol == "m" && $god >= 18) {
        echo "Musko, punoletno";
    } else if ($pol == "m" && $god < 18) {
        echo "Musko, maloletan.";
    } else {
        echo "Osoba nije punoletna";
    }
    
    
    
    
    ?>
</body>
</html>