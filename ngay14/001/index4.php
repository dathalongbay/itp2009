<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>in ra tổng các số chẵn từ 1 đến 50 bằng php for</h1>

    <?php 
    $tong = 0;
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            $tong += $i;
        }
    }

    echo "tổng : " . $tong;
    ?>

    <script>

    var tong = 0;

    for (var i = 1; i <= 50; i++) {

        if (i % 2 == 0) {
            tong += i;
            //tong = tong + i;
        }
    }

    console.log(tong);

    </script>


</body>
</html>