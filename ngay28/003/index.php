<?php
include_once "db.php";

$db = new Database();
$connection = $db->connection;

$sql = "SELECT * FROM devvn_tinhthanhpho";

$stmt = $connection->prepare($sql);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$provinces = $stmt->fetchAll();
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

    <pre>
        ajax là gì ?
        ajax là 1 kỹ thuật load dữ liệu hay load 1 phần trang web
        mà không cần phải refresh F5 lại trang
    </pre>

    <select name="tinh" id="tinh">
        <option value="0">Chọn tỉnh tp</option>
        <?php foreach($provinces as $province) : ?>
            <option value="<?php echo $province["matp"] ?>"><?php echo $province["name"] ?></option>
        <?php endforeach; ?>
    </select>

    <select name="quan" id="quan">
        <option value="0">Danh sách quận</option>
    </select>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>

    </script>




</body>
</html>