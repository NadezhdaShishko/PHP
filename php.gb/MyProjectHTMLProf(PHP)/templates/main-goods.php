<div class="container productsFeturedWrap">
    <div class="topFetured">Fetured Items</div>
    <div class="bottomFetured">Shop for items based on what we featured in this week</div>
    
    <div class="row productUnitContent">
    <?php
    $result = mainGoods($mysqli);
    if($result){
        foreach ($result as $product):?>
            <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
                <div class="productUnitImgWrap">
                    <div class="productUnitBuy">
                        <button>
                            <img src="images/addToCart.png" alt="">
                            Add to Cart
                        </button>
                    </div>
                    <img src="./<?= $product['img'] ?>" alt="<?= $product['img'] ?>">
                </div>
                <div class="productName">
                    <a href="../public/singlePage.php?id=<?= $product['id'] ?>" title="Нажмите для просмотра этого товара"> <?= $product['brand'].$product['name_item'] ?> </a>
                </div>
                <div class="productPrice">
                    $<?= $product['price'] ?>.00
                </div>
            </div>
        <?php endforeach ?>
    <?php } ?>
    </div>
    
    <button class="productBtn">
        Browse All Product
        <i class="fas fa-long-arrow-alt-right"></i>
    </button>
</div>

                
        