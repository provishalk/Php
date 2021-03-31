
<?php
        echo "This is running using PHP";
        if(isset($_POST["name"])){
            $var1=$_POST['name'];
            echo $var1;
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="FormInputPOST.php" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>