<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE['$ciastko'])){
        setcookie ('$ciastko',1,time()+30);
        echo "Brak Ciastka";
    } else {
        echo "Ustawiono Ciastko";
    }
    echo "<br>".date("Y:m:d:s");
    echo "<br>".date().now();
    ?>
    
</body>
</html>