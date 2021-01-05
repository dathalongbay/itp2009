<?php
include_once "db.php";

$db = new Database();
$connection = $db->connection;

$sql = "SELECT * FROM devvn_tinhthanhpho";

$stmt = $connection->prepare($sql);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$provinces = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <pre>
        ajax là gì ?
        ajax là 1 kỹ thuật load dữ liệu hay load 1 phần trang web
        mà không cần phải refresh F5 lại trang
    </pre>

    <select name="tinh" id="tinh">
        <option value="0">Chọn tỉnh tp</option>
        <?php foreach($provinces as $province) : ?>
            <option value="<?php echo $province["matp"] ?>"><?php echo $province["name"] ?></option>
        <?php endforeach; ?>
    </select>

    <select name="quan" id="quan">
        <option value="0">Danh sách quận</option>
    </select>

    <pre>
        search : hướng dẫn ajax php
        search tiếng anh : ajax php tutorial
        tutorial là hướng dẫn
        https://freetuts.net/hoc-php/hoc-ajax
        https://viblo.asia/p/mot-so-vi-du-su-dung-ajax-RnB5pGablPG
    </pre>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function (){
            $('select#tinh').on("change", function (){

                var matp = $(this).val();
                //alert(matp);

                var dataSend = {
                    matinh:matp
                };

                var ajaxSetup = {
                    url:"http://localhost/itp2009a/ngay28/003/ajax.php",
                    // dữ liệu gửi đi
                    data: dataSend,
                    // method
                    type:"POST",
                    dataType: "json",
                    success: function (response){
                        //response dữ liệu trả về từ máy chủ

                        console.log(response);
                        console.log(typeof response);
                        if (typeof response == "object") {
                            var response1 = response;
                        } else {
                            var response1 = JSON.parse(response);
                        }

                        console.log(response1);
                        console.log(response1.message);
                        console.log(response1.status);
                        console.log(response1.html);

                        if (response1.html != "undefined") {
                            $("select#quan").html(response1.html);
                        }

                    },
                    error: function (xhr){
                        console.log(xhr);
                    }
                };

                $.ajax(ajaxSetup);




            });

        });

    </script>




</body>
</html>