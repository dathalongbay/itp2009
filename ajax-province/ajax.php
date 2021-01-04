<?php

if (is_array($_POST) && !empty($_POST)) {

    $id = $_POST["id"] ? $_POST["id"] : 0;

    include_once "db.php";
    include_once "common.php";

    $db = new Database();
    $connection = $db->connection;

    $sql = "SELECT * FROM devvn_quanhuyen WHERE matp = $id";

    $stmt = $connection->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $districts = $stmt->fetchAll();

    //viewData($districts);
    $html = "";

    foreach ($districts as $district) {
        $districtId = $district["maqh"];
        $districtName = $district["name"];
        $html .= "<option value='$districtId'>$districtName</option>";
    }

    $response = ["html" => $html];
    echo json_encode($response);
    exit();
}
