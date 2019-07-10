<?php
require './../engine/db-goods.php';

$count = 1;
if(isset($_POST['id'])) {
    $id = (int)($_POST['id']);
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
        $login = $_SESSION['login'];
    }

    $item = getOne($mysqli, $id, 'goods');
    
}