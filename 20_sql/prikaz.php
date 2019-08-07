<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prikaz</title>
</head>

<body>
    <?php $broj1 = $broj2 = $oper = "";

    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $database = "calculator";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
    }

    echo "Uspesna konekcija";

    echo "<br>";

    ?>

    <h2>Broj 1: <?php echo $_POST["broj1"]; ?></h2>
    <h2>Broj 2: <?php echo $_POST["broj2"]; ?></h2>
    <h2>Operacija: <?php echo $_POST["oper"]; ?></h2>
    <h2>
        Rezultat: <?php if ($_POST["oper"] == "+") {
                        echo $_POST["broj1"] + $_POST["broj2"];
                    } elseif ($_POST["oper"] == "-") {
                        echo $_POST["broj1"] - $_POST["broj2"];
                    } elseif ($_POST["oper"] == "*") {
                        echo $_POST["broj1"] * $_POST["broj2"];
                    } else {
                        echo $_POST["broj1"] / $_POST["broj2"];
                    }

                    ?>
    </h2>



</body>

</html>