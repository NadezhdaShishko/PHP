<?php

require './engine/init.php';

$SQL_query = "SELECT * FROM reviews.reviews ORDER BY id DESC";

$query = mysqli_query($mysqli, $SQL_query);

$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}