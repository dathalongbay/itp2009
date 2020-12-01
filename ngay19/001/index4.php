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
// tạo ra cookie
// cookie lưu trên máy khách
// session lưu trên máy chủ
// setcookie(name, value, expire, path, domain, secure, httponly);
setcookie("search", "laptop", time() + (30*86400), "/");
setcookie("product", "điện thoai samsung s5", time() + (30*86400), "/");

// in ra $_COOKIE
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "<br>" . $_COOKIE["product"];

// $_GET , $_POST , $_SESSIOn , $_COOKIE
?>

</body>
</html>