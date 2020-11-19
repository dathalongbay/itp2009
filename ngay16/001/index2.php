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
        lặp mảng đa chiều bằng vòng lặp foreach
    </pre>

    <?php
    $cities1 = [
        0 => [
            "name" => "hà nội",
            "district" => ["quận tây hồ", "quận hoàn kiếm", "quận hai bà trưng"]
        ],
        1 => [
            "name" => "hồ chí minh",
            "district" => ["quận 1", "quận 2", "quận gò vấp"]
        ],
        2 => [
            "name" => "đà nẵng",
            "district" => ["quận sơn trà", "quận ngũ hành sơn", "quận hải châu"]
        ]
    ];

    echo "<pre>";
    print_r($cities1);
    echo "</pre>";
    ?>

    <ul>
        <li>Hà nội
            <ul>
                <li>tây hồ</li>
                <li>hoàn kiếm</li>
                <li>hai bà trưng</li>
            </ul>
        </li>
        <li>
            Hồ chí minh
            <ul>
                <li>quận 1</li>
                <li>quận 2</li>
                <li>quận 11</li>
            </ul>
        </li>
        <li>
            Đà nẵng
            <ul>
                <li>quận sơn trà</li>
                <li>quận hải châu</li>
            </ul>
        </li>
    </ul>

    <h1>In ra bằng vòng lặp</h1>

    <?php
    if (is_array($cities1) && !empty($cities1)) {
        ?>
        <ul>
        <?php
        foreach($cities1 as $keyCity => $city) {
           /* echo "<pre>";
            print_r($city);
            echo "</pre>";*/
            ?>
            <li>
                <?php echo $city['name'] ?>
                <?php if (is_array($city['district']) && !empty($city['district'])) {
                    ?>
                    <ul>
                        <?php
                        foreach($city['district'] as $keyDistrict => $district) {
                            ?>
                            <li><?php echo $district ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>
            </li>

            <?php
        }
        ?>
        </ul>
        <?php
    }
    ?>



</body>
</html>