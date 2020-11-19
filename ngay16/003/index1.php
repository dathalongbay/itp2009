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
        truyền tham chiếu và truyền tham trị trong function
        - truyền tham trị hiểu đơn giản là truyền giá trị của biến
        cho đối số của function ( sự thay đối giá trị của đối số ko ảnh hưởng đến
        giá trị của biến được truyền cho đối số )
    </pre>

    <?php
    $a = 5;

    function demo($arg) {
        $arg = $arg*$arg;
        return $arg;
    }

    $ketqua = demo($a);

    echo "<br> giá trị của biến a : " . $a;
    echo "<br> giá trị của biến ketqua : " . $ketqua;
    ?>

</body>
</html>