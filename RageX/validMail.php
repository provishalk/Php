<!-- Validate Mail id -->
<?php
$pattern = "/.+@vitbhopal\.ac\.in$/";
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
    <form action="validMail.php" method="POST">
        <label for="mystring">Mail ID</label>
        <input type="text" id="mystring" name="mystring" class="mystring"><br>
        <input type="submit" value="CHECK">
    </form>
</body>
</html>