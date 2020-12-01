<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["folder_path"])) {
    $folder_path = $_POST["folder_path"];

    if (!file_exists($folder_path)) {
        //mkdir('path/to/directory', 0777, true);
        mkdir($folder_path, 0777, true);
        //file_exists() kiểm tra file hay folder đã tồn tại
        if (file_exists($folder_path)) {
            echo "<br> Tạo thư mục thành công";
        } else {
            echo "<br> Tạo thư mục thất bại";
        }
    } else {
        echo "<br> Thư mục đã tồn tại";
    }



}
?>

<div class="container">
    <h1>Demo tạo folder bằng php</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="" name="folder" method="post">
                <div class="form-group">
                    <label>Nhập đường dẫn folder:</label>
                    <input type="text" name="folder_path" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">tạo folder</button>
            </form>
        </div>
    </div>
</div>




</body>
</html>