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
$cities1 = array("hà nội", "hồ chí minh", "đà nẵng", "hải phòng");
// in ra các tỉnh tp bên trong select box
if (is_array($cities1) && !empty($cities1)) {
    ?>
    <select name="thanhpho">
    <?php
    for($i = 0; $i < count($cities1); $i++) {
        ?>
        <option value="<?php echo $i ?>"><?php echo $cities1[$i] ?></option>
        <?php
    }
    ?>
    </select>
    <?php
}

?>
</body>
</html>