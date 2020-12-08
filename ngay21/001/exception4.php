<?php
function divide($dividend, $divisor) {

    if($divisor == 0) {
        // ném ngoại lệ bằng lệnh throw
        // kèm thông báo ngoại lệ
        throw new Exception("Đang chia cho số 0", 234);

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
   // in ra thông tin của exception $e

    // trả ra mã của ex
    $code = $e->getCode();

    // trả ra thông báo
    $message = $e->getMessage();

    // in ra file ném ra ngoài lê
    $file = $e->getFile();

    // tra ra dòng ném ra ngoại lệ
    $line = $e->getLine();

    echo "<br>" .  $code;
    echo "<br>" .  $message;
    echo "<br>" .  $file;
    echo "<br>" .  $line;
}

