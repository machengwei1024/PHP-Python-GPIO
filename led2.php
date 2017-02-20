<?php
$fromurl="index.php";
if( $_SERVER['HTTP_REFERER'] == "" )
{
header("Location:".$fromurl); exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>电灯系统</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="refresh" content="0.1;url=index.php">
    </head>
    <body>
        <?php
            exec('sudo python led2.py');
         ?>
    </body>
</html>
