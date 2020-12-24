<?php
class DongVat {

    public $mau_sac;

    public $can_nang;

    public $ten_goi;

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

}

class Tho extends DongVat {


    public function thongtin() {
        echo "<br> thông tin về loài thỏ";
    }

}

class CaSau extends DongVat {

    public function hoatDongDuoiNuoc() {
        echo "<br> cá sâu hoạt động dưới nước";
    }

}

$thoTrang = new Tho("trắng", "1kg", "loài thỏ");

echo "<pre>";
print_r($thoTrang);
echo "</pre>";

$thoTrang->sinhsan();
