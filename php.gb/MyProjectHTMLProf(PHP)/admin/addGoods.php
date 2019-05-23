<?php
require './../engine/db-goods.php';
$title = 'Admin-AddGoods';
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
        <form class="newProductWrap" action="addGoods.php" method="">
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
    <form method="POST" action="./../engine/core-goods.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Add new product</legend>
            <div class="form-group row">
                <label for="name" class="mt-1 col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" maxlenght="100" required class="form-control" id="name" placeholder="Name" maxlenght="100" required>
                </div>

                <label for="category" class="mt-1 col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <input type="text" name="category" maxlenght="100" required class="form-control" id="category" placeholder="Category">
                </div>

                <label for="brand" class="mt-1 col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" name="brand" maxlenght="20" required class="form-control" id="brand" placeholder="Brand">
                </div>

                <label for="designer" class="mt-1 col-sm-2 col-form-label">Designer</label>
                <div class="col-sm-10">
                    <input type="text" name="designer" maxlenght="20" required class="form-control" id="designer" placeholder="Designer">
                </div>

                <label for="material" class="mt-1 col-sm-2 col-form-label">Material</label>
                <div class="col-sm-10">
                    <input type="text" name="material" maxlenght="20" required class="form-control" id="material" placeholder="Material">
                </div>

                <label for="color" class="mt-1 col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" name="color" maxlenght="20" required class="form-control" id="color" placeholder="Color">
                </div>

                <label for="size" class="mt-1 col-sm-2 col-form-label">Size</label>
                <div class="col-sm-10">
                    <input type="text" name="size" maxlenght="20" required class="form-control" id="size" placeholder="Size">
                </div>

                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="mt-1 col-sm-10">
                    <textarea name="description" rows="5" required class="form-control" id="description" placeholder="Description"></textarea>
                </div>

                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="mt-1 col-sm-10">
                    <input type="number" name="price" maxlenght="20" required class="form-control" id="price" placeholder="Price">
                </div>

                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="mt-1 col-sm-10">
                    <input type="number" name="quantity" maxlenght="20" required class="form-control" id="quantity" placeholder="Quantity">
                </div>
            </div>
        </fieldset>

        <p>Upload a picture in jpeg, png or gif format:</p>
        <p class="addGoodsBtn"><input type="file" name="img" accept="image/jpeg, image/png, image/gif" required>
        <button class="clear" type="reset"> Clear </button>
        <button class="addProduct" type="submit" name="submit"> Add product </button></p>

    </form>
</div>

</body>

</html>