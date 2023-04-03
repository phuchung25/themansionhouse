<?php
require_once('../database/dbhelper.php');
$id = $name = '';
if (!empty($_POST['hoten'])) {
    $name = '';
    if (isset($_POST['hoten'])) {
        $name = $_POST['hoten'];
        $name = str_replace('"', '\\"', $name);
    }
    if (isset($_POST['id_user'])) {
        $id = $_POST['id_user'];
    }
    if (!empty($name)) {
        $created_at = $updated_at = date('Y-m-d H:s:i');
        // Lưu vào DB
        if ($id == '') {
            // Thêm khách hàng
            $sql = 'insert into user(hoten, created_at,updated_at) 
            values ("' . $name . '","' . $created_at . '","' . $updated_at . '")';
        } 
        else {
            // Sửa danh mục
            $sql = 'update user set hoten="' . $name . '", updated_at="' . $updated_at . '" where id_user=' . $id;
        }
        execute($sql);
        header('Location: index.php');
        die();
    }
}



if (isset($_GET['id_user'])) {
    $id = $_GET['id_user'];
    $sql = 'select * from user where id_user=' . $id;
    $category = executeSingleResult($sql);
    if ($category != null) {
        $name = $category['hoten'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Thêm Khách hàng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <ul class="nav nav-tabs">
    <li class="nav-item">
            <a class="nav-link" href="../index.php">Thống kê</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Quản lý danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản lý sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../user/">Quản lý khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Quản lý giỏ hàng</a>
        </li>
    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa Danh Mục</h2>
            </div>
            <div class="panel-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Tên Danh Mục:</label>
                        <input type="text" id="id" name="id" value="<?= $id ?>" hidden='true'>
                        <input required="true" type="text" class="form-control" id="name" name="name" value="<?= $name ?>">
                    </div>
                    <button class="btn btn-success">Lưu</button>
                    <?php
                    $previous = "javascript:history.go(-1)";
                    if (isset($_SERVER['HTTP_REFERER'])) {
                        $previous = $_SERVER['HTTP_REFERER'];
                    }
                    ?>
                    <a href="<?= $previous ?>" class="btn btn-warning">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>