<?php
echo "HELLO";
if(isset($_GET["name"])){
    $var1=$_GET['name'];
    echo $var1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action = "FormUsingPOST.php" method="GET">
    <input name = "name" type = "text">
    <input type ="submit">
    </form>
</body>
</html>