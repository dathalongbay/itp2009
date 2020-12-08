<?php
// HinhChuNhat là tên class
class HinhChuNhat {

    // trong class

    // khái niệm 1 là thuộc tính của class
    // thuộc tính là đặt điểm tính chất của đối tượng
    public $w;
    public $h;
    public $p;
    public $s;


    // khái niệm 2 là phương thức trong class
    // phương thức gần giống như function
    // phương thức method nằm trong class
    // hàm nằm ngoài class
    public function taoHCN($a, $b) {
        // gán 2 tham số cho các thuộc tính của class
        // truy cập vào thuộc tính của class
        // khi gọi đến thuộc tính thì nhớ bỏ dấu $ trước tên
        // thuộc tính
        $this->w = $a;
        $this->h = $b;
    }


    public function tinhChuVi() {

        $cv = ($this->w+$this->h)*2;
        $this->p = $cv;
        return $this->p;
    }

    public function tinhDienTich() {
        $dt = ($this->w*$this->h);
        $this->s = $dt;
        return $this->s;
    }

    public function demo() {
        echo "<br> demo trong class";
    }

    public function inThongTin() {
        // gọi đến phương thức khác trong class
        $this->demo();
    }


} // kết thúc class


// bên ngoài class chúng ta tạo ra 1 object đối tượng
// đối tượng là cụ thể
// class là chung
// object khởi tạo từ class
// class Nguoi => object Nam
// class XeHoi => xe biển số A123-456

// khơi tạo object từ class bằng từ khóa new
// tên object = new tenClass();
$hcn1 = new HinhChuNhat();
$hcn2 = new HinhChuNhat();

// bên ngoài class khi chúng ta muốn truy cập đến phương thức
//// thì chúng ta phải truy cập thông qua object
$hcn1->taoHCN(2,5);

// bên ngoài class khi chúng ta muốn truy cập đến thuộc tính
// thì chúng ta phải truy cập thông qua object
echo "<br>".$hcn1->w;
echo "<br>".$hcn1->h;
