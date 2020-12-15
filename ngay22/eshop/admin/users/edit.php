<?php
include_once "../../define.php";
// nạp file kết nối đến CSDL
include_once "../../lib/connect.php";

?>


<div style="background-color: pink">
    <?php

    // bắt đầu update từ đây
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (count($_POST) > 1) {
        // quá trình submit dữ liệu đi

        $userIdUpdate = (int) $_POST["id"];
        $newUserName = $_POST["username"];
        $newUserAvatar = $_POST["user_avatar"];

        $sql = "UPDATE users
SET username='$newUserName', user_avatar='$newUserAvatar'
WHERE id=$userIdUpdate";

        echo $sql;

        // Prepare statement

        $stmt = $connection->prepare($sql);
        // execute the query

        $stmt->execute();

        // echo a message to say the UPDATE succeeded

        echo "<div style='color:red'>".$stmt->rowCount() . " bản ghi được cập nhật thành công </div>";

    }


    ?>
</div>


<?php
if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
    $userId = (int) $_GET["id"];


    $sql = "SELECT * FROM users WHERE id=$userId";

    $stmt = $connection->prepare($sql);

    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $user = $stmt->fetchAll();

    var_dump($user);

    echo "<pre>";
    print_r($user);
    echo "</pre>";

    $user = isset($user[0]) ? $user[0] : null;

    var_dump($user);

    echo "<pre>";
    print_r($user);
    echo "</pre>";


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

        <h1>sửa user</h1>

        <div class="row">
            <div class="col-md-12">


                <form name="usersubmit" method="post" action="">
                    <div class="form-group">
                        <label for="text">ID:</label>

                        <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                        <?php echo $user["id"] ?>
                    </div>

                    <div class="form-group">
                        <label for="text">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter" id="text" value="<?php echo $user["username"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ảnh người dùng:</label>
                        <input type="text" name="user_avatar" class="form-control" placeholder="Enter" id="text" value="<?php echo $user["user_avatar"] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">sửa người dùng</button>
                </form>
            </div>
        </div>


    </div>

</body>
</html>