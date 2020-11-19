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

    <form name="bmi" action="" method="post">
        <p>
            <label>Chiều cao ( đơn vị mét )</label>
            <input name="chieucao" type="text" value="">
        </p>
        <p>
            <label>Cân nặng ( đơn vị kilogam )</label>
            <input name="cannang" type="text" value="">
        </p>
        <p>
            <input type="submit" name="submit" value="Tính chỉ số BMI">
        </p>
    </form>

    <?php
    // $_POST là 1 mảng
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // hàm isset() để kiếm tra 1 biến có tồn tại
    if (isset($_POST["chieucao"]) && isset($_POST["cannang"])) {
        $chieucao = (float) $_POST["chieucao"];
        $cannang = (float) $_POST["cannang"];
        echo "<br> chiều cao post đi là : " . $chieucao;
        echo "<br> cân nặng post đi là : " . $cannang;

        // em hãy tính chỉ số bmi và in ra kết quả
    }




    ?>

    <div>
        <strong>BMI: ?</strong>
        <strong>Phân loại theo BMI: ? ( dưới chuẩn/ bình thường/ béo cấp 1/ béo cấp 2 ... )</strong>
    </div>



</body>
</html>