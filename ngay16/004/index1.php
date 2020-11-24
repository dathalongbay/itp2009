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
        $_POST trong PHP được sử dụng để lấy giá trị truyền đi
        từ 1 form có method="post"

        công thức tính BMI :
        https://ifitness.vn/blogs/kien-thuc-the-hinh/chi-so-bmi

    </pre>

    <?php
    // $_POST là 1 mảng
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // gán $bmi 1 giá trị mặc định
    $bmi = "";
    $phanloai = "";

    $chieucao = $cannang = "";

    // hàm isset() để kiếm tra 1 biến có tồn tại
    if (isset($_POST["chieucao"]) && isset($_POST["cannang"])) {
        $chieucao = (float) $_POST["chieucao"];
        $cannang = (float) $_POST["cannang"];
        echo "<br> chiều cao post đi là : " . $chieucao;
        echo "<br> cân nặng post đi là : " . $cannang;

        $bmi = $cannang/($chieucao*$chieucao);

        echo "<br> BMI : " . $bmi;

        if ($bmi < 18.5) {
            $phanloai = "dưới chuẩn";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $phanloai = "bình thường ";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            $phanloai = "thừa cân ";
        } elseif ($bmi >= 30 && $bmi <= 34.9) {
            $phanloai = "béo phì độ 1 ";
        } elseif ($bmi >= 35 && $bmi <= 39.9) {
            $phanloai = "béo phì độ 2 ";
        } else {
            $phanloai = "béo phì độ 3";
        }

        // em hãy tính chỉ số bmi và in ra kết quả
    }




    ?>

    <form name="bmi" action="" method="post">
        <p>
            <label>Chiều cao ( đơn vị mét )</label>
            <input name="chieucao" type="text" value="<?php echo $chieucao ?>">
        </p>
        <p>
            <label>Cân nặng ( đơn vị kilogam )</label>
            <input name="cannang" type="text" value="<?php echo $cannang ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Tính chỉ số BMI">
        </p>
    </form>



    <div>
        <strong>BMI: <?php echo $bmi; ?></strong>
        <strong>Phân loại theo BMI: <?php echo $phanloai; ?> ( dưới chuẩn/ bình thường/ béo cấp 1/ béo cấp 2 ... )</strong>
    </div>



</body>
</html>
