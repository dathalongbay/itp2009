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
    echo "<pre>";
    print_r($cities1);
    echo "</pre>";

    // hủy 1 phần tử dựa vào key
    unset($cities1[2]);


    echo "<pre>";
    print_r($cities1);
    echo "</pre>";
    ?>

</body>
</html>