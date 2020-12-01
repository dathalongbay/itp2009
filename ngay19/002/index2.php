<?php


// đường dẫn tương đối
include_once "functions.php";
include_once "lib/lib.php";
// nạp file functions.php vào trong luồng chạy index1.php

$d = tinhTong(3,5);
echo "<br>" . $d;
$e = tinhHieu(7,1);
echo "<br> Hiệu : $e";