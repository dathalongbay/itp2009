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
// hủy cookie đặt tham số thời gian quá hạn là thời gian quá khứ
// time() trả ra thời gian hiện tại timestamp
setcookie("search", "laptop", time() - (86400), "/");

// in ra $_COOKIE
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// $_GET , $_POST , $_SESSIOn , $_COOKIE
?>

</body>
</html>