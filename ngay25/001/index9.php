<?php

// các thuộc tính và phương thức tĩnh


// khi nào chúng ta cần sử dụng thuộc tính và phương thức tĩnh

// trả lời : khi chúng ta muốn sử dụng nhanh chóng mà không phải khởi tạo
// object đối tượng từ class

class Xe {

    public static $ten = "ford";

    public static $mau = "đỏ";

    public $gia_tien = "500 tr";

    public function setThongTin($giaTien) {
        $this->gia_tien = $giaTien;
    }

    
    public static function demo1() {
        echo "<br> 1 method tĩnh khác";
    }

    public function demo2() {
        echo "<br> 1 method khác";
    }

    public static function inRaThongTin() {
        // chú ý : trong phương thức tĩnh static thì ko được phép
        // sử dụng từ khóa $this
        // sử dụng từ khóa self:: để thay thế

        echo "<br>" . self::$ten;
        echo "<br>" . self::$mau;
        echo "<br>" . self::demo1();

        // gọi đến thuộc tính hay phương thức bình thường bên trong phương thức tĩnh
        // giải pháp khởi tạo object
        $xe1 = new self();
        echo "<br>" . $xe1->gia_tien;
        echo "<br>" . $xe1->demo2();
    }
}

// bên ngoài class cú pháp ClassName::TenThuocTinh ( có $ )
// ClassName::tenPhuongthuc();
echo "<br>" . Xe::$ten;
Xe::inRaThongTin();
