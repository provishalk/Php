<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: powderblue;}
        h1{color: blue;}
        p{color: blue;}
    </style>
</head>
<body>
    <h1>This is HTML in a PHP file</h1>
    <p id="demo">Hi this is the wonderful thing.</p>
    <p>Hi this is now Wonderfull</p>
    <script>
        setTimeout(() => {
            document.getElementById("demo").style.color = "black";
        }, 5000);
    </script>
    <?php
    echo "Hello World! 111";
    ?>
</body>
</html>