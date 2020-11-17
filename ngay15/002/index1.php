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
    $cities = array("hà nội", "hồ chính minh", "đà nẵng", "hải phòng");

    // in ra cấu trúc mảng
    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // in ra giá trị của 1 phần tử
    echo "<br>" . $cities[0];
    echo "<br>" . $cities[1];
    echo "<br>" . $cities[2];
    echo "<br>" . $cities[3];
    ?>
</body>
</html>