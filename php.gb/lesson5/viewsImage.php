<?php
include 'db.php';

$tpl = file_get_contents('viewsImage.tpl');

$id = (int)($_GET['id']);
$query = mysqli_query($mysqli, "SELECT * FROM images WHERE id = '$id'");
$sql = mysqli_query($mysqli, "UPDATE images SET views = views + 1 WHERE id = '$id'");

if(mysqli_num_rows($query) !==0){
    mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($query);
    $content = '<img src="'.$row['path'] . $row['name'].'" alt="'.$row['$name'].'">';
    $content .= '<br> Просмотров: ' .($row['views']+1);
    $title .= 'image id = ' .$id;
}

mysqli_close($mysqli);

$patterns = array('/{title}/', '/{content}/');
$replace = array($title, $content);
echo preg_replace($patterns, $replace, $tpl);