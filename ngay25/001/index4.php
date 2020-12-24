<?php
class DongVat {

    public $mau_sac;

    public $can_nang;

    public $ten_goi;

    private $adn = "ABC";

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


    public function getAdn() {
        // chỉ bên trong bản thân class đó mới gọi private
        return $this->adn;
    }

    private function demo1() {
        echo "<br> phương thức private";
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


/**
 * 3 nơi truy cập
 * 1 - chính bên trong bản thân class đó
 * 2 - bên ngoài của class đó
 * 3 - bên trong class con kế thừa từ class đó
 * public công khai truy cập mọi nơi
 */

$dongVat1 = new DongVat("trắng", "", "đong vật 1");
echo "<br> gọi method getAdn() : " . $dongVat1->getAdn();
echo "<br>" . $dongVat1->adn;
