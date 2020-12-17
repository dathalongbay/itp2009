<?php
session_start();

// biến mảng chứa lỗi
$errors = [];
// gán mặc định
$studentName = $studentPhone = $studentEmail = $studentBirth = $studentGender = $studentNote = $studentCity = $studentSchoolMove = $studentGithub = $studentPoint = "";

// có dữ liệu submit đi hay không
if (isset($_POST) & !empty($_POST)) {

    // bắt đầu validate
    if(!isset($_POST["name"]) || empty($_POST["name"])) {
        $errors["name"] = "Bắt buộc phải nhập tên sinh viên";
    } else {
        // có nhập dữ liệu
        // cách 1
        /*$studentName = trim($_POST["name"]);
        $studentNameArr = explode(" ", $studentName);
        $studentNameLength = count($studentNameArr);
        var_dump($studentNameLength);*/

        // cách 2
        $studentName = trim($_POST["name"]);
        $patternStudentName = "/^([A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+\b ){1,4}[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/";


        $studentNameValidate = preg_match_all($patternStudentName, $studentName, $matches);
        // $studentNameValidate bằng 0 , null , false

        if (!$studentNameValidate) {
            $errors["name"] = "tên sinh viên không đúng";
        }

    }

    // số điện thoại
    if(!isset($_POST["phone"]) || empty($_POST["phone"])) {
        $errors["phone"] = "Bắt buộc phải nhập số điện thoại sinh viên";
    } else {
        $studentPhone = trim($_POST["phone"]);
        $patternStudentPhone = "/^[0-9]{10}$/i";
        $studentPhoneValidate = preg_match_all($patternStudentPhone, $studentPhone, $matches);
        if (!$studentPhoneValidate) {
            $errors["phone"] = "số điện thoại sinh viên không đúng";
        }
    }

    // email
    if(!isset($_POST["email"]) || empty($_POST["email"])) {
        $errors["email"] = "Bắt buộc phải nhập email sinh viên";
    } else {
        $studentEmail = trim($_POST["email"]);
        $patternStudentEmail = "/^([a-zA-Z0-9]{3,})@([a-zA-Z0-9]{3,})/i";
        $studentEmailValidate = preg_match_all($patternStudentEmail, $studentEmail, $matches);
        if (!$studentEmailValidate) {
            $errors["email"] = "email sinh viên không đúng";
        }
    }


    // ngay tháng nam sinh
    if(!isset($_POST["birthday"]) || empty($_POST["birthday"])) {
        $errors["birthday"] = "Bắt buộc phải nhập ngay tháng năm sinh của sinh viên";
    } else {
        $studentBirth = trim($_POST["birthday"]);
        $patternBirthEmail = "/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/i";
        $studentBirthValidate = preg_match_all($patternBirthEmail, $studentBirth, $matches);
        if (!$studentBirthValidate) {
            $errors["birthday"] = "ngày tháng năm sinh của sinh viên không đúng";
        }
    }

    // giới tính
    if(!isset($_POST["gender"]) || empty($_POST["gender"])) {
        $errors["gender"] = "Bắt buộc phải nhập giới tính của sinh viên";
    } else {
        $studentGender = (int) $_POST["gender"];
        if (!in_array($studentGender, [1,2])) {
            $errors["gender"] = "giới tính của sinh viên không đúng";
        }
    }

    // ghi chú
    if(!isset($_POST["note"]) || empty($_POST["note"])) {
        $errors["note"] = "Bắt buộc phải nhập ghi chú của sinh viên";
    } else {
        $studentNote = trim($_POST["note"]);
        $studentNoteArr = explode(" ", $studentNote);
        $studentNoteLength = count($studentNoteArr);

        if ($studentNoteLength > 200) {
            $errors["note"] = "ghi chú nhập tối đa được 200 từ";
        }
    }

    // tính tp
    if(!isset($_POST["city"]) || empty($_POST["city"])) {
        $errors["note"] = "Bắt buộc phải nhập tỉnh tp của sinh viên";
    } else {
        $studentCity = $_POST["city"];
        if (!in_array($studentCity, ["hn", "hcm", "dn"])) {
            $errors["city"] = "tỉnh tp không đúng";
        }
    }

    // chuyển trường
    $studentSchoolMove = isset($_POST["school_move"]) ? $_POST["school_move"] : "";

    if (isset($_POST["point"])) {
        $studentPoint = $_POST["point"];
    }

    if (isset($_POST["website"])) {
        $studentGithub  = $_POST["website"];
    }

    // thành công
    if (empty($errors)) {
        // trước khi chuyển hướng lưu data chuẩn vào trong session
        $_SESSION["profile"] = $_POST;


        header("Location: profile.php");
        exit();
    }
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
            <input type="text" name="name" value="<?php echo $studentName ?>" autocomplete="off">

            <?php
            if (isset($errors["name"]) && $errors["name"]) {
                echo "<p style='color:red'>".$errors["name"]."</p>";
            }
            ?>
        </div>

        <div>
            <label>Số điện thoại sinh viên</label>
            <p style="font-size: 10px">(chỉ được nhập 10 số)</p>
            <input type="text" name="phone" value="<?php echo $studentPhone ?>" autocomplete="off">

            <?php
            if (isset($errors["phone"]) && $errors["phone"]) {
                echo "<p style='color:red'>".$errors["phone"]."</p>";
            }
            ?>
        </div>

        <div>
            <label>Email sinh viên</label>
            <input type="email" name="email" value="<?php echo $studentEmail ?>" autocomplete="off">

            <?php
            if (isset($errors["email"]) && $errors["email"]) {
                echo "<p style='color:red'>".$errors["email"]."</p>";
            }
            ?>
        </div>

        <div>
            <label>Ngày tháng năm sinh (YYYY-MM-DD) (1997-10-05)</label>
            <input type="text" name="birthday" value="<?php echo $studentBirth ?>" autocomplete="off">

            <?php
            if (isset($errors["birthday"]) && $errors["birthday"]) {
                echo "<p style='color:red'>".$errors["birthday"]."</p>";
            }
            ?>
        </div>


        <div>
            <label>Giới tính</label>

            <input type="radio" name="gender" value="1" <?php echo ($studentGender === 1) ? "checked" : "" ?>> Nam
            <input type="radio" name="gender" value="2" <?php echo ($studentGender === 2) ? "checked" : "" ?>> Nữ

            <?php
            if (isset($errors["gender"]) && $errors["gender"]) {
                echo "<p style='color:red'>".$errors["gender"]."</p>";
            }
            ?>
        </div>

        <div>
            <label>Link github ( bắt đầu bằng https://github.com/username</label>
            <input type="text" name="website" value="<?php echo $studentGithub ?>" autocomplete="off">
        </div>

        <div>
            <label>Điểm sinh viên (0 - 10)</label>
            <input type="number" name="point" value="<?php echo $studentPoint ?>" autocomplete="off">
        </div>

        <div>
            <p>Ghi chú ( chỉ được nhập tối đa 200 từ )</p>
            <textarea name="note" cols="50" rows="10"><?php echo $studentNote ?></textarea>

            <?php
            if (isset($errors["note"]) && $errors["note"]) {
                echo "<p style='color:red'>".$errors["note"]."</p>";
            }
            ?>
        </div>

        <div>
            <label>Tỉnh tp</label>
            <select name="city">
                <option value="">Chọn</option>
                <option value="hn" <?php echo ($studentCity == "hn") ? "selected" : ""?>>Hà nội</option>
                <option value="hcm" <?php echo ($studentCity == "hcm") ? "selected" : ""?>>Hồ chí minh</option>
                <option value="dn" <?php echo ($studentCity == "dn") ? "selected" : ""?>>Đà nẵng</option>
            </select>
        </div>

        <div>
            <label>Chuyển trường</label>
            <input type="checkbox" name="school_move" value="1" <?php echo ($studentSchoolMove == "1") ? "checked" : ""?> >
        </div>

        <div>
            <input type="submit" name="sumbit" value="In thông tin" autocomplete="off">
        </div>
    </form>

</body>
</html>