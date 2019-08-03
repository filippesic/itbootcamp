<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sort vezbe</title>
</head>
<body>
    <?php
    
    $niz = array("Filip" => "26", "Ivan" => "19", "Viktor" => "22");

    function stampaj($niz) {
        foreach($niz as $vrednost => $godina) {
            echo " " . $vrednost . " " . $godina;
        }
    }

    // sort($niz);
    // stampaj($niz);

    // echo "<hr> SORT: ";

    // rsort($niz);
    // stampaj($niz);

    echo "<hr> RSORT"; // IME NIJE TACNO

    asort($niz);
    stampaj($niz);

    echo "<hr> ASORT";

    ksort($niz);
    stampaj($niz);

    echo "<hr> KSORT";

    arsort($niz);
    stampaj($niz);

    echo "<hr> ARSORT";

    krsort($niz);
    stampaj($niz);

    echo "<hr> KRSORT";
    
    
    
    
    
    
    
    ?>
</body>
</html>