<?php
class Goodbye {

    // khai báo từ khóa const trước tên hằng số
    // hằng số nên viết hoa
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

}

// khi chúng ta truy cập đến hằng số
// TenClass::TenHangSo
echo Goodbye::LEAVING_MESSAGE;
