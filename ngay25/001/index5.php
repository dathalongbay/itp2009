<?php
class DongVat {

    public $mau_sac;

    public $can_nang;

    public $ten_goi;

    protected $demo1 = "thuộc tính demo 1";

    public function __construct($mau_sac, $can_nang, $ten_goi)
    {
        $this->can_nang = $can_nang;
        $this->mau_sac = $mau_sac;
        $this->ten_goi = $ten_goi;
    }


    public function an() {
        echo "<br> phương thức ăn";
    }

    public function sinhsan() {
        echo "<br> phương thức sinh sản";
    }

    public function getDemo1() {
        // truy cập protected từ bên trong class
        return $this->demo1;
    }

}

class Tho extends DongVat {


    public function thongtin() {
        echo "<br> thông tin về loài thỏ";
    }


    public function getParentDemo() {
        // truy cập protected từ bên trong class extends từ class đo
        // truy cập protected từ bên trong class con
        return $this->demo1;
    }

}

class CaSau extends DongVat {

    public function hoatDongDuoiNuoc() {
        echo "<br> cá sâu hoạt động dưới nước";
    }

}

$dongvatA = new DongVat("", "", "đọng vật A");

$thoNau = new Tho("nâu", "1", "thỏ nâu");
echo "<br>" . $thoNau->getParentDemo();

// gọi đén protected từ bên ngoài class
echo "<br>" . $dongvatA->demo1;
