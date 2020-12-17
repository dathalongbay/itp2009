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

$str = "Visit W3Schools W3Schools";

$pattern = "/w3schools/i";

// preg_match(param1, param2)
// param1 là biểu thức chính quy
// param2 là chuỗi mà sẽ tìm kiếm
// preg_match() trả về 1 nếu tìm thấy trả về 0 nếu ko tìm thấy
echo preg_match($pattern, $str); // Outputs 1

?>

</body>
</html>