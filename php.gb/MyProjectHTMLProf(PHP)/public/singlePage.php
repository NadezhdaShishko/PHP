<?php
include './../engine/db-goods.php';
if(isset($_GET[id])) {$id = (int)$_GET[id];}
$item = getGoods($mysqli, $id);
$title = 'Brand-Single Page';
require ROOT_DIR.'/templates/header.php';
require ROOT_DIR.'/templates/topNav.php';
require ROOT_DIR.'/templates/navNewArrivals.php';
?>

<div class="imageSlideWrap">
    <div class="imageSlide">
        <img src="<?= $item['img'] ?>" alt="<?= $item['img'] ?>">
        <div class="imageSlideArrowLeft">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="imageSlideArrowRight">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    <div class="container productDescWrap">
        <div class="topContentProductDesc">
            <div class="topSignProductDesc">
                <?= $item['category'] ?>
            </div>
            <div class="bottomSignProductDesc">
                <?= $item['brand'].$item['name'] ?>
            </div>
            <div class="productDescText">
                <?= $item['description'] ?>
            </div>
            <div class="materialProductDesc">
                <div>MATERIAL: <span><?= $item['material'] ?></span></div>
                <div>DESIGNER: <span><?= $item['designer'] ?></span></div>
            </div>
            <div class="priceProductDesc">
                $<?= $item['price'] ?>
            </div>
        </div>

        <form>
            <div class="bottomContentProductDesc">
                <div class="chooseColor">
                    <label for="chooseColor">CHOOSE COLOR</label>
                    <div class="chooseWrap">
                        <i class="fas fa-chevron-down"></i>
                        <div class="chooseColorValue"></div>
                        <select id="chooseColor" name="chooseColor">
                            <option selected value="Red">Red</option>
                            <option value="Blue">Blue</option>
                            <option value="Orange">Orange</option>
                        </select>
                    </div>
                </div>
                <div class="chooseSize">
                    <label for="chooseSize">CHOOSE SIZE</label>
                    <div class="chooseWrap">
                        <i class="fas fa-chevron-down"></i>
                        <select id="chooseSize" name="chooseSize">
                            <option selected value="XXL">XXL</option>
                            <option value="XL">XL</option>
                            <option value="L">L</option>
                        </select>
                    </div>
                </div>
                <div class="quantity">
                    <label for="quantity">QUANTITY</label>
                    <input id="quantity" name="quantity" type="number" value="2">
                </div>
            </div>
            <button>
                <img src="images/cartRed.png" alt="">
                Add to Cart
            </button>
        </form>
    </div>
</div>

<div class="container likeAlsoWrap">
    <h2>YOU MAY LIKE ALSO</h2>
    <div class="row likeAlsoProducts">
        <div class="col-md-3 col-sm-6 productLikeAlso">
            <img src="images/alsoImg1.png" alt="">
            <div class="productLikeAlsoName">
                BLAZE LEGGINGS
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-md-3 col-sm-6 productLikeAlso">
            <img src="images/alsoImg2.png" alt="">
            <div class="productLikeAlsoName">
                ALEXA SWEATER
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-md-3 col-sm-6 productLikeAlso">
            <img src="images/alsoImg3.png" alt="">
            <div class="productLikeAlsoName">
                AGNES TOP
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-md-3 col-sm-6 productLikeAlso">
            <img src="images/alsoImg4.jpg" alt="">
            <div class="productLikeAlsoName">
                SYLVA SWEATER
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
    </div>
</div>

<?php
require ROOT_DIR.'/templates/reviews.php';
require ROOT_DIR.'/templates/footer.php';
?>