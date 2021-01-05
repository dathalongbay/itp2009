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
        json với php
        chuyển 1 mảng hay 1 object trong php thành chuỗi json
    </pre>

    <?php
    $student = ["anh tuấn", "vân chi", "bảo anh"];

    $json1 = json_encode($student);
    echo $json1;
    ?>

</body>
</html>