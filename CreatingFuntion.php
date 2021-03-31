<?php
    $list_of_prime = array(2,3,5,7);
    function add($list){
        $sum = 0;
        foreach($list as $value){
            $sum += $value;
        }
        return $sum;
    }
    echo "SUM OF ARRAY:".add($list_of_prime);
?>