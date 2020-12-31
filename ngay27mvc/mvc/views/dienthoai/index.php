<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php

print_r($mobiles[0]);
echo "<br>" . __FILE__;
echo "<br>" . $test;
echo "<br>" . $a;

?>

<div class="container">
    <h1>Danh sách điện thoại</h1>

    <div class="row">
        <div class="col-md-12">
            <h2>Basic Table</h2>
            <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
            <table class="table">
                <thead>
                <tr>
                    <th>Tên Đt</th>
                    <th>Hãng Đt</th>
                    <th>Màu</th>
                    <th>Giá tiền</th>
                    <th>Mô tả</th>
                    <th>NGày đăng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($mobiles as $mobile) { ?>
                    <tr>
                        <td><?php echo $mobile["ten_dienthoai"] ?></td>
                        <td><?php echo $mobile["ten_hang"] ?></td>
                        <td><?php echo $mobile["mau_sac"] ?></td>
                        <td><?php echo $mobile["gia_dienthoai"] ?></td>
                        <td><?php echo $mobile["mo_ta"] ?></td>
                        <td><?php echo $mobile["ngay_dang"] ?></td>
                        <td>
                            <?php
                            if ($mobile["trang_thai"] == 1) {
                                echo "Hiện";
                            }
                            if ($mobile["trang_thai"] == 0) {
                                echo "Ẩn";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo $mobile["ma_dienthoai"] ?>">
                                Xóa
                            </a>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>



</div>

</body>
</html>