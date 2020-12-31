<?php

class Router {

    public function run() {
        /*phan tích url
        dựa vào tham số trên url hay post data để điều hướng
        đến chính xác controller mà chúng ta mong muốn*/


        echo "<br> " . __METHOD__;
        $controllerDefault = "Dienthoai";
        $controllerRequest = isset($_REQUEST["controller"]) ? $_REQUEST["controller"] : $controllerDefault;
        $controllerRequest = ucfirst($controllerRequest);
        $controllerRequest = $controllerRequest."Controller";
        $controller = new $controllerRequest();

        $actionDefault = "indexAction";
        $actionRequest = isset($_REQUEST["action"]) ? $_REQUEST["action"] : $actionDefault;
        $controller->$actionRequest();
    }

}