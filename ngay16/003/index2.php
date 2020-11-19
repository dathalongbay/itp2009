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
        - truyền tham chiếu hiểu đơn giản là ngoài việc truyền giá trị
        của biến cho đối số của function
        thì biến truyền cho đối số sẽ được tham chiếu đến cùng 1 ô nhớ
        nên khi đối số thay đổi thì biến được truyền cho đối số cũng thay đối theo

        - truyền tham chiếu thì khi khai báo function
        phải đặt dấu & trước tên đối số .
    </pre>

    <?php
    $a = 5;

    function demo(&$arg) {
        $arg = $arg*$arg;
        return $arg;
    }

    $ketqua = demo($a);

    echo "<br> giá trị của biến a : " . $a;
    echo "<br> giá trị của biến ketqua : " . $ketqua;
    ?>

</body>
</html>