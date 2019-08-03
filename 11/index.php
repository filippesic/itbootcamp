<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET / POST</title>
    <style>
        form {
            width: 40%;
        }

        label {
            display: inline-block;
            width: 30%;
        }
    </style>
</head>

<body>
    <!-- <form action="prikaz.php" method="get">
        <label>Ime: </label><input type="text" name="ime"> <br><br>
        <label>E-Mail: </label><input type="email" name="email"> <br><br>
        <label for="">Godine: </label><input type="password" name="age"><br><br>
        <label for="">Godine</label><select name="gender" id="">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <br><br>
        <label for="">JMBG: </label><input type="text" name="jmbg"><br><br>
        <input type="submit" value="Potvrdi">

        </form>

        <br><br>



        <form action="prikaz1.php" method="post">
        <label>Ime: </label><input type="text" name="ime1"> <br><br>
        <label>E-Mail: </label><input type="email" name="email1"> <br><br>
        <label for="">Godine: </label><input type="text" name="age1"><br><br>
        <select name="gender1" id="">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <br><br>
        <label for="">JMBG: </label><input type="text" name="jmbg1"><br><br>
        <input type="submit" value="Potvrdi">

        </form> 

        <br><br>


        <form action="prikaz3.php" method="get">
        <label>Broj 1: </label><input type="text" name="broj1"> <br><br>
        <label>Broj 2: </label><input type="text" name="broj2"> <br><br>
        <label>Operacija: </label><input type="text" name="oper"> <br><br>
        <input type="submit" value="Potvrdi">
    </form> -->

    <!-- index.php u action treba --> 
    <h1>PHP validacija forme</h1>
    <form action="index.php" method="get"> 
        <label>Ime: </label><input type="text" name="ime3"> <br><br>
        <label>E-Mail: </label><input type="email" name="email3"> <br><br>
        <label for="">Godine: </label><input type="text" name="age3"><br><br>
        <label for="">Sajt: </label><input type="text" name="site3"><br><br>
        <label for="">Pol: </label><select name="gender3" id="">
            <option value="M" name="gender">M</option>
            <option value="F" name="gender">F</option>
            <option value="Other" name="gender">Other</option>
        </select> <br>
        <label for="">Komentar: </label><input type="textarea" name="comm3"><br><br>
        <label for="">JMBG: </label><input type="text" name="jmbg3"><br><br>
        <input type="submit" value="Potvrdi">
    </form>



    <?php

    echo "<h2>Vas unos: </h2>";

    echo $_GET["ime3"];
    echo "<br>";
    echo $_GET["email3"];
    echo "<br>";
    echo $_GET["age3"];
    echo "<br>";
    echo $_GET["site3"];
    echo "<br>";
    echo $_GET["gender3"];
    echo "<br>";
    echo $_GET["comm3"];
    echo "<br>";
    echo $_GET["jmbg3"];
    echo "<br>";


    ?>


</body>

</html>