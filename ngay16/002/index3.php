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
        khái niệm phạm vi của biến
        - biến cục bộ
        - biến toàn cục

    </pre>

    <?php
    // khai báo hàm
    function tinhSHinhChuNhat($a = 1,$b = 1) {
        /*
         * $a và $b là 2 đối số trong hàm
         * nên $a và $b là 2 biến cục bộ
         * chỉ có ảnh hưởng bên trong hàm
         */
        $s = $a*$b;

        // $s biến khai báo bên trong hàm nên biến trong hàm thì là biến cục bộ
        return $s;
    } // kết thúc hàm

    // gọi hàm
    // những biến được khai báo bên ngoài hàm và bên ngoài class
    // thì được coi là các biến toàn cục
    $c = 5;
    $d = 4;
    $dientich = tinhSHinhChuNhat($c,$d);
    echo "S là : " . $dientich;
    ?>

</body>
</html>