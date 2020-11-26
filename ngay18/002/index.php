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

    // $_SESSION["admin"]
    if (!isset($_SESSION["admin"])) {
        // chưa đăng nhập
        // chuyển hướng trang login.php sử dụng header();
        // header("Location: url"); exit();
        // ví dụ header("Location: www.google.com"); exit();
        // ví dụ header("Location: www.zing.vn"); exit();

        header("Location: login.php");
        exit();
        //header("Location: http://localhost/itp2009/ngay18/002/login.php"); exit();
    }


    ?>

    <h1>Trang quản trị admin, chào <?php echo $_SESSION["admin"]["name"] ?></h1>

    <ul>
        <li><a href="">Thêm sản phẩm</a></li>
        <li><a href="">Thêm khách hàng</a></li>
        <li><a href="">Quản lý sản phẩm</a></li>
        <li><a href="">Quản lý khách hàng</a></li>
        <li><a href="<?php echo "logout.php"; ?>">Đăng xuất</a></li>
    </ul>

</body>
</html>