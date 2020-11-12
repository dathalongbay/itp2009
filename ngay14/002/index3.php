<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        sử dụng vòng lặp for in ra thẻ 
        select form để chọn ngày , tháng , năm sinh
        ngày từ 1 đến 31
        tháng từ 1 đến 12
        năm sinh từ 1900 đến 2020
    </pre>

    <form action="">
        <label>sinh nhật</label>

        <select name="ngay">
            <option value="">Chọn ngày sinh</option>
            <?php 
            $htmlOptionNgay = "";
            for ($ngay = 1; $ngay <= 31; $ngay++) {
        
                $htmlOptionNgay .= "<option value='".$ngay."'> Ngày " . $ngay . "</option>";
            }

            echo $htmlOptionNgay;
            ?>
        </select>

        <select name="thang">
            <option value="">Chọn tháng sinh</option>
        </select>

        <select name="nam">
            <option value="">Chọn năm sinh</option>
        </select>
    </form>



</body>
</html>