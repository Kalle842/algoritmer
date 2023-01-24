<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upgift 4</title>
</head>
<body>
    <?php
    $n = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ,13, 14 ,15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32);// varaibel för en array med 
    function middle(){
        $d = array_sum($n);// variabel som innehåller värdet på alla numer i arrays värde tillsamans
        $c = count($n); // variabel för att räkna antalet siffror
        $f = $d / $c; // variabel för vad d delat på c blir på hemsidan
        return $f
    };
    echo implode($f);
    ?>
</body>
</html>