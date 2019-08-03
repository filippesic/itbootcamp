<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    // 1.
    
    $i = 0;

    while($i < 20) {
        $i++;    
        echo $i . " ";    
    }
    
    echo "<br>";    
    
    // 2.

    $j = 20;

    while($j >= 1) {
        echo $j . " ";
        $j--;
    }
    
    echo "<br>"; 
    
    // 3. 

    $i = 0;

    while($i <= 20) {
        echo $i += 2;
    }
    echo "<br>"; 
    
    // 4.
    
    // $k = 5;
    // $m = 15;
    // $i = $k;

    // while($k <= $m) {
    //     echo $i * 2;
    //     $i++;
    // }
    
    // 5.

    $suma = 0;
    $i = 0;

    while($i <= 100) {
        $suma += $i;
    }
    echo $suma;
    echo "<br>";
    
    
    
    ?>
</body>
</html>