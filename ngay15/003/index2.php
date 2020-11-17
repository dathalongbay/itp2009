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
// dạng 1 : mảng chỉ số
$cities1 = array("hà nội", "hồ chí minh", "đà nẵng", "hải phòng");
// key1 => value1, key2 => value2 ...
$cities1a = array(0 => "hà nội",1 => "hồ chí minh",2 => "đà nẵng",3 => "hải phòng");
echo "<pre>";
print_r($cities1);
echo "</pre>";
echo "<pre>";
print_r($cities1a);
echo "</pre>";

// dạng 2 : dạng kết hợp key là chuỗi hay số có ít nhất 1 key ko phải là số
// mảng kết hợp
$cities2 = ["hn" => "hà nội", "hcm" => "hồ chí minh", "dn" => "đà nẵng"];
echo "<pre>";
print_r($cities2);
echo "</pre>";
// in ra 1 phần tử dựa vào key
echo "<br>" . $cities2["hn"];
// gán lại giá trị
$cities2["hn"] = "thăng long";
// thêm phần tử
$cities2["hp"] = "hải phòng";
// hủy
unset($cities2["hcm"]);

echo "<pre>";
print_r($cities2);
echo "</pre>";

/**
 * foreach($mang as $key => $value) {
 *
 * }
 */
?>

<select name="citi">
    <?php foreach($cities2 as $key => $value) { ?>
    <option value="<?php echo $key ?>"><?php echo $value ?></option>
    <?php } ?>
</select>

<select name="citi">
    <?php foreach($cities2 as $keyCity => $city) { ?>
        <option value="<?php echo $keyCity ?>"><?php echo $city ?></option>
    <?php } ?>
</select>
<h1>Cú pháp rút gọn</h1>
<?php foreach($cities2 as $city) { ?>
    <div><?php echo $city ?></div>
<?php } ?>

</body>
</html>