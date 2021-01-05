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
        từ json thành 1 dạng ban đầu của php

    </pre>

    <?php
        $json1 = '["anh tu\u1ea5n","v\u00e2n chi","b\u1ea3o anh"]';
        $ori1 = json_decode($json1);
        echo "<pre>";
        print_r($ori1);
        echo "</pre>";
    ?>

</body>
</html>