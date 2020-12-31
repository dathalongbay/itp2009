<?php

class DienthoaiController {


    // phương thức liệt kê các bản ghi
    public function indexAction() {
        echo "<br> " . __METHOD__;
        $model = new DienthoaiModel();
        $mobiles = $model->listData();
        $test = "ABC";
        $a = "12345";

        // gọi view
        // include_once "mvc/views/dienthoai/index.php";
        // include_once "../views/dienthoai/index.php";

        include_once "mvc/views/dienthoai/index.php";

    }



}
