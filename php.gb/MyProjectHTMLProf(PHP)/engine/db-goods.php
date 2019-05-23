<?php
require 'init.php';
// echo 'ok';
function addGoods ($mysqli, $name, $category, $brand, $desinger, $material, $size, $description, $price, $quantity, $img) {
    
    $SQL_query = sprintf("INSERT INTO goods (name, category, brand, desinger, material, size, description, price, quantity, img) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s', '%s')", $name, $category, $brand, $desinger, $material, $size, $description, $price, $quantity, $img);
    
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

function deleteGooods($mysqli, $id) {
    $id = (int)$id;

    if($id == 0) 
        return false;

    $SQL_query = sprintf("SELECT * FROM myproject.goods WHERE id='%d'", (int)$id);
    $query = mysqli_query(myDB_connect(), $SQL_query);

    if(!$query)
        die (mysqli_error($mysqli));

    return mysqli_affected_rows($mysqli);
}

function editGooods($mysqli, $id, $name, $category, $brand, $desinger, $material, $color, $size, $description, $price, $quantity, $img) {
    $id = (int)$id;
    
    $sql = "UPDATE goods SET (name='%s', category='%s', brand='%s', desinger='%s', material='%s', color='%s', size='%s', description='%s', price='%s', quantity='%s', img='%s') WHERE id='%d'";
    $SQL_query = sprintf($sql, mysqli_real_escape_string($mysqli, $name), mysqli_real_escape_string($mysqli, $category), mysqli_real_escape_string($mysqli, $brand), mysqli_real_escape_string($mysqli, $desinger), mysqli_real_escape_string($mysqli, $material), mysqli_real_escape_string($mysqli, $color), mysqli_real_escape_string($mysqli, $size), mysqli_real_escape_string($mysqli, $description), mysqli_real_escape_string($mysqli, $price), mysqli_real_escape_string($mysqli, $quantity), mysqli_real_escape_string($mysqli, $img), mysqli_real_escape_string($mysqli, $id));
    session_start();
    $query = mysqli_query($mysqli, $SQL_query);

    if(!$query)
        die (mysqli_error($mysqli));

    return mysqli_affected_rows($mysqli);
}