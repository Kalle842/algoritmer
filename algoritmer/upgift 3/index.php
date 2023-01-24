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
            if($num <= 1){ // kollar ifall $num är större eller lika med 1
                return 1;
            }
                  else  
                { 
                for($x=$num; $x >= 1; $x++){
                    $num = $num * $x;
                };
            }
        };
        echo factorialtal(5);
    ?> 
</body>
</html>