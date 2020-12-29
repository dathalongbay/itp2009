<?php
// muốn sử dụng class Database thuộc
// namespace Connect\Database1;
// trong Connect\Database2;

namespace Connect\Database2;

include_once "database1.php";
// nạp namespace
use Connect\Database1\Database as Connect_D_D1;

class Database {

    public function connect() {
        echo "<br> connect CSDL microsoft SQL server";
    }

    public function abc() {
        $db = new Connect_D_D1();
        $db->connect();
    }
}
