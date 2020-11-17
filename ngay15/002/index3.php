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
$cities1 = array("hà nội", "hồ chí minh", "đà nẵng", "hải phòng");

// in ra độ dài của mảng
echo "<br> độ dài : " . count($cities1);

// kiểm tra kiểu dữ liệu và in ra cấu trúc mảng
echo "<br>";
var_dump($cities1);

echo "<pre>";
print_r($cities1);
echo "</pre>";

$cities2 = [];

if (count($cities1) > 0) {
    echo "<br> cities1 có dữ liệu";
} else {
    echo "<br> cities1 rỗng";
}

if (count($cities2) > 0) {
    echo "<br> cities2 có dữ liệu";
} else {
    echo "<br> cities2 rỗng";
}

// kiểm tra 1 biến có phải là 1 mảng hay không
$abc = 1;
$checkCities1 = is_array($cities1);
$checkAbc = is_array($abc);
echo "<br>";

//echo "<br> checkCities1" . var_dump($checkCities1);
echo "<br>";
echo "<br>" . var_dump($checkAbc);

// kiểm tra xem 1 mảng có rỗng không
// hàm empty()
// empty() nếu biến rỗng trả về true
// empty() nếu biến rỗng trả về false
echo "<br>";
var_dump(empty($cities1));

// kiểm tra 1 biến dạng mảng có dữ liệu trả về true
// ko có dữ liệu trả về false

echo "<br>";
var_dump(!empty($cities1));
?>

</body>
</html>