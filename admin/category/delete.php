<?php
require_once('..database/dbhelper.php');
?>
<?php

    $id = $_GET['id'];


$sql = 'delete from category where id=' . $id;
execute($sql);
header('Location: index.php');
die();


?>