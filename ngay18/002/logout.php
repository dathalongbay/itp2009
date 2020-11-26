<?php session_start(); ?>
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

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// hủy tất cả các session đang tồn tại
session_unset();
session_destroy();

header("Location: login.php");
exit();
?>

</body>
</html>