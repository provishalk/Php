<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $_SESSION["favcolor"] = "GREEN";
        $_SESSION["name"] = "VISHAL";
        echo "session variable is created"
    ?>
</body>
</html>