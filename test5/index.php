<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Test 5</title>
</head>

<body>
    <h1>Izracunajte</h1>

    <img src="img/matematikaPNG.png" alt=""><br><br>

    <?php

    // $broj1 = $broj2 = $oper = "";

    // if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //     if (isset($_GET["broj1"]) == FALSE) {
    //         echo "Vrednost ne moze biti prazna";
    //     } else {
    //         $_GET["broj1"];
    //     }
    //     if (isset($_GET["broj2"]) == FALSE) {
    //         echo "Vrednost ne moze biti prazna";
    //     } else {
    //         $_GET["broj2"];
    //     }
    // }

    ?>

    <form action="index.php" method="get">
        <label for="">Broj A: </label><input type="text" name="broj1">
        <br><br>
        <label for="">Broj B: </label><input type="text" name="broj2">
        <br><br>

        <input type="radio" name="oper" value="saberi" checked>Saberi
        <br><br>
        <input type="radio" name="oper" value="oduzmi">Oduzmi
        <br><br>
        <input type="radio" name="oper" value="pomnozi">Pomnozi
        <br><br>
        <input type="radio" name="oper" value="podeli">Podeli
        <br><br>
        <input type="submit" value="Izracunaj">
    </form>

    <h2> Rezultat:
        <?php

        $broj1 = $broj2 = $oper = "";

        if (isset($_GET["broj1"]) || isset($_GET["broj2"]) == TRUE) {
            if ($_GET["oper"] == "saberi") {
                echo '<span>' . $_GET["broj1"] . " + " . $_GET["broj2"] . " = " . '</span>';
                echo '<span>' . ($_GET["broj1"] + $_GET["broj2"])  . '</span>';
            } elseif ($_GET["oper"] == "oduzmi") {
                '<span>' . $_GET["broj1"] . " + " . $_GET["broj2"] . " = " . '</span>';
                echo '<span>' . ($_GET["broj1"] - $_GET["broj2"])  . '</span>';
            } elseif ($_GET["oper"] == "pomnozi") {
                '<span>' . $_GET["broj1"] . " + " . $_GET["broj2"] . " = " . '</span>';
                echo '<span>' . $_GET["broj1"] * $_GET["broj2"]  . '</span>';
            } else {
                '<span>' . $_GET["broj1"] . " + " . $_GET["broj2"] . " = " . '</span>';
                echo '<span>' . $_GET["broj1"] / $_GET["broj2"]  . '</span>';
            }
        } else {
            echo "";
        }


        ?>

    </h2>

</body>

</html>