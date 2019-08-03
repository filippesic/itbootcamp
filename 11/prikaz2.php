<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prikaz1</title>
</head>

<body>

    <h2>Broj 1: <?php echo $_GET["broj1"]; ?></h2>
    <h2>Broj 2: <?php echo $_GET["broj2"]; ?></h2>
    <h2>Operacija: <?php echo $_GET["oper"]; ?></h2>
    <h2>
        Rezultat: <?php if ($_GET["oper"] == "+") {
                        echo $_GET["broj1"] + $_GET["broj2"];
                    } elseif ($_GET["oper"] == "-") {
                        echo $_GET["broj1"] - $_GET["broj2"];
                    } elseif ($_GET["oper"] == "*") {
                        echo $_GET["broj1"] * $_GET["broj2"];
                    } else {
                        echo $_GET["broj1"] / $_GET["broj2"];
                    }

                    ?>
    </h2>



</body>

</html>