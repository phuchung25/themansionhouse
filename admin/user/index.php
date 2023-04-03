<?php
require_once('../database/dbhelper.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Quản Lý Danh Mục</title>
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
            <a class="nav-link active" href="../category/">Quản lý danh mục</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../product/">Quản lý sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../user/">Quản lý khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../dashboard.php">Quản lý giỏ hàng</a>
        </li>
    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản lý Khách hàng</h2>
            </div>
            <div class="panel-body"></div>
            <a href="">
                <button class=" btn btn-success" style="margin-bottom:20px">Thêm Khách hàng</button>
            </a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <td width="70px">STT</td>
                        <td>Tên khách hàng</td>
                        <td width="50px"></td>
                        <td width="50px"></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Lấy danh sách khách hàng
                    $sql = 'select * from user';
                    $userList = executeResult($sql);
                    $index = 1;
                    foreach ($userList as $item) {
                        echo '  <tr>
                    <td>' . ($index++) . '</td>
                    <td>' . $item['hoten'] . '</td>
                    <td>
                        <a href="add.php?id_user=' . $item['id_user'] . '">
                            <button class=" btn btn-warning">Sửa</button> 
                        </a> 
                    </td>
                    <td>    
                    <a href="delete.php?id_user=' . $item['id_user'] . '">
                 
                    <button class="btn btn-danger" onclick="deleteUser(' . $item['id_user'] . ')">Xoá</button>
                        </a>         
                    
                    </td>
                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script type="text/javascript">
		function deleteUser(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}
			console.log(id)
			$.post('ajax.php', {
				'id_user': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>
</body>
<!-- <-- <button class="btn btn-danger" onclick="deleteUser('.$item['hoten'].')">Xoá</button>--> 
</html>