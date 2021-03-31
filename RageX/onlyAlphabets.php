<!-- Only Alphabets RageX -->
<?php
$pattern = "/^[A-Z][A-Za-z]{2,}$/";
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
    <form action="onlyAlphabets.php" method="POST">
        <label for="mystring">Enter Alphabets</label>
        <input type="text" id="mystring" name="mystring" class="mystring"><br>
        <input type="submit" value="CHECK">
    </form>
</body>
</html>