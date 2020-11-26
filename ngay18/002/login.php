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
    // username : admin777
    // password : 12345abcd

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    if (isset($_SESSION["admin"])) {
        // đăng nhập rồi
        header("Location: index.php");
        exit();
    }

    if (isset($_SESSION["count_login"]) && ($_SESSION["count_login"] > 5)) {
        //
        echo "đã quá số lần đăng nhập";
        exit();
    }

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // trim() cắt khoảng trắng 2 đầu của chuỗi
        $username = trim($_POST["username"]);
        $password = $_POST["password"];




        if ($username == "admin777" && $password == "12345abcd") {
            // tạo session admin đăng nhập thành công
            $_SESSION["admin"] = [
                "name" => "admin777",
                "password" => "12345abcd",
            ];
            unset($_SESSION["count_login"]);

            header("Location: index.php");
            exit();
        } else {
            // nhập sai thông tin đăng nhập

            // tạo session đếm số lần login sai
            if (isset($_SESSION["count_login"])) {
                $_SESSION["count_login"] += 1;
            } else {
                $_SESSION["count_login"] = 1;
            }

            echo "<h2 style='color:red'>Thông tin đăng nhập chưa đúng</h2>";

        }

    }
    ?>

    <div style="margin: 100px auto; width: 600px">
        <form name="login" method="post" action="">
            <p>
                <label>Nhập username/email để đăng nhập</label>
                <input type="text" name="username" value="">
            </p>
            <p>
                <label>Nhập mật khẩu</label>
                <input type="password" name="password" value="">
            </p>
            <p>
                <input type="submit" name="submit" value="Đăng nhập" />
            </p>
        </form>
    </div>

</body>
</html>