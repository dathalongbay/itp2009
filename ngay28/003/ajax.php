<?php
include_once "db.php";
// làm sao lấy được dữ liệu gửi đến ajax.php

if (isset($_POST["matinh"])) {
    $matinh = $_POST["matinh"];

    $db = new Database();
    $connection = $db->connection;

    $sql = "SELECT * FROM devvn_quanhuyen WHERE matp = $matinh";

    $stmt = $connection->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $districts = $stmt->fetchAll();

    $html = "";
    foreach($districts as $districtItem) {
        $districtItemId = $districtItem["maqh"];
        $districtItemName = $districtItem["name"];
        $html .= "<option value='$districtItemId'>$districtItemName</option>";
    }

    $jsonSuccess = ["status" => 1, "message" => "thành công", "html" => $html];
    $jsonSuccess = json_encode($jsonSuccess);
    echo $jsonSuccess;
    exit();

} else {
    $jsonError = ["status" => 0, "message" => "có lỗi xảy ra"];
    $jsonError = json_encode($jsonError);
    echo $jsonError;
    exit();
}
