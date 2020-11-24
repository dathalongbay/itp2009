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
    http://localhost/itp2009/ngay17/003/processget1.php?hoten=tu%E1%BA%A5n&gioitinh=2&submit=G%E1%BB%ADi+th%C3%B4ng+tin

    chuỗi trên url xuất hiện ? gọi query string
    query string = ?hoten=tu%E1%BA%A5n&gioitinh=2&submit=G%E1%BB%ADi+th%C3%B4ng+tin
    domain tên miền và file url : http://localhost/itp2009/ngay17/003/processget1.php
    trên url có nhiều biến
    ?bien1=giatri1&bien2=giatri2&bien3=giatri3...

    trường hợp 1 :
    $_GET được sử dụng để lấy dữ liệu từ form có method=get
    trường hợp 2 :
    $_GET được sử dụng để lấy dữ liệu từ url có query string

</pre>

<form name="loichao" method="get" action="http://localhost/itp2009/ngay17/003/processget1.php">
    <p>
        <label>Họ tên</label>
        <input type="text" name="hoten" value="">
    </p>

    <p>
        <label>Giới tính</label>
        <input type="radio" name="gioitinh" value="1"> Nữ
        <input type="radio" name="gioitinh" value="2" checked> Nam
    </p>

    <p>
        <input type="submit" name="submit" value="Gửi thông tin">
    </p>

</form>

</body>
</html>