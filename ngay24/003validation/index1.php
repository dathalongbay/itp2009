<?php
// biến mảng chứa lỗi
$errors = [];

// có dữ liệu submit đi hay không
if (isset($_POST) & !empty($_POST)) {

}


?>

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

    <h1>Profile</h1>

    <pre>
        khi form profile submit đi nếu hợp lệ
        chuyển hướng đến file profile.php in ra các dữ liệu lấy được
        header("Location: url");
        exit();
        url là link ví dụ profile.php
        - không hợp lệ
        in ra thông báo lỗi
        - in ra dữ liệu đã nhập trong form khi có lỗi
    </pre>



    <form name="profile" method="post" action="">
        <div>
            <label>Tên sinh viên</label>
            <p style="font-size: 10px">Nhập đủ họ tên ( tối thiểu phải có hai chữ )</p>
            <input type="text" name="name" value="" autocomplete="off">
        </div>

        <div>
            <label>Số điện thoại sinh viên</label>
            <p style="font-size: 10px">(chỉ được nhập 10 số)</p>
            <input type="text" name="phone" value="" autocomplete="off">
        </div>

        <div>
            <label>Email sinh viên</label>
            <input type="email" name="email" value="" autocomplete="off">
        </div>

        <div>
            <label>Ngày tháng năm sinh (YYYY-MM-DD) (1997-10-05)</label>
            <input type="text" name="birthday" value="" autocomplete="off">
        </div>


        <div>
            <label>Giới tính</label>
            <input type="radio" name="gender" value="1"> Nam
            <input type="radio" name="gender" value="0"> Nữ
        </div>

        <div>
            <label>Link github ( bắt đầu bằng https://github.com/username</label>
            <input type="text" name="website" value="" autocomplete="off">
        </div>

        <div>
            <label>Điểm sinh viên (0 - 10)</label>
            <input type="number" name="point" value="" autocomplete="off">
        </div>

        <div>
            <p>Ghi chú ( chỉ được nhập tối đa 200 chữ )</p>
            <textarea name="note" cols="50" rows="10"></textarea>
        </div>

        <div>
            <input type="submit" name="sumbit" value="In thông tin" autocomplete="off">
        </div>
    </form>

</body>
</html>