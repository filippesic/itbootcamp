<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
        function mojaFunkcija() {
            echo "Hello Mars";
        }

        mojaFunkcija();

        echo "<br>";
        echo "<hr>";
    

        function mojaFunkcija2($ime, $prezime) {
            echo $ime . " " . $prezime .  "<br>";
        }
        
        function mojaFunkcija3($ime, $god) {
            echo "Ime: $ime, godine: $god <br>";
        }

        function mojaFunkcija4($i) {
            echo "* <br>";
        }
        
        mojaFunkcija2("Teodora", "Pesic");
        mojaFunkcija2("Filip", "Pesic");
        mojaFunkcija2("Pexa", "Pesic");

        echo "<br>";
        echo "<hr>";
        
    
        for($i = 1; $i <= 5; $i++) {
            mojaFunkcija2("Cuka", "Pesic");
        }

        for($i = 1; $i <= 10; $i++) {
            mojaFunkcija2("Filip", "Pesic");
        }

        for($i = 1; $i <= 4; $i++) {
            mojaFunkcija3("Filip", "26");
        }

        function zbir($a, $b) {
            $rez = $a + $b;
            echo $rez;
            echo "<br>";
        }

        zbir(10, 50);
        $a = 5;
        $b = 7;

        zbir($a, $b);

        $x = 12;
        $y = 35;

        zbir($x, $y);
        zbir($x, $x);



        for($i = 1; $i <= 10; $i++) { // 
            echo "<br>";
            for($j = 1; $j <= $i; $j++) {
                echo "*";
            }
        }

        for($i = 10; $i >= 1; $i--) { // 
            echo "<br>";
            for($j = 1; $j <= $i; $j++) {
                echo "*";
            }
        }

        echo "<br>";
        echo "<hr>";

        function zbir2($a, $b) {
            $rez2 = $a + $b;
            return $rez2;
        }

        $rezultat = zbir2(5, 17);
        echo $rezultat;

        echo "<br>";
        echo "<hr>";



        
        
        
    
    
    
    
    
    
    ?>
</body>
</html>