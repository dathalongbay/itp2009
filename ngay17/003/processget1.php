<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

if (isset($_GET["gioitinh"]) && isset($_GET["hoten"])) {
    $chao = ($_GET["gioitinh"] == 1) ? "chào chị" : "";
    $chao = ($_GET["gioitinh"] == 2) ? "chào anh" : "";

    $loichao = $chao . " " . $_GET["hoten"];
    echo "<h1>$loichao</h1>";
}