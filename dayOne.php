<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is day one of PHP</h1>
    <?php 
        $learning = "PHP";
        $x = 10 /*+ 20*/ + 30;
        $name = "Vishal Kumar";
        function Greetings($who){
            $GLOBALS['x'] = 50;
            echo "Good Morning <br>". $GLOBALS['x'];
            print("Hello");
        }
        Greetings(10);
        echo "I am learning $learning $x";
    ?>
</body>
</html>