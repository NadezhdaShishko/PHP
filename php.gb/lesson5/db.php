<?php
/* Подключение к БД */ 
$localConfig = include 'config.php';
$config = array_merge($localConfig);
$mysqli = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
) 
or die ("Невозможно подключиться к БД");