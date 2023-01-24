<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upgift 3</title>
</head>
<body>
    <?php 
        function factorialtal($num){
            if($num <= 1){ // kollar ifall $num är större eller lika med 1 ifall den är det så skickar den 1
                return 1;
            }
            else  // ifall inte if satsen stämmer så kommer den köra följande for loop
            { 
                for($x=$num-1;$x > 1; $x--){/* denna for loop säger att x är lika med (num - 1) och det 
                    loopas tills x fortfarande är större än ett medans num också gångas med alla värden på x 
                    då x är större än ett  */ 
                    $num *= $x;// num gångas med alla värden på x då x är större än 1
                }
            }
            return $num;// skickar vad $num blir till slut
        }
        echo factorialtal(5);// visar upp resulatet av function på hemsidan
    ?> 
</body>
</html>