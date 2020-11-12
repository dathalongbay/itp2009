<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<br> chào php dòng 1";
    echo '<br> chào php dòng 2';
    echo "<br> thủ đô việt nam là thành phố \"hà nội\"";
    echo '<br> thủ đô việt nam là thành phố "hà nội"';

    echo '<br> tên cũ của hà nội là \'thăng long\'';

    // tên biến trong nháy kép hay nháy đơn
    $a = 1;
    $b = 2;
    $c = $a + $b;
    // cách 1
    echo "<br> tổng : " . $c;
    // cách 2
    echo "<br> tổng : $c";
    // cách 3
    echo '<br> tổng : $c';


    ?>
    
</body>
</html>