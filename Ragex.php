<!DOCTYPE html>
<html>
<body>

<?php
$userinfo = "Name: <b>Shaurya</b>  Title: <b>JAVA Lover</b>
Name: <b>Abhishek</b> Title: <b>JAVA Lover</b>
Name: <b>Vishal</b> Title: <b>Node Lover</b>
Name: <b>VED </b> Title: <b>Comic Reader</b>";
preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $matches);
for ($i=0; $i< count($matches[0]); $i++) {
echo  $matches[0][$i]."<br>";
}
?>

</body>
</html