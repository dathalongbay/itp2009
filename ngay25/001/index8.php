<?php

// mặc định extends chỉ cho phép đơn kế thừa
// 1 class chỉ được phép kế thừa từ class khác
// muốn 1 class kế thừa sử dụng được tài sản ( thuộc tính và phương thức ) của các
// class cha chúng ta sử dụng trait

class ClassicPhone {

    public $numberPhone;

    public function ngheCuocGoi() {
        echo "<br> ngheCuocGoi";
    }

    public function goiDien() {
        echo "<br> goiDien";
    }

}

// trait gần giống class
trait Radio {

    public function listenRadio() {
        echo "<br> nghe radio";
    }
}

trait Computer {

    public $ip_address = "127.0.0.1";

    public function office() {
        echo "<br> word excel powerpoint ...";
    }
}


trait Ipod {

    public function ngheNhac() {
        echo "<br> nghe nhạc";
    }
}



class SmartPhone extends ClassicPhone {


    // kế thừa từ class trait khác vào trong class hiện tại
    // sử dụng từ khóa use bên trong class
    use Computer, Radio, Ipod;

    public function playGame() {
        echo "<br> chơi game";
    }

}

$apple = new SmartPhone();

$apple->office();
$apple->listenRadio();
$apple->ngheNhac();
echo "<br>" . $apple->ip_address;
