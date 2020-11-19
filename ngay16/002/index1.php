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
        hàm trong php
        hàm là tập hợp các câu lệnh thực hiện 1 chức năng nào đó
        khi cần sử dụng người ta chỉ cần gọi là tên hàm
        function tên_hàm(đối_số_1, đối_số_2) {
            // nội dung của hàm

            // sử dụng return để trả về 1 biến
        }
    </pre>

    <?php
    // khai báo hàm
    function tinhSHinhChuNhat($a = 1,$b = 1) {
        $s = $a*$b;
        return $s;
    }

    // gọi hàm
    $dientich = tinhSHinhChuNhat(5,4);
    echo "S là : " . $dientich;
    ?>

</body>
</html>