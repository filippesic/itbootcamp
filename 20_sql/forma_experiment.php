<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Experiment</title>
</head>

<body>

    <?php

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
    mysqli_set_charset($conn, "utf8");

    //$dodavanje = "INSERT INTO pacijenti (id, god_rodjenja, ime, prezime, tezina, visina)
    //    VALUES(14, '1999', 'Teca', 'Ljiljkovic', 83, 184)";
    $rezultat = 0;
    $broj1 = $broj2 = $oper = "";

    $sql = 'INSERT INTO racunanje (broj1, broj2, operacija, rezultat)
    VALUES($_POST["broj1"], $_POST["broj2"], $_POST["oper"], $rezultat)';

    if ($_POST["oper"] == "+") {
        $rezultat = $_POST["broj1"] + $_POST["broj2"];
    } elseif ($_POST["oper"] == "-") {
        $rezultat = $_POST["broj1"] - $_POST["broj2"];
    } elseif ($_POST["oper"] == "*") {
        $rezultat = $_POST["broj1"] * $_POST["broj2"];
    } else {
        $rezultat = $_POST["broj1"] / $_POST["broj2"];
    }    

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" .
            mysqli_error($conn);
    }

    ?>

    <form action="prikaz.php" method="post">
        <label>Broj 1: </label><input type="text" name="broj1"> <br><br>
        <label>Broj 2: </label><input type="text" name="broj2"> <br><br>
        <label>Operacija: </label><input type="text" name="oper"> <br><br>
        <input type="submit" value="Potvrdi">
    </form>

</body>

</html>