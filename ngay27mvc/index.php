<?php
/*
nạp tất cả các file cần thiết cho ứng dụng mvc */
include_once "class/db.php";
// nạp model
include_once "mvc/models/dienthoaiModel.php";
include_once "mvc/models/hangDienthoaiModel.php";
// nạp controller
include_once "mvc/controllers/dienthoaiController.php";
// nạp class router vào
include "mvc/route.php";

$route = new Router();
$route->run();

