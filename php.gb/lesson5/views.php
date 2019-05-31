<?php
include 'db.php';

$query = mysqli_query($mysqli, "SELECT * FROM gallery.images ORDER BY views DESC");
$sql = mysqli_query($mysqli, "UPDATE images SET views = views + 1 WHERE id = ''");

if(mysqli_num_rows($query) > 0){
    while ($row = mysqli_fetch_assoc($query)) {
        mysqli_query($mysqli, $sql.$row['id']);
        echo '<div class="galleryItem">';
        echo '<a href="viewsImage.php?id=' .$row['id'].'" target="_blank"><img class="image" src="' .$row['path'] . $row['name']. '" width="250" height="150" alt="' .$row['name']. '">';
        echo '</div>';
    }
}

mysqli_close($mysqli);
