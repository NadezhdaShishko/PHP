<?php
require 'init.php';
// echo 'ok';
function addGoods ($mysqli, $name, $category, $brand, $designer, $material, $color, $size, $description, $price, $quantity, $img) {
    
    $SQL_query = sprintf("INSERT INTO goods (name_item, category, brand, designer, material, size, color, desc_item, price, quantity, img) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s','%s', '%s') ", $name, $category, $brand, $designer, $material, $color, $size, $description, $price, $quantity, $img);
    
    session_start();
    
    $query = mysqli_query(myDB_connect(), $SQL_query);

    if(!$query) {
        die (mysqli_error($mysqli));
    }

    return true;

    $buffer = ob_get_clean();
    echo $buffer;
}

function allGoods ($mysqli) {
    $SQL_query = "SELECT * FROM myproject.goods ORDER BY id DESC";
    
    session_start();
    
    $query = mysqli_query(myDB_connect(), $SQL_query);

    $result = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }

    return $result;
    
    $buffer = ob_get_clean();
    echo $buffer;
}

function mainGoods ($mysqli) {
    $SQL_query = "SELECT * FROM myproject.goods LIMIT 8";
    
    session_start();
    
    $query = mysqli_query(myDB_connect(), $SQL_query);

    $result = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }

    return $result;
    
    $buffer = ob_get_clean();
    echo $buffer;
}

function getGoods($mysqli, $id) {
    $SQL_query = sprintf("SELECT * FROM myproject.goods WHERE id=%d", (int)$id);
    
    session_start();
    
    $query = mysqli_query(myDB_connect(), $SQL_query);

    if(!$query)
        die (mysqli_error($mysqli));

    $item = mysqli_fetch_assoc($query);

    return $item;
    
    $buffer = ob_get_clean();
    echo $buffer;
}

function deleteGoods($mysqli, $id) {
    $id = (int)$id;

    if($id == 0) 
        return false;

    $SQL_query = sprintf("DELETE FROM myproject.goods WHERE id='%d'", (int)$id);
    session_start();
    $query = mysqli_query(myDB_connect(), $SQL_query);

    if(!$query)
        die (mysqli_error(myDB_connect()));

    return mysqli_affected_rows(myDB_connect());
}


function editGoods($mysqli, $id, $name, $category, $brand, $designer, $material, $color, $size, $description, $price, $quantity, $img) {
    $id = (int)$id;
    
    $sql = "UPDATE myproject.goods SET name_item='%s', category='%s', brand='%s', designer='%s', material='%s', color='%s', size='%s', desc_item='%s', price='%s', quantity='%s', img='%s' WHERE id='%d'";
    $SQL_query = sprintf($sql, $name, $category, $brand, $designer, $material, $color, $size, $description, $price, $quantity, $img, (int)$id);
    session_start();

    $query = mysqli_query(myDB_connect(), $SQL_query);

    if(!$query)
        die (mysqli_error(myDB_connect()));

    return mysqli_affected_rows(myDB_connect());
    $buffer = ob_get_clean();
    echo $buffer;
}