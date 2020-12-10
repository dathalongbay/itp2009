<?php

// ip của máy chủ
// trên môi trường vd : 192.268.7.2
// trên localhost xampp 127.0.0.1
$servername = "127.0.0.1";
// username xampp mặc định root
$usernameMysql = "root";
// mật khẩu kết nối đến CSDL
// trên xampp mặc định mật khẩu là rỗng
$passwordMysql = "";
// tên CSDL mà chúng ta muốn kết nối
$databaseName = "eshop";

try {
    // thử kết nối đến mysql từ php bằng kỹ thuật PDO
// trong class PDO chúng ta truyền vào 3 đối số
// đối số 1 : "mysql:host=$servername;dbname=myDB"
    $connection = new PDO("mysql:host=$servername;dbname=$databaseName", $usernameMysql, $passwordMysql);

// có biến $connection chứa kết nối đến CSDL

// -> cách gọi đến hàm bên trong class trong php
// object->method()
// hàm trong class thì người ta gọi là phương thức method
// set the PDO error mode to exception

// đặt chế độ lỗi và exception ngoại lệ cho PDO
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (Exception $e) {

    // nếu không kêt nối đc đến CSDL
    // 1. kết nối đến CSDl dự phòng
    // 2. in ra thông báo
    // 3. in ra thông báo, gửi kèm email cho admin
    // 4. chuyển hướng trang thông báo lỗi ...
    echo "Không kết nối được đến CSDL ";
    die;
}

// $connection chứa kết nối đến CSDL eshop



