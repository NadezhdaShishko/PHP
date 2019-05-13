<?php
/* Подключение к БД */ 
$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB) or die ("Невозможно подключиться к БД");
mysqli_query($mysqli, "SET CHARACTER SET 'utf8'");

$query = mysqli_query($mysqli, "SELECT * FROM gallery.images ORDER BY views DESC");

$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

mysqli_close($mysqli);
