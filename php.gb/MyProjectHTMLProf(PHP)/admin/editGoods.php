<?php
require './../engine/db-goods.php';
if(($_GET['id'])) {$id = (int)$_GET[id];}
$item = getGoods($mysqli, $id);
$title = 'Admin-EditGoods';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles/css/style.css">

    <title><?= $title ?></title>

</head>

<body>

<header class="header container-fluid">
    <div class="container headerInside">
        <div class="logo">
            BRAN<span>D</span>
        </div>
        <form class="searchWrap">
            <div class="searchBrowse">
                Browse <i class="fas fa-caret-down"></i>
            </div>
            <input type="text" placeholder="Search for Item...">
            <button>
                <i class="fas fa-search"></i>
            </button>
        </form>
        <form class="newProductWrap" action="addGoods.php" method="GET">
            <button class="newProduct" type="submit" value="newProduct">
                Add new product
            </button>
        </form>
    </div>
</header>

<?php 
require ROOT_DIR.'/templates/topNav.php';
?>

<div class="my-1 container" class="addGoods">
    <form method="POST" action="../engine/core-goods.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Add new product</legend>
            <div class="form-group row">
                <label for="name" class="mt-1 col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" maxlenght="100" class="form-control" id="name" value="<?= $item[name]?>">
                </div>

                <label for="category" class="mt-1 col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <input type="text" name="category" maxlenght="100" class="form-control" id="category" value="<?= $item['category']?>">
                </div>

                <label for="brand" class="mt-1 col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" name="brand" maxlenght="20" class="form-control" id="brand" value="<?= $item['brand']?>">
                </div>

                <label for="designer" class="mt-1 col-sm-2 col-form-label">Designer</label>
                <div class="col-sm-10">
                    <input type="text" name="designer" maxlenght="20" class="form-control" id="designer" value="<?= $item['designer']?>">
                </div>

                <label for="material" class="mt-1 col-sm-2 col-form-label">Material</label>
                <div class="col-sm-10">
                    <input type="text" name="material" maxlenght="20" class="form-control" id="material" value="<?= $item['material']?>">
                </div>

                <label for="color" class="mt-1 col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" name="color" maxlenght="20" class="form-control" id="color" value="<?= $item['color']?>">
                </div>

                <label for="size" class="mt-1 col-sm-2 col-form-label">Size</label>
                <div class="col-sm-10">
                    <input type="text" name="size" maxlenght="20" class="form-control" id="size" value="<?= $item['size']?>">
                </div>

                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="mt-1 col-sm-10">
                    <textarea name="description" rows="5" class="form-control" id="description" value="<?= $item['description']?>"></textarea>
                </div>

                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="mt-1 col-sm-10">
                    <input type="number" name="price" maxlenght="20" class="form-control" id="price" value="<?= $item['price']?>">
                </div>

                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="mt-1 col-sm-10">
                    <input type="number" name="quantity" maxlenght="20" class="form-control" id="quantity" value="<?= $item['quantity']?>">
                </div>
            </div>
        </fieldset>

        <p>Upload a picture in jpeg, png or gif format:</p>
        <p><img src="../public/<?= $item['img']?>" width="210"></p>
        <p class="addGoodsBtn"><input type="file" name="img" accept="image/jpeg, image/png, image/gif">
        <input type="hidden" name="img" value="<?= $item['img']?>">
        <input type="hidden" name="edit" value="<?= $item['id']?>">
        <button class="addProduct" type="submit" name="submit"> Add product </button></p>

    </form>
</div>

</body>

</html>