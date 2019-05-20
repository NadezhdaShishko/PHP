<?php
require './../engine/init.php';
require ROOT_DIR.'/engine/db-goods.php';
$title = 'Brand-Admin';
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
            <button class="newProduct" value="new product">
                Add product
            </button>
        </form>
    </div>
</header>

<?php 
require ROOT_DIR.'/templates/topNav.php';
?>

<div class="container productsFeturedWrap">
    <div class="topFetured">Fetured Items</div>
    <div class="bottomFetured">Shop for items based on what we featured in this week</div>
    <div class="row productUnitContent">
        <?php 
        $result = allGoods($mysqli);
        if($result){
            foreach ($result as $product):?>
                <div class="col-lg-3 col-md-4 col-sm-6 productUnit admin">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button class="editItem">
                                Edit item
                            </button>
                            <button class="deleteItem">
                                Delete the item
                            </button>
                        </div>
                        <img src="../public/<?= $product['img'] ?>" alt="<?= $product['img'] ?>">
                    </div>
                    <div class="productName">
                        <a href="sinlePage.php?id=<?= $product['id'] ?>" title="Нажмите для просмотра этого товара"> <?= $product['name'] ?> </a>
                    </div>
                    <div class="productPrice">
                        $<?= $product['price'] ?>.00
                    </div>
                </div>
            <?php endforeach ?>
        <?}?>
    </div>
</div>

<form>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
</form>