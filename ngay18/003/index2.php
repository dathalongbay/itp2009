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
        tạo ra 1 thời gian
        mktime(hour, minute, second, month, day, year)
    </pre>

    <?php
    $date1 = mktime(7, 20, 15, 1, 20, 2015);

    // date("format", time)
    // tham số format là bắt buộc phải truyển vào
    // thời gian time ko bắt buộc truyền
    // nếu ko truyền vào thì lấy ra time hiện tại
    echo date("H:i:s d-m-Y", $date1);
    ?>
</body>
</html>
