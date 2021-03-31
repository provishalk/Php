<!-- Check Mobile No -->
<?php
$pattern = "/^(\+91\s?[1-9][0-9]{9})$/";
if(isset($_POST["mystring"])){
    $var1=$_POST['mystring'];   
    if(preg_match($pattern, $var1)==1){
        echo "Valid";
    }
    else{
        echo "Invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="checkMobileNo.php" method="POST">
        <label for="mystring">Enter Mobile NO:</label>
        <input type="text" id="mystring" name="mystring" class="mystring"><br>
        <input type="submit" value="CHECK">
    </form>
</body>
</html>