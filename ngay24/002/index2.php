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
        preg_replace() được sử dụng để thay thế kết quả phù hợp
        với biểu thức regex trong chuỗi mẹ
    </pre>

    <?php

    $subject = "hà nội là thủ đô của việt nam, hà nội có 7 triệu dân";
    $replacement = "thăng long";
    $regex = "/hà nội/i";
    $result = preg_replace($regex, $replacement, $subject);
    echo "<br>" . $result;
    ?>

</body>
</html>