<?php

function viewData($var) {
    echo "<br>" . __FUNCTION__;
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function showCodeAjax() {
    echo "<pre>";
    echo "<code>";
    echo '$(document).ready(function (){
            $("#tinh").on("change", function (){
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    datatype: "JSON",
                    data: {id:id},
                    success: function(data)
                    {
                        var data = JSON.parse(data);
                        console.log(data);
                        $("#quan").html(data.html);
                    }
                });
            });
        });';
    echo "</code>";
    echo "</pre>";
}

function remind() {
    echo "<br> isset() : kiểm tra xem 1 biến có tồn tại hay ko trả về true or false";
    echo "<br> empty() : kiểm tra xem 1 biến có tồn tại hay ko trả về true or false";
    echo "<br> count() : kiểm tra xem 1 biến có tồn tại hay ko trả về true or false";
    echo "<br> json_encode() : kiểm tra xem 1 biến có tồn tại hay ko trả về true or false";
    echo "<br> json_decode() : kiểm tra xem 1 biến có tồn tại hay ko trả về true or false";
}

function debug123() {
    echo "exit(); để ngừng và xem dữ liệu in ra có vấn đề gì ko";
    echo "google search lỗi để tìm giải pháp";
}

function thuatToanSapXepDonGianNhat() {

}

function quyChuanDatTenVarFuncClass(){

}

function tongHopCacSiteHocPhpFree() {

}

function tongHopSql() {

}

function tongHopGit(){

}

function notePHPPdo() {

}

function noteJs() {
    echo "";
}

function phimTatPHPStorm() {

}

function linuxCommand() {

}
