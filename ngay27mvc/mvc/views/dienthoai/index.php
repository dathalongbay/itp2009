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


echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if (isset($_SESSION["action"]) && isset($_SESSION["info"])) {
    if ($_SESSION["info"] == 1) {
        echo "<div style='background-color: green; color: white'>
 Xóa thành công
</div>";
    } else {
        echo "<div style='background-color: red; color: white'>
 Xóa thất bại</div>";
    }

    unset($_SESSION["action"]);
    unset($_SESSION["info"]);

}

?>

<div class="container">
    <h1>Danh sách điện thoại</h1>

    <div class="row">
        <div class="col-md-12">
            <h2>Basic Table</h2>
            <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
            <form name="search" method="get" action="">
                <input type="text" name="keyword" value="<?php echo $keyword ?>">
                <button>Tìm kiếm</button>
            </form>

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
                            <span onclick="confirmDelete('index.php?controller=dienthoai&action=deleteAction&id=<?php echo $mobile["ma_dienthoai"] ?>')">
                                Xóa
                            </span>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>



</div>

<script>

    function confirmDelete(link) {
        var r = confirm("Xác nhận xóa ?");
        if (r == true) {
            window.location.href = link;
        } else {

        }
    }

</script>
</body>
</html>