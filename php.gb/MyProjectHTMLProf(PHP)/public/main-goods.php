<?php
// $admin = isset($_POST['admin'])?$_POST['admin']:'';

$SQL_query = "SELECT * FROM myproject.goods";

// if ($search!='') {
//     $SQL_query .= " WHERE category = featured";
//     }

// session_start();


$query = mysqli_query($mysqli, $SQL_query);


$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}