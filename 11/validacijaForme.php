<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacija forme</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>

    <?php

    $ime = $prezime = $email = $website = $komentar = $gender = $pravila =  "";
    $imeO = $prezimeO = $emailO = $websiteO = $komentarO = $genderO = $pravilaO = "*";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["ime"]) == TRUE) {
            $imeO = "Ime ne sme biti prazan string";
        } elseif (preg_match("/^[a-z A-Z]*$/i", $_POST["ime"]) == FALSE) { // FIXED!
            $imeO = "Ime moze sadrzati samo slova";
        } else {
            $ime = $_POST["ime"];
        }

        if(empty($_POST["prezime"]) == TRUE){ // ????????????????????????????????? FIXED
            $prezimeO = "Prezime ne sme biti prazan string";
        } elseif(preg_match("/^[a-z A-Z]*$/i", $_POST["prezime"]) == FALSE) {
            $prezimeO = "Prezime moze sadrzati samo slova";
        } else {
            $prezime = $_POST["prezime"];
        }

        if(empty($_POST["email"]) == TRUE) {
            $emailO = "E-Mail ne sme biti prazan string";
        } elseif(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == FALSE) {
            $emailO = "Email nije lepo unet";
        } else {
            $email = $_POST["email"];
        }

        if(empty($_POST["website"]) == TRUE) {
            $websiteO = "Website ne sme biti prazan string";
        } elseif(filter_var($_POST["website"], FILTER_VALIDATE_URL) == FALSE) {
            $websiteO = "Website nije lepo unet";
        } else {
            $website = $_POST["website"];
        }

        if(strlen($_POST["komentar"]) < "16") {
            $komentarO = "Komentar ima manje od 15 karaktera";
        } else {
            $komentar = $_POST["komentar"];
        }

        if(isset($_POST["gender"]) == FALSE) {
            $genderO = "Morate da odaberete pol";
        } else {
            $gender = $_POST["gender"];
        }


        //$gender = $_POST["gender"];

        if (isset($_POST["pravila"]) == TRUE) {
            $pravila = "Pravila prihvacena";
        } else {
            $pravila = "Pravila nisu prihvacena";
        }
    }


    ?>

    <form action="validacijaForme.php" method="post">
        Ime:
        <input type="text" name="ime">
        <span class="error"><?php echo $imeO; ?></span>
        <br><br>

        Prezime:
        <input type="text" name="prezime">
        <span class="error"><?php echo $prezimeO; ?></span>
        <br><br>

        E-Mail:
        <input type="email" name="email">
        <span class="error"><?php echo $emailO; ?></span>
        <br><br>

        Website:
        <input type="text" name="website">
        <span class="error"><?php echo $websiteO; ?></span>
        <br><br>

        Komentar:
        <textarea id="" cols="30" rows="10" name="komentar"></textarea>
        <span class="error"><?php echo $komentarO; ?></span>
        <br><br>

        Pol:
        <input type="radio" name="gender" value="zenski">Zenski
        <input type="radio" name="gender" value="muski">Muski
        <input type="radio" name="gender" value="ostalo">Ostalo
        <span class="error"><?php echo $genderO; ?></span>
        <br><br>

        Prihvatite pravila koriscenja:
        <input type="checkbox" name="pravila" value="da">
        <br><br>

        <input type="submit" value="Potvrdi">
    </form>

    <?php

    echo "<h2>Vasi podaci</h2>";
    echo "Korisnik: " . $ime . " " . $prezime;
    echo "<br>";
    echo "Korisnicki emal: " . $email;
    echo "<br>";
    echo "Website korisnika: " . $website;
    echo "<br>";
    echo "Komentar korisnika: " . $komentar;
    echo "<br>";
    echo "Pol korisnika: " . $gender;
    echo "<br>";
    echo "Prihvacena pravila korisnenja: " . $pravila;
    echo "<br>";


    ?>

</body>

</html>