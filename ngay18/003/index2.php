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
        tạo ra 1 thời gian
        mktime(hour, minute, second, month, day, year)

        mktime() trả ra timestamp

        trong php có 2 loại thời gian
        - loại 1 là time người đọc được 07:20:15 20-01-2015
        ứng dụng là để in cho người dùng đọc
        - loại 2 là timestamp ( ko đọc được ) 1421734815
        đây là thời gian tính s từ thời điểm 1.1.1970
        ứng dụng của nó để tính toán
    </pre>

    <?php
    $date1 = mktime(7, 20, 15, 1, 20, 2015);

    // date("format", time)
    // tham số format là bắt buộc phải truyển vào
    // thời gian time ko bắt buộc truyền
    // nếu ko truyền vào thì lấy ra time hiện tại
    $t1 = date("H:i:s d-m-Y", $date1);
    echo $t1;

    echo "<br>" . $date1;


    // cách 1 chuyển từ loại timestamp sang người đọc
    // date(format, timestamp)

    // chuyển ngược lại người đọc sang định dạng timestamp
    // dùng hàm strtotime(time, now)
    echo "<br>" . strtotime($t1);

    // có 1 chú ý với strtotime hàm kén định dạng thời gian được truyển vào
    // Y-m-d h:i:sa hay H:i:s d-m-Y thì được
    // truyền H:i:s d/m/Y thì ko ra kết quả đúng 
    // nên phải kiểm tra lại kết quả 


    ?>
</body>
</html>
