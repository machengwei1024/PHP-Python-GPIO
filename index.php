<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>电灯系统</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php

        $state = exec('sudo python state.py');
        $state_arr = explode(" ",$state);

        if ($state_arr[0] == 1) {
            $led1_btn = "ON";
            $led1_url = "open-led1.php";
        }else {
            $led1_btn = "OFF";
            $led1_url = "close-led1.php";
        }

        if ($state_arr[1] == 1) {
            $led2_btn = "ON";
            $led2_url = "open-led2.php";
        }else {
            $led2_btn = "OFF";
            $led2_url = "close-led2.php";
        }
?>

        <header class="header">
            <h2 class="title">电灯控制系统</h2>
        </header>
        <div class="main">
            <form id="led1-block" action="led1.php" method="post">
            <span>房内:</span><input id="led1-btn-o" type="submit" name="led1" value="<?php echo $led1_btn ?>">
            </form>
            <form id="led1-block" action="led2.php" method="post">
            <span>房外:</span><input id="led2-btn-o" type="submit" name="led2" value="<?php echo $led2_btn ?>">
            </form>
        </div>
    </body>
</html>
