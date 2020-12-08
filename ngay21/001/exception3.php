<?php
function divide($dividend, $divisor) {

    if($divisor == 0) {
        // ném ngoại lệ bằng lệnh throw
        // kèm thông báo ngoại lệ
        throw new Exception("Đang chia cho số 0");

    }

    return $dividend / $divisor;
}

// bắt được ngoại lệ exception
try {
    // thử cố gắng thực thi đoạn lệnh
    // mà có thể ném ra 1 exception

    $kq = divide(3,0);
    echo "<br> bình thường $kq";
    
} catch (Exception $e) {
    // biến $e chứa các thông tin liên quan ngoại lệ mà chúng
    // ta gặp phải

    header("Location: https://google.com");
    exit();
}

