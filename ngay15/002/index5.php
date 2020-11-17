<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$cities1 = array("hà nội", "hồ chí minh", "đà nẵng", "hải phòng");
?>
<div class="container">
    <h2>Striped Rows</h2>
    <p>The .table-striped class adds zebra-stripes to a table:</p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên tỉnh thành phố</th>
        </tr>
        </thead>
        <tbody>
            <?php
            if (is_array($cities1) && !empty($cities1)) {
                for ($i = 0; $i < count($cities1); $i++) {
                    ?>
                    <tr>
                        <td><?php echo ($i + 1) ?></td>
                        <td><?php echo $cities1[$i] ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
