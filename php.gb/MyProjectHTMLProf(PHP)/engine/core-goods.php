<?php
require './../engine/db-goods.php';

if($_POST['submit']) {
    $name = trim(strip_tags($_POST['name']));
    $category = trim(strip_tags($_POST['category']));
    $brand = trim(strip_tags($_POST['brand']));
    $desinger = trim(strip_tags($_POST['desinger']));
    $material = trim(strip_tags($_POST['material']));
    $color = trim(strip_tags($_POST['color']));
    $size = trim(strip_tags($_POST['size']));
    $description = trim(strip_tags($_POST['description']));
    $price = (int)trim(strip_tags($_POST['price']));
    $quantity = (int)trim(strip_tags($_POST['quantity']));

    $filePath = $_FILES['img']['tmp_name'];
    $fileName = translate($_FILES['img']['name']);
    $type = $_FILES['img']['type'];
    $size = $_FILES['img']['size'];

    if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
        if($size > 0 and $size < 1000000) {
            if(copy($filePath, "../public/" .$fileName)) {
                if(isset($_POST['edit'])) {
                    $id = (int)trim(strip_tags($_POST['edit']));
                    editGooods($mysqli, $id, $name, $category, $brand, $desinger, $material, $color, $size, $description, $price, $quantity, $fileName);
                    header ("Location: ../admin/index.php");
                } else {
                    addGoods($mysqli, $id, $name, $category, $brand, $desinger, $material, $color, $size, $description, $price, $quantity, $fileName);
                    header ("Location: ../admin/index.php");
                }
                $message = "<h3>Файл успешно загружен на сервер!</h3>";
            } else {
                $message = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
                die;
            }
        } else {
            $message = "<b>Ошибка! Картинка превышает 1Мб.</b>";
        }
    } else {
        $message = "<b> Картинка не подходит по типу! Картинка должна быть в формате jpag, png или gif! </b>";
    }
}