<?php

include_once "database1.php";
include_once "database2.php";

$db = new Database();
$db->connect();

/*Fatal error: Cannot declare class Database, because the name is already in use in C:\xampp\htdocs\itp2009\ngay26\002\database2.php on line 3*/