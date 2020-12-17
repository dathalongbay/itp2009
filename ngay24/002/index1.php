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

$str = "Visit W3Schools and T2 W3Schools abc w3Schools";

$pattern = "/w3schools/i";

// $matches là kết quả tìm kiếm được dựa vào biểu thức regex
// hàm preg_match_all() trả về số lần tìm thấy
// trả về 0 là ko tìm thấy
echo "<br>" . preg_match_all($pattern, $str, $matches); // Outputs 1

echo "<pre>";
print_r($matches);
echo "</pre>";

?>

</body>
</html>