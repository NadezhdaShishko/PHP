<?php
require './../engine/init.php';
$title = 'Brand-Product';
require ROOT_DIR.'/templates/header.php';
require ROOT_DIR.'/templates/topNav.php';
require ROOT_DIR.'/templates/navNewArrivals.php';
?>

<div class="container contentProducts">
    <div class="row">
        <div class="col-md-3 sideBarProduct">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                CATEGORY
                                <!--<span class="caret" aria-hidden="true"><i class="fas fa-caret-down"></i></span>-->
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <nav class="nav flex-column">
                                <a class="nav-link" href="#">Accessories</a>
                                <a class="nav-link" href="#">Bags</a>
                                <a class="nav-link" href="#">Denim</a>
                                <a class="nav-link" href="#">Hoodies & Sweatshirts</a>
                                <a class="nav-link" href="#">Jackets & Coats</a>
                                <a class="nav-link" href="#">Pants</a>
                                <a class="nav-link" href="#">Polo</a>
                                <a class="nav-link" href="#">Shirts</a>
                                <a class="nav-link" href="#">Shoes</a>
                                <a class="nav-link" href="#">Shorts</a>
                                <a class="nav-link" href="#">Sweaters & Knits</a>
                                <a class="nav-link" href="#">T-Shirts</a>
                                <a class="nav-link" href="#">Tanks</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                BRAND
                                <!--<span class="caret" aria-hidden="true"><i class="fas fa-caret-down"></i></span>-->
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <nav class="nav flex-column">
                                <a class="nav-link" href="#">Accessories</a>
                                <a class="nav-link" href="#">Bags</a>
                                <a class="nav-link" href="#">Denim</a>
                                <a class="nav-link" href="#">Hoodies & Sweatshirts</a>
                                <a class="nav-link" href="#">Jackets & Coats</a>
                                <a class="nav-link" href="#">Pants</a>
                                <a class="nav-link" href="#">Polo</a>
                                <a class="nav-link" href="#">Shirts</a>
                                <a class="nav-link" href="#">Shoes</a>
                                <a class="nav-link" href="#">Shorts</a>
                                <a class="nav-link" href="#">Sweaters & Knits</a>
                                <a class="nav-link" href="#">T-Shirts</a>
                                <a class="nav-link" href="#">Tanks</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                DESIGNER
                                <!--<span class="caret" aria-hidden="true"><i class="fas fa-caret-down"></i></span>-->
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse"
                         aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <nav class="nav flex-column">
                                <a class="nav-link" href="#">Accessories</a>
                                <a class="nav-link" href="#">Bags</a>
                                <a class="nav-link" href="#">Denim</a>
                                <a class="nav-link" href="#">Hoodies & Sweatshirts</a>
                                <a class="nav-link" href="#">Jackets & Coats</a>
                                <a class="nav-link" href="#">Pants</a>
                                <a class="nav-link" href="#">Polo</a>
                                <a class="nav-link" href="#">Shirts</a>
                                <a class="nav-link" href="#">Shoes</a>
                                <a class="nav-link" href="#">Shorts</a>
                                <a class="nav-link" href="#">Sweaters & Knits</a>
                                <a class="nav-link" href="#">T-Shirts</a>
                                <a class="nav-link" href="#">Tanks</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 topFilter">
            <div class="row topFilterTop">
                <section class="col-md-4 trendingNow">
                    <h5>TRENDING NOW</h5>
                    <div class="trendingNowList">
                        <ul>
                            <li><a href="#"> Bohemian</a></li>
                            <li>|</li>
                            <li><a href="#"> Floral</a></li>
                            <li>|</li>
                            <li><a href="#"> Lace</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"> Floral</a></li>
                            <li>|</li>
                            <li><a href="#"> Lace</a></li>
                            <li>|</li>
                            <li><a href="#"> Bohemian</a></li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-4 sizeProduct">
                    <h5>SIZE</h5>
                    <div class="sizeProductCheckbox">
                        <form action="#">
                            <div>
                                <input id="xxs" type="checkbox" name="size" value="XXS">
                                <span class="productsCheckbox"></span>
                                <label for="xxs">XXS</label>
                            </div>
                            <div>
                                <input id="xs" type="checkbox" name="size" value="XS">
                                <span class="productsCheckbox"></span>
                                <label for="xs">XS</label>
                            </div>
                            <div>
                                <input id="s" type="checkbox" name="size" value="S">
                                <span class="productsCheckbox"></span>
                                <label for="s">S</label>
                            </div>
                            <div>
                                <input id="m" type="checkbox" name="size" value="M">
                                <span class="productsCheckbox"></span>
                                <label for="m">M</label>
                            </div>
                            <div>
                                <input id="l" type="checkbox" name="size" value="L">
                                <span class="productsCheckbox"></span>
                                <label for="l">L</label>
                            </div>
                            <div>
                                <input id="xl" type="checkbox" name="size" value="XL">
                                <span class="productsCheckbox"></span>
                                <label for="xl">XL</label>
                            </div>
                            <div>
                                <input id="xxl" type="checkbox" name="size" value="XXL">
                                <span class="productsCheckbox"></span>
                                <label for="xxl">XXL</label>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="col-md-4">
                    <h5>PRICE</h5>
                    <div class="sizePriceSlider">
                        <img src="images/priceRange.svg" alt="">
                        <div class="priceRangeValues">
                            <span>$52</span>
                            <span>$400</span>
                        </div>
                    </div>
                </section>
            </div>
            <div class="topFilterBottom">
                <div class="sorterUnit">
                    <label for="sortBy">Sort By</label>
                    <select name="" id="sortBy">
                        <option value="">Name</option>
                        <option value="">Price</option>
                    </select>
                </div>

                <div class="sorterUnit">
                    <label for="show">Show</label>
                    <select name="" id="show">
                        <option value="">09</option>
                        <option value="">08</option>
                        <option value="">07</option>
                    </select>
                </div>
            </div>
            <div class="row productImageWrap">
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product1.jpg" alt="product1">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product2.jpg" alt="product2">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product3.jpg" alt="product3">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product4.jpg" alt="product4">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product5.jpg" alt="product5">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product6.jpg" alt="product6">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product7.jpg" alt="product7">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product8.jpg" alt="product8">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 productUnit">
                    <div class="productUnitImgWrap">
                        <div class="productUnitBuy">
                            <button>
                                <img src="images/addToCart.png" alt="">
                                Add to Cart
                            </button>
                        </div>
                        <img src="images/product9.jpg" alt="product9">
                    </div>
                    <div class="productName">
                        Mango  People  T-shirt
                    </div>
                    <div class="productPrice">
                        $52.00
                    </div>
                </div>
            </div>
            <div class="row paginationProduct">
                <div class="col-md-4 col-sm-6 paginationProductWrap">
                    <nav class="productsPagination">
                        <a href="">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="">5</a>
                        <span>
                            <a href="">6</a>
                            .....
                            <a href="">20</a>
                        </span>
                        <a href="">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
                <div class="col-md-8 col-sm-6 paginationProductBtn">
                    <button type="button" class="btn btn-outline-danger">View All</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid featureBoxWrap">
    <div class="container">
        <div class="row featureBoxContent">
            <section class="col-md-4 featureBox">
                <img src="images/offerDetails1.png" alt="">
                <h3>Free Delivery</h3>
                Worldwide delivery on all. Authorit tively morph<br>
                next-generation innov tion with extensive models.
            </section>
            <section class="col-md-4 featureBox">
                <img src="images/offerDetails2.png" alt="">
                <h3>Sales & discounts</h3>
                Worldwide delivery on all. Authorit tively morph<br>
                next-generation innov tion with extensive models.
            </section>
            <section class="col-md-4 featureBox">
                <img src="images/offerDetails3.png" alt="">
                <h3>Quality assurance</h3>
                Worldwide delivery on all. Authorit tively morph<br>
                next-generation innov tion with extensive models.
            </section>
        </div>
    </div>
</div>

<?php
require ROOT_DIR.'/templates/reviews.php';
require ROOT_DIR.'/templates/footer.php';
?>