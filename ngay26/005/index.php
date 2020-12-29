<?php
include_once "Connect/database1.php";
include_once "Connect/database2.php";
include_once "Connect/db.php";


/**
 * dạng số 2 sử dụng namespace
 * dạng 1 : $db = new Connect\Database1\Database();
 * dạng 2 : dùng từ khóa use để nạp namespace
 * chú ý tránh việc nhầm lẫn với trait
 * phân biệt từ khóa use trong trai và từ khóa use namespace
 * use trait nằm trong class
 * use namespace nằm ngoài class
 * khi tên class bị trùng nhau khi nạp namespace
 * dùng từ khóa as tạo bí danh ( biệt danh )
 *
 *
 * khi sử dụng namespace
 * nhưng file không thuôc namespace cụ thể nào cả
 * người ta gọi đó là global namespace ( namespace toàn cầu )
 * index.php thuộc global namespace
 */

// nạp namespace
use Connect\Database1\Database as ConnectD1;
use Connect\Database2\Database as ConnectD2;
// không dùng bí danh
use Connect\Db\Abc;
// nạp namespace phải đầy đủ
// use Namespace_Lvl1\Namespace_Lvl2\Namespace_Lvl3\ClassName;
// không có đóng mở () sau tên class

$db = new ConnectD1();
$db->connect();

$db2 = new ConnectD2();
$db2->connect();

$abc = new Abc();

