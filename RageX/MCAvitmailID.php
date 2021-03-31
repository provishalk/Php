<!-- Validate Mail id -->
<?php
$pattern = "/^[a-z]{1,15}\.[a-z]{1,15}2020@vitbhopal\.ac\.in$/i";
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
    <form action="MCAvitmailID.php" method="POST">
        <label for="mystring">VIT Mail ID</label>
        <input type="text" id="mystring" name="mystring" class="mystring"><br>
        <input type="submit" value="CHECK">
    </form>
</body>
</html>
<!-- vishal.kumar2020@vitbhopal.ac.in -->