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

    <pre>
        A session is a way to store information (in variables) to be used across multiple pages.
        Session là cách lưu trữ thông tin trong biến mà có thể sử dụng được
        trong nhiều trang
        *** chú ý :
        đặt hàm session_start() trên cùng của file php mà sử dụng session
    </pre>

    <?php
    // cách tạo ra session trong PHP
    // giống mảng kết hợp
    $_SESSION["name"] = "nguyễn văn an";
    $_SESSION["email"] = "antt@gmail.com";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    // thay đổi
    $_SESSION["name"] = "nguyễn văn an bình";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>

</body>
</html>