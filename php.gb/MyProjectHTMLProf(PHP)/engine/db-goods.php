<?php
require 'init.php';

function addGoods ($mysqli, $name, $img, $price, $category) {
    $SQL_query = sprintf("INSERT INTO goods (name, img, price, category) VALUES ('%s', '%s', '%s', '%s')", $name, $img, $price, $category);
    $query = mysqli_query($mysqli, $SQL_query);

    if(!$query) {
        die (mysqli_error($mysqli));
    }

    return true;
}

function allGoods ($mysqli) {
    $SQL_query = "SELECT * FROM myproject.goods ORDER BY id DESC";
    $query = mysqli_query($mysqli, $SQL_query);
    $result = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }

    return $result;
}

function getGoods($mysqli, $id) {
    $SQL_query = sprintf("SELECT * FROM myproject.goods WHERE id=%d", (int)$id);
    $query = mysqli_query($mysqli, $SQL_query);

    if(!$query)
        die (mysqli_error($mysqli));

    $item = mysqli_fetch_assoc($query);

    return $item;
}

function deleteGooods($mysqli, $id) {
    $id = (int)$id;

    if($id == 0) 
        return false;

    $SQL_query = sprintf("SELECT * FROM myproject.goods WHERE id='%d'", (int)$id);
    $query = mysqli_query($mysqli, $SQL_query);

    if(!$query)
        die (mysqli_error($mysqli));

    return mysqli_affected_rows($mysqli);
}

function editGooods($mysqli, $id, $name, $img, $price, $category) {
    $id = (int)$id;

    $SQL_query = sprintf("UPDATE goods SET (name, img, price, category) VALUES ('%s', '%s', '%s', '%s') WHERE id='%d'", $name, $img, $price, $category, (int)$id);
    $query = mysqli_query($mysqli, $SQL_query);

    if(!$query)
        die (mysqli_error($mysqli));

    return mysqli_affected_rows($mysqli);
}