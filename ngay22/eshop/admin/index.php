<?php
// nạp file theo đường dẫn tương đối
include_once "../define.php";
echo "<br>" . DOMAIN_SITE;
echo "<br>" . SITE_PATH;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <h1>Admin quản trị chung</h1>

        <div class="row">
            <div class="col-md-12">

                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo DOMAIN_SITE."/admin/products/index.php" ?>">Quản trị sản phẩm</a>
                        </li>
                        <li>
                            <a href="<?php echo DOMAIN_SITE."/admin/users/index.php" ?>">Quản trị users</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>


    </div>



</body>
</html>