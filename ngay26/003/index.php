<?php
include_once "database1.php";
include_once "database2.php";


/**
 * để giải quyết vấn đề trùng tên hàm hay tên class
 * thì người ta sử dụng khái niệm namespace
 *
 * phân biệt tách namespace\className
 * ví dụ : Database1\Database();
 *
 */

$db = new Database1\Database();
$db->connect();

$db2 = new Database2\Database();
$db2->connect();

