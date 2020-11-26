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
        Thời gian trong PHP
        1 - in ra thời gian hiện tại trong php
        sử dụng date("format")
        format định dạng thời gian
        H giờ 0 - 23
        h giờ 1 - 12
        i phút
        s giây
        d ngày
        m tháng
        Y năm
    </pre>

    <?php

    // cấu hình múi giờ
    date_default_timezone_set("Asia/Ho_Chi_Minh");

    // timezone : https://www.php.net/manual/en/timezones.php
    // https://www.php.net/manual/en/timezones.asia.php

    echo date("H:i:s d/m/Y");
    echo "<br>" . date("H:i:s d-m-Y");
    echo "<br>" . date("H:i:s d.m.Y");
    echo "<br>" . date("H:i:s");
    echo "<br>" . date("d.m.Y");
    ?>

</body>
</html>
