<?php
$name = "MCA";
$value = 100;
$expiration= time()+(60*60*24*7);
//60 seconds * 60 mins *24 hours *7 days
setcookie($name, $value, $expiration);
?>