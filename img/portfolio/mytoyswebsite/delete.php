<?php
include ('productCRUD.php');
$obj = new productCRUD();
$succes = $obj->deleteProduct($_GET['code']);
header('Location:index.php');

?>