<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    // kiểm tra session có tồn tại hay ko dùng hàm isset()
    if (isset($_SESSION["name"])) {
        echo $_SESSION["name"];
    }
    ?>

</body>
</html>