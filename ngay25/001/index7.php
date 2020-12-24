<?php
// lớp trừu tượng là class có ít nhất 1 phương thức trừu tượng
abstract class Car {

    public $name;

    public function __construct($name) {

        $this->name = $name;

    }


    // phương thức trừu tường có từ khóa abstract ở đầu tiền
    // và phương thức trừu tượng không có nội dung thực thi bên trong phương thức
    // nó được khai báo để chờ các class con kế thứa sẽ đi viết nội dung
    // cho các phương thức trừu tượng này
    abstract public function intro();

}

class Vinfast extends Car {

    public function intro() {
        echo "<br> vinfast là 1 hãng oto của VN";
    }

}

$fadil = new Vinfast("fadil");
$fadil->intro();
