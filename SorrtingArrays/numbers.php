<?php

$list = array("n1"=>"Vishal Kumar","n2"=>"Nitin Kumar",);
arsort($list);
echo $list["n2"];
foreach($list as $values){
    echo $values."<br>";
    
}
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
// echo $list;
// 
// sort($list);
// echo $list;

?>