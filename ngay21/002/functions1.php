<?php
function taoHinhCN($a, $b) {

    $hcn = ["w" => $a, "h" => $b];
    return $hcn;
}

function tinhChuViHCN($a, $b) {
    $p = ($a+$b)*2;
    return $p;
}

function tinhSHinhCN($a, $b) {
    $s = $a*$b;
    return $s;
}

$hcn1 = taoHinhCN(2,5);
$cv = tinhChuViHCN($hcn1["w"], $hcn1["h"]);
$s = tinhSHinhCN($hcn1["w"], $hcn1["h"]);