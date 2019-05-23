<?php
ob_start();
require './../engine/db-goods.php';
$title = 'Brand-Admin-Main';
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
            <button class="newProduct" type="submit" value="new product">
                Add new product
            </button>
        </form>
    </div>
</header>

<?php 
require ROOT_DIR.'/templates/topNav.php';
?>

<div class="container">
    <div class="row productUnitContent">
        <?php 
        $result = allGoods($mysqli);
        if($result){
            foreach ($result as $product):?>
                <div class="col-lg-3 col-md-4 col-sm-6 productUnit admin">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <form>
                                <button class="editItem" type="submit" formmethod="get" formaction="editGoods.php" name="id" value="<?= $product['id'] ?>">
                                    Edit item
                                </button>
                                <button class="deleteItem" type="submit" formmethod="get" formaction="deleteGoods.php">
                                    Delete the item
                                </button>
                            </form>
                        </div>
                        <img src="../public/<?= $product['img'] ?>" alt="<?= $product['img'] ?>">
                    </div>
                    <div class="productName">
                        <a href="sinlePage.php?id=<?= $product['id'] ?>" title="Нажмите для просмотра этого товара"> <?= $product['brand'].$product['name'] ?> </a>
                    </div>
                    <div class="productPrice">
                        $<?= $product['price'] ?>.00
                    </div>
                </div>
            <?php endforeach ?>
        <?php }?>
    </div>
</div>

</body>

</html>