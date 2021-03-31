<?php
//print_r($_POST);


if (isset($_POST["name"]))
{
$var1=$_POST['name'];
$var2 = $_POST['mail'];
$var3 = $_POST['age'];
echo $var1.$var2.$var3;
}
?>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>
    <ul> Name </label> <input name = "name" type = "text">  </ul>
    <ul> Mail <input name = "mail" type = "email"> </ul>
    <ul> Age <input name = "age" type = "number"> </ul>
    <ul> <input type ="submit"> </ul>
</form> 
 
</body> 
 
 
</html>