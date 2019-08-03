<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If operatori</title>
</head>

<body>
    <?php

    $a = 1;
    $b = 3;

    if ($a > $b) {
        echo "A je vece od B";
    } else if ($a == $b) {
        echo "A je jednako B";
    } else {
        echo "A nije vece od B";
    }


    $minuti = 73;

    if ((int)($minuti / 60 == 1)) {
        echo "<p>Proslo je:" . (int)($minuti / 60) .  "i" .  $minuti % 60 . " minuta.</p>";
    } else {
        echo "<p>Proslo je 0h i</p>" . $minuti % 60 . " minuta.";
    }
    
    ?>
</body>

</html>