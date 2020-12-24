<?php

// phương thức hủy trong class
// phương thức hủy được gọi cách tự động
// khác với phương thức còn lại là chúng ta chủ động gọi
// phương thức hủy được gọi trong 2 trường hợp
// TH1 : chúng ta hủy đi đối tượng được khởi tạo từ class này
// unset($object)
// TH2 : khi script php kết thúc hàm hủy của class được khởi tạo
// cũng tự động được gọi
class Fruit {

    public $name;

    public $color;



    function __construct($name, $color) {

        $this->name = $name;

        $this->color = $color;

    }

    // hàm hủy = phương thức hủy
    function __destruct() {

        echo "<br> hàm hủy được gọi";

    }

}

$apple = new Fruit("Apple", "red");



echo "<br> dòng số 40 mà script php kết thúc";
