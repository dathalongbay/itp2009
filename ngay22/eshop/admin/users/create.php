<?php
include_once "../../define.php";
// nạp file kết nối đến CSDL
include_once "../../lib/connect.php";

//$connection

var_dump($_POST);

if (count($_POST) > 0) {
    if (isset($_POST["username"]) && isset($_POST["user_avatar"]) && (strlen($_POST["username"]) > 0) && (strlen($_POST["user_avatar"]) > 0)) {
        $username = $_POST["username"];
        $user_avatar = $_POST["user_avatar"];

        $sql = "INSERT INTO users (username, user_avatar)
  VALUES ('$username', '$user_avatar')";

        echo $sql;

        $response = $connection->exec($sql);

        if ($response == 1) {
            echo "<div style='color:red'>Đã insert thành công</div>";
        }
    } else {
        echo "<div style='color:red'>Dữ liệu không hợp lệ</div>";
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Thêm người dùng</h1>
        <div class="row">
            <div class="col-md-12">

                <form name="usersubmit" method="post" action="">
                    <div class="form-group">
                        <label for="text">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter" id="text">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ảnh người dùng:</label>
                        <input type="text" name="user_avatar" class="form-control" placeholder="Enter" id="text">
                    </div>

                    <button type="submit" class="btn btn-primary">thêm người dùng</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>