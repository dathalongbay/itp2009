<?php
include_once "../../define.php";
// nạp file kết nối đến CSDL
include_once "../../lib/connect.php";


var_dump($connection);

echo "<pre>";
print_r($_POST);
echo "</pre>";

$sql = "SELECT * FROM users";
$keyword = "";

// khai báo 1 số biến cho phần phần trang
$recordsPerPage = 10;
$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
$currentPage = ($currentPage > 0) ? $currentPage : 1;
$recordStart = ($currentPage-1)*$recordsPerPage;

$countSql = " SELECT COUNT(*) AS total FROM users";


if (isset($_POST["keyword"]) && (strlen($_POST["keyword"])  > 2) ) {
    $keyword = $_POST["keyword"];
    $sql = "SELECT * FROM users WHERE username LIKE '%$keyword%'";
    echo $sql;

    $countSql .= " WHERE username LIKE '%$keyword%'";
}

if (isset($_POST["order"]) && isset($_POST["order_dir"])) {
    $order = $_POST["order"];
    $orderDir = $_POST["order_dir"];

    $sql = $sql . " " . "ORDER BY " . $order . " " . $orderDir;
} else {
    $sql = $sql . " ORDER BY id ASC";
}

$sql .= " LIMIT $recordStart,$recordsPerPage";

echo "<br> " . $sql . "<br>";

// sử dụng prepare() để chuẩn bị thực hiện câu SQL sau đó gán cho biến $stmt
$stmt = $connection->prepare($sql);
// ->execute() biến $stmt thực hiện câu truy vấn SQL
$stmt->execute();
// đặt chế độ lấy dữ liệu ra từ biến $stmt thông qua $stmt->setFetchMode()
// PDO::FETCH_ASSOC LẤY RA CÁC BẢN GHI DƯỚI DẠNG MẢNG ARRAY
// PDO::FETCH_OBJ LẤY RA CÁC BẢN GHI DƯỚI DẠNG MẢNG OBJECT
// SAU KHI LẤY DỮ LIỆU RA SẼ GÁN CHO $result
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
// $stmt->fetchAll(); LẤY TẤT CẢ CÁC BẢN GHI THEO CÂU SQL TỪ $stmt
// mà đã được setFetchMode theo chế độ mảng hay là mảng object
$users = $stmt->fetchAll();

$stmtCount = $connection->prepare($countSql);
$stmtCount->execute();
$resultCount = $stmtCount->setFetchMode(PDO::FETCH_ASSOC);
$usersCount = $stmtCount->fetchAll();
$usersCount = $usersCount[0];
$total = $usersCount["total"];
var_dump($total);
$numberPages = ceil($total/$recordsPerPage);
var_dump($numberPages);

// $rows là tập hợp mảng của các bản ghi
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

    <h1>Admin - quản trị người dùng</h1>

    <div>
        <form action="" name="search" method="post">
            <input name="keyword" value="<?php echo $keyword ?>" type="text" placeholder="nhập vào từ khóa tối thiểu 3 ký tự">

            <label for="">Sắp xếp</label>

            <select name="order">
                <option value="id">id</option>
                <option value="username">username</option>
                <option value="user_avatar">user_avatar</option>
                <option value="user_birth">user_birth</option>
            </select>

            <select name="order_dir">
                <option value="ASC">Tăng dần</option>
                <option value="DESC">Giảm dần</option>
            </select>


            <button type="submit" class="btn btn-success">Lọc kết quả</button>
        </form>
    </div>

    <div>
        <a href="<?php echo DOMAIN_SITE."/admin/users/create.php" ?>" class="btn btn-info">Thêm người dùng</a>
    </div>

    <div class="row">
        <div class="col-md-12">

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Sinh nhật</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php if (is_array($users) && !empty($users)) {
                    foreach($users as $user) {
                        $userId = (int)$user["id"];
                        ?>
                        <tr>
                            <td><?php echo $user["id"] ?></td>
                            <td><?php echo $user["username"] ?></td>
                            <td><?php echo $user["user_avatar"] ?></td>
                            <td><?php echo $user["user_birth"] ?></td>

                            <td>

                                <a href="<?php echo DOMAIN_SITE."/admin/users/edit.php?id=$userId" ?>" class="btn btn-warning">Sửa</a>
                                <span onclick="confirmDelete('<?php echo DOMAIN_SITE."/admin/users/delete.php?id=$userId" ?>')" data-href="<?php echo DOMAIN_SITE."/admin/users/delete.php?id=$userId" ?>" class="btn btn-danger">Xóa</span>

                            </td>
                        </tr>
                        <?php
                    }
                } ?>


                </tbody>
            </table>

            <ul class="pagination">
                <?php for($i = 1; $i <= $numberPages; $i++) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php
                }?>
            </ul>


        </div>
    </div>


</div>


<script>

    function confirmDelete(link) {
        var txt;
        var r = confirm("Xác nhận lại việc xóa");

        console.log(r);
        console.log(link);


        if (r == true) {
            // chuyển hướng
            window.location.href = link;

        } else {
            // không làm gì cả
        }

        return false;
    }

</script>



</body>
</html>