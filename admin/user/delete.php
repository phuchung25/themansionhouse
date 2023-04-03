
<?php
require_once('../database/dbhelper.php');

    $id = $_GET['id_user'];
$sql = "DELETE FROM user WHERE id_user = '$id'";
execute($sql);
header("http://localhost/PHP1-MAIN/admin/user/");
die();


?>