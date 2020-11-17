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
    $cities1 = array("hà nội", "hồ chính minh", "đà nẵng", "hải phòng");

    // cú pháp php7
    $cities2 = ["hà nội", "hồ chính minh", "đà nẵng", "hải phòng"];

    // cách 3 tạo ra mảng trước và thêm phẩn tử vào sau khi tạo mảng
    $cities3 = [];

    $cities3[0] = "hà nội";
    $cities3[1] = "hồ chí minh";
    $cities3[2] = "đà nẵng";
    $cities3[3] = "hải phòng";

    // cách 4 tự đánh key cho mảng
    $cities4 = [];
    $cities3[] = "hà nội";
    $cities3[] = "hồ chí mình";
    $cities3[] = "đà nẵng";
    $cities3[] = "hải phòng";


    ?>
</body>
</html>
