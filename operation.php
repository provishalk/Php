<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 2;
        $b = 3;
        $c = 2;
        $answer1 = $a+$b+$c;
        echo " a+ b+ c = ".$answer1."</br>";
        $answer2 = ($a+$b)*$c;
        echo "(a+b)*c = ".$answer2."</br>";
        echo "A+B to power C = ".pow($a+$b,$c);
        
    ?>
</body>
</html>