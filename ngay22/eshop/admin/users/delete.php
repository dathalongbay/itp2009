<?php

include_once "../../define.php";
// nạp file kết nối đến CSDL
include_once "../../lib/connect.php";

if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
    $userId = (int)$_GET["id"];

    $sql = "DELETE FROM users WHERE id=$userId";

    $response = $connection->exec($sql);

    var_dump($response);
    if ($response == 1) {
        // xóa thành công

    }

}

header("Location: index.php");
exit;

?>