<?php


class ImageHtml {

    public $src;
    public $alt;
    public $width;
    public $height;

    // học phương thức đặt biệt trong class
    // phương thức khởi tạo hay constructor
    public function __construct($source , $altAtt, $w = 0, $h = 0)
    {
        echo "<br> Tự động chạy";

        // constructor thường được sử dụng
        // để gán giá trị cho các thuộc tính bên trong class
        $this->src = $source;
        $this->alt = $altAtt;

        $this->width = $w;
        $this->height = $h;

    }

    public function displayImage() {
        $html = "<img src='$this->src' alt='$this->alt'";
        if ($this->width > 0) {
            $html .= " width='$this->width' ";
        }
        if ($this->height > 0) {
            $html .= " height='$this->height' ";
        }
        $html .= "/>";
        return $html;
    }

}
