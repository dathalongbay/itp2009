<?php

class Router {

    public function run() {
        /*phan tích url
        dựa vào tham số trên url hay post data để điều hướng
        đến chính xác controller mà chúng ta mong muốn*/

        $controller = new DienthoaiController();

        $controller->indexAction();
    }

}