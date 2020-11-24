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

    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // đặt mặc định cho các biến
    $days = 1;
    $type_room = 1;
    $child = 0;
    $vat = 0;

    $room_total = 0;
    $child_total = 0;
    $tax_total = 0;
    $total = 0;

    if (isset($_POST["days"]) && isset($_POST["type_room"])) {
        $days = $_POST["days"];
        $type_room = $_POST["type_room"];

        // cú pháp viết rút gọn if else
        /*if (isset($_POST["child"]) && ($_POST["child"] == 1)) {
            $child = 1;
        } else {
            $child = 0;
        }*/
        // $bien = (điều kiện) ? nếu điều kiện true : nếu điều kiện false ;
        $child = isset($_POST["child"]) && ($_POST["child"] == 1) ? 1 : 0;
        $vat = isset($_POST["vat"]) && ($_POST["vat"] == 1) ? 1 : 0;

        $price = 0;
        if ($type_room == 1) {
            $price = 300000;
        } elseif($type_room == 2) {
            $price = 500000;
        } elseif($type_room == 3) {
            $price = 1000000;
        }

        // tiền phòng
        $room_total = $days*$price;

        // phụ phí trẻ em
        if ($child == 1) {
            $child_total = $days*100000;
        }

        $room_total_child =  $room_total + $child_total;

        if ($vat == 1) {
            $tax_total = 0.1*$room_total_child;
        }

        $total = $room_total_child + $tax_total;
    }
    ?>

    <h1>Đặt phòng du lịch</h1>

    <pre>
        Em hãy viết chương trình đặt phòng và tính tiền thanh toán
        cho khách sạn .
        giá tiền cho từng loại phòng như sau :
        phòng đơn 300.000/ngày
        phòng đôi 500.000/ngày
        phòng VIP 1000.000/ngày
        - nếu đi kèm trẻ em sẽ + thêm 100.000 cho mỗi ngày
        - nếu lấy hóa đơn GTGT sẽ + thêm 10% tổng số tiền cần thanh toán

    </pre>

    <form name="tour" action="" method="post">
        <p>
            <label for="">Tổng số ngày</label>
            <input type="number" name="days" value="<?php echo $days; ?>">
        </p>
        <p>
            <label for="">Loại phòng</label>
            <select name="type_room">
                <?php
                if (isset($_POST["type_room"]) && ($_POST["type_room"] == 1)) {
                    $selected1 = "selected";
                } else {
                    $selected1 = "";
                }
                ?>
                <option value="1" <?php echo $selected1; ?>>Phòng đơn</option>
                <?php
                if (isset($_POST["type_room"]) && ($_POST["type_room"] == 2)) {
                    $selected2 = "selected";
                } else {
                    $selected2 = "";
                }
                ?>
                <option value="2" <?php echo $selected2; ?>>Phòng đôi</option>
                <?php
                if (isset($_POST["type_room"]) && ($_POST["type_room"] == 3)) {
                    $selected3 = "selected";
                } else {
                    $selected3 = "";
                }
                ?>
                <option value="3" <?php echo $selected3; ?>>Phòng VIP</option>
            </select>
        </p>

        <p>
            <label>Có trẻ em đi kèm</label>
            <?php
            if (isset($_POST["child"]) && ($_POST["child"] == 1)) {
                $checked1 = "checked";
            } else {
                $checked1 = "";
            }
            ?>
            <input type="checkbox" <?php echo $checked1 ?> name="child" value="1">
        </p>

        <p>
            <label>Xuất hóa đơn GTGT 10%</label>
            <?php
            if (isset($_POST["vat"]) && ($_POST["vat"] == 1)) {
                $checked2 = "checked";
            } else {
                $checked2 = "";
            }
            ?>
            <input type="checkbox" <?php echo $checked2 ?> name="vat" value="1">
        </p>

        <p>
            <input type="submit" name="booking" value="Đặt phòng và thanh toán" />
        </p>

    </form>

    <div>
        <p>tiền phòng: <?php echo $room_total ?></p>
        <p>phụ phí cho trẻ em ( nếu có ): <?php echo $child_total ?></p>
        <p>thuế GTGT: <?php echo $tax_total ?></p>
        <p>tổng số tiền phải trả: <?php echo $total ?></p>
    </div>

</body>
</html>
