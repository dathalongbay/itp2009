<?php
include_once "Connect/database1.php";
include_once "Connect/database2.php";


/**
 * để giải quyết vấn đề trùng tên hàm hay tên class
 * thì người ta sử dụng khái niệm namespace
 *
 * phân biệt tách namespace\className
 * ví dụ : Database1\Database();
 * liên quan namespace phải là xược ngược \
 */

$db = new Connect\Database1\Database();
$db->connect();

$db2 = new Connect\Database2\Database();
$db2->connect();

