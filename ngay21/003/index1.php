<?php
include_once "Image.php";


// khởi tạo object từ class
// phương thức constructor không cần chủ động gọi đến nó
// như nhưng phương thức khác
// constructor được từ động gọi
// khi khơi tạo object bằng từ khóa new
// thì constructor được tự động chạy
// new className(truyền các tham số cho constructor)
$imgTiki = new ImageHtml("https://salt.tikicdn.com/cache/w584/ts/banner/b5/47/fe/63bebe3daabf7a6412740c96cdb35abe.png", "ảnh banner tiki", 200, 300);

echo "<br> sau khi khởi tạo class";

echo "<br>";
// gọi phương thức
echo $imgTiki->displayImage();
