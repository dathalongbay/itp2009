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

<form name="loichao" method="post" action="http://localhost/itp2009/ngay17/002/process1.php">
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
