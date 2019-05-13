<?php

if($id = $_GET['id']){
    $mysqli = mysqli_connect(HOST, USER, PASSWORD, DB) or die ("Невозможно подключиться к БД");
    mysqli_query($mysqli, "SET CHARACTER SET 'utf8'");

    $id = (int) mysqli_real_escape_string($mysqli, $id);;
    $query = mysqli_query($mysqli, "SELECT * FROM gallery.images WHERE id = {$id}");
    mysqli_query($mysqli, "UPDATE images SET views = views + 1 WHERE id = $image[id]");

    
    $result = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }

    include 'viewsImage.php';

    mysqli_close($mysqli);
}
