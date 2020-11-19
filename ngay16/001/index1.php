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

    <pre>
        - mảng chỉ số là mảng có key là các số
        - mảng kết hợp là mảng có key là chuỗi
        - mảng đa chiều là mảng phức tạp
        mỗi phần tử lại lại là 1 mảng con
        ( mảng lồng mảng )
    </pre>

    <?php
    $cities = [];
    // thêm các phần tử cho mảng này
    $cities[] = [
        "name" => "hà nội",
        "district" => ["quận tây hồ", "quận hoàn kiếm", "quận hai bà trưng"]
    ];

    $cities[] = [
        "name" => "hồ chí minh",
        "district" => ["quận 1", "quận 2", "quận gò vấp"]
    ];

    $cities[] = [
        "name" => "đà nẵng",
        "district" => ["quận sơn trà", "quận ngũ hành sơn", "quận hải châu"]
    ];

    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // muốn in ra hà nội
    echo "<br>" . $cities[0]['name'];

    // quận tây hồ
    echo "<br>" . $cities[0]['district'][0];
    echo "<br>" . $cities[0]['district'][2];


    echo "<br>" . $cities[2]['district'][1];

    ?>

</body>
</html>