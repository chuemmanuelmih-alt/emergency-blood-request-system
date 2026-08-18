<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("HOSTNAME",'localhost');
    define("USERNAME",'root');
    define("PASSWORD",'');
    define("DATABASE",'test');

    $conection= mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    if ($conection) {
        die("connection failed");
        }

        else {
            echo "yes";
            }
    ?>
</body>
</html>