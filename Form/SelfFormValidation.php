<?php
    $errname = "";
    $name = "";
    if(isset($_POST["name"])){
        $regName = "/^[a-zA-Z ]+$/";
        if(!preg_match($regName,$_POST["name"]))
        {
            $errname = "Please enter valid name";
        }
        else{
            $name = $_POST["name"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Form</title>
</head>
<body>
    <form action="./SelfFormValidation.php" method="POST">
        Enter Name: <input type="text" name="name"> * <?php echo $errname;?><br>
                    <input type="submit" value="Send">
    </form>     
    <h1>Your Data:</h1>
    <?php
        echo "Name: ".$name;
    ?>
</body>
</html>