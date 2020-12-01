<?php

// đường dẫn tuyệt đối = đường dẫn vật lý trên ổ đĩa
// __FILE__ trả về đường dẫn trên ỏ đĩa của file hiện tại
echo "<br>" . __FILE__;
// in ra folder mẹ chứa file hiện tại
echo "<br>" . dirname(__FILE__);

$pathFunction = dirname(__FILE__)."/functions.php";
$pathLib = dirname(__FILE__)."/lib/lib.php";
echo "<br>pathFunction : " . $pathFunction;
// nạp nội dung của file nội dung vào trong luông chạy của file hiện tại
include_once $pathFunction;
include_once $pathLib;
// nạp file functions.php vào trong luồng chạy index1.php

$d = tinhTong(3,5);
echo "<br>" . $d;

$e = tinhHieu(7,1);
echo "<br> Hiệu : $e";
