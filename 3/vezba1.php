<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vezba 1</title>
</head>

<body>
    <?php

    $pol = "z";
    $godine = 22;

    if ($pol == "m") {
        if ($godine >= 18) {
            echo "Musko, punoletan";
        } else {
            echo "Musko, maloletan";
        }
    } else {
        if ($godine >= 18) {
            echo "Zensko, punoletna";
        } else {
            echo "Zensko, maloletna";
        }
    }

    ?>
</body>

</html>