<?php
    $number1 =10;
    $number2 =20;
    function add($num1,$num2){
        $sum = $num1+$num2;
        $GLOBALS['Gsum'] = $num1+$num2;
        return $sum;
    }
    add(10,29);
    // echo($sum); OUT OF SCOPE WON'T ABLE TO ACESS OUTSIDE THE FUNCTIOM
    echo "$Gsum"; // ONLY ACCESABLE IF FUNCTION IS CALLED AT ONCE
?>