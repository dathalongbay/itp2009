<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["gioitinh"]) && isset($_POST["hoten"])) {
    $chao = ($_POST["gioitinh"] == 1) ? "chào chị" : "";
    $chao = ($_POST["gioitinh"] == 2) ? "chào anh" : "";

    $loichao = $chao . " " . $_POST["hoten"];
    echo "<h1>$loichao</h1>";
}