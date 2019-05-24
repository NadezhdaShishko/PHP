<?php
require './../engine/db-goods.php';
if($_GET['id']) {
    $id = (int)($_GET['id']);

deleteGoods($mysqli, $id);
header ("Location: ../admin/index.php");}
$title = 'Admin-DeleteGoods';
?>