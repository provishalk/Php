<!-- This is to check whether mail id is valid for VITBHOPAL or not -->
<?php
$str = "vishal.kummar@vitbhopal.ac.in";
$pattern = "/@vitbhopal\.ac\.in$/i";
if(preg_match($pattern, $str)==1){
    echo "Valid Mail id";
}
else{
    echo "Invalid Mail id";
}
?>