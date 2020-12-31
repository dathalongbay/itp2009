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


    public function deleteAction() {

        $id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

        if ($id > 0) {
            $model = new DienthoaiModel();
            $result = $model->delete($id);
        }

        $_SESSION["action"] = "Delete";
        $_SESSION["info"] = $result;

        header("Location: index.php?controller=dienthoai&action=indexAction");
        exit();
    }



}
