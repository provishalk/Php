<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
     <form method="POST" action="./SelfLearning.php">
            <input type="text" id="name" name="fname">
            <input type="submit" value="Submit">
     </form>   
     <a href="./SelfLearning.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name = $_REQUEST["fname"];
    if(empty($name)){
        echo "Enter Name First";
    }
    else{
        echo $name;
    }
}


?>