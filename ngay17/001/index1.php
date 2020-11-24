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

    <h1>Đặt phòng du lịch</h1>

    <pre>
        Em hãy viết chương trình đặt phòng và tính tiền thanh toán
        cho khách sạn .
        giá tiền cho từng loại phòng như sau :
        phòng đơn 300.000/ngày
        phòng đôi 500.000/ngày
        phòng đôi 1000.000/ngày
        - nếu đi kèm trẻ em sẽ + thêm 100.000 cho mỗi ngày
        - nếu lấy hóa đơn GTGT sẽ + thêm 10% tổng số tiền cần thanh toán

    </pre>

    <form name="tour" action="" method="post">
        <p>
            <label for="">Tổng số ngày</label>
            <input type="number" name="days" value="1">
        </p>
        <p>
            <label for="">Loại phòng</label>
            <select name="type_room">
                <option value="1">Phòng đơn</option>
                <option value="2">Phòng đôi</option>
                <option value="3">Phòng VIP</option>
            </select>
        </p>

        <p>
            <label>Có trẻ em đi kèm</label>
            <input type="checkbox" name="child" value="1">
        </p>

        <p>
            <label>Xuất hóa đơn GTGT 10%</label>
            <input type="checkbox" name="vat" value="1">
        </p>

        <p>
            <input type="submit" name="booking" value="Đặt phòng và thanh toán" />
        </p>

    </form>

    <div>
        <p>tiền phòng: ?</p>
        <p>phụ phí cho trẻ em ( nếu có ): ?</p>
        <p>thuế GTGT: ?</p>
        <p>tổng số tiền phải trả: ?</p>
    </div>

</body>
</html>
