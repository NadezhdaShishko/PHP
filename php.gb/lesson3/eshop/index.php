<?php
$logo = 'brand';
$title = 'Brand-Index';
$todayYear = getdate();
$year = $todayYear[year];
$navArrey = ['Home', 'Man', 'Women', 'Kids', 'Accoseriese', 'Featured', 'Hot Deals'];
$footerCompany = ['Home', 'Shop', 'About', 'How It Works', 'Contact'];
$footerInformation = ['Tearms & Condition', 'Privacy Policy', 'How to Buy', 'How to Sell', 'Promotion'];
$footerCategory = ['Men', 'Women', 'Child', 'Apparel', 'Browse All'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <link rel="stylesheet" href="styles/css/style.css">

    <title><?=$title?></title>

</head>

<body>

<header class="header container-fluid">
    <div class="container headerInside">
        <div class="logo">
            BRAN<span>D</span> <h1><?=$logo?></h1>
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
        <img src="images/cart.png" alt="Cart">
        <button class="accountBtn">
            My Account
            <i class="fas fa-caret-down"></i>
        </button>
    </div>
</header>

<nav class="topNav">
    <ul class="nav justify-content-center">

        <?php foreach ($navArrey as $value) :?>
        <li class="nav-item">
            <a class="nav-link" href="#"><?=$value?></a>
        </li>
        <?php endforeach; ?>
        
    </ul>
</nav>

<div class="container-fluid topBannerWrap">
    <div class="container topBannerContent">
        <div class="topBannerSign">
            <div>THE BRAND</div>
            <div>OF LUXERIOUS FASHION</div>
        </div>
    </div>
</div>

<div class="container categoryBannerWrap">
    <div class="categoryBannerContent Men">
        <img src="images/categMen.jpg" alt="categoryBannerMenImg">
        <div class="productBadge">
            <div class="topBadge">
                HOT DEAL
            </div>
            <div class="bottomBadge">
                FOR MEN
            </div>
        </div>
    </div>
    <div class="categoryBannerContent Women">
        <img src="images/categWomen.jpg" alt="categoryBannerWomenImg">
        <div class="productBadge">
            <div class="topBadge">
                30% OFFER
            </div>
            <div class="bottomBadge">
                WOMEN
            </div>
        </div>
    </div>

    <div class="categoryBannerContent Accessories">
        <img src="images/categAccessories.jpg" alt="categoryBannerAccessoriesImg">
        <div class="productBadge">
            <div class="topBadge">
                LUXURIOUS & TRENDY
            </div>
            <div class="bottomBadge">
                ACCESSORIESE
            </div>
        </div>
    </div>
    <div class="categoryBannerContent Kids">
        <img src="images/categKids.jpg" alt="categoryBannerKidsImg">
        <div class="productBadge">
            <div class="topBadge">
                NEW ARRIVALS
            </div>
            <div class="bottomBadge">
                FOR KIDS
            </div>
        </div>
    </div>
</div>

<div class="container productsFeturedWrap">
    <div class="topFetured">Fetured Items</div>
    <div class="bottomFetured">Shop for items based on what we featured in this week</div>
    <div class="row productUnitContent">
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_1.jpg" alt="product_1">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_2.jpg" alt="product_2">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_3.jpg" alt="product_3">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_4.jpg" alt="product_4">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_5.jpg" alt="product_5">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_6.jpg" alt="product_6">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_7.jpg" alt="product_7">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 productUnit">
            <div class="productUnitImgWrap">
                <div class="productUnitBuy">
                    <button>
                        <img src="images/addToCart.png" alt="">
                        Add to Cart
                    </button>
                </div>
                <img src="images/product_8.jpg" alt="product_8">
            </div>
            <div class="productName">
                Mango  People  T-shirt
            </div>
            <div class="productPrice">
                $52.00
            </div>
        </div>
    </div>
    <button class="productBtn">
        Browse All Product
        <i class="fas fa-long-arrow-alt-right"></i>
    </button>
</div>

<div class="container offerForWomen">
    <div class="row offerForWomenWrap">
        <div class="col-lg-8 col-md-12 offerForWomenBanner">
            <div class="offerText">
                <div>
                    30% <span>OFFER</span>
                </div>
                <div>
                    FOR WOMEN
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 offerDetails">
            <section class="offerUnit">
                <h3>Free Delivery</h3>
                Worldwide delivery on all. Authorit tively morph
                next-generation innov tion with extensive models.
            </section>
            <section class="offerUnit">
                <h3>Sales & discounts</h3>
                Worldwide delivery on all. Authorit tively morph
                next-generation innov tion with extensive models.
            </section>
            <section class="offerUnit">
                <h3>Quality assurance</h3>
                Worldwide delivery on all. Authorit tively morph
                next-generation innov tion with extensive models.
            </section>
        </div>
    </div>
</div>

<div class="container-fluid subscribeWrap">
    <div class="container subscribe">
        <div class="row reviews">
            <div class="col-md-6 coll-sm-12 reviewUnit">
                <img src="images/reviewPerson.png" alt="">
                <div class="reviewUnitRight">
                    <blockquote>
                        “Vestibulum quis porttitor dui! Quisque viverra nunc mi,
                        a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”
                    </blockquote>
                    <div class="reviewName">
                        Bin Burhan
                    </div>
                    <div class="reviewFrom">
                        Dhaka, Bd
                    </div>
                    <div class="reviewsSwitch">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 coll-sm-12 subscribeRight">
                <div class="subscribeRightHead">
                    Subscribe
                </div>
                <div class="subscribeRightText">
                    FOR OUR NEWLETTER AND PROMOTION
                </div>
                <form class="subscribeForm" action="">
                    <input placeholder="Enter Your Email" type="text">
                    <button>Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="container">
    <div class="row footerWrap">
        <div class="col-lg-5 col-md-12 footerBrand">
            <div class="logo">
                BRAN<span>D</span>
            </div>
            <div class="footerBrandText1">
                Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate
                multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of
                processes and cross-unit partnerships.
            </div>
            <div class="footerBrandText2">
                Efficiently plagiarize 24/365 action items and focused infomediaries.
                Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.
            </div>
        </div>
        <section class="col-lg-2 col-md-12 footerColumn">
            <h2>COMPANY</h2>
            <nav>

            <?php foreach ($footerCompany as $value): ?>
                <a href=""><?=$value?></a>
            <?php endforeach; ?>
                
            </nav>
        </section>
        <section class="col-lg-2 col-md-12 footerColumn">
            <h2>INFORMATION</h2>
            <nav>

            <?php foreach ($footerInformation as $value): ?>
                <a href=""><?=$value?></a>
            <?php endforeach; ?>
                
            </nav>
        </section>
        <section class="col-lg-2 col-md-12 footerColumn">
            <h2>SHOP CATEGORY</h2>
            <nav>

            <?php foreach ($footerCategory as $value): ?>
                <a href=""><?=$value?></a>
            <?php endforeach; ?>
                
            </nav>
        </section>
    </div>
</footer>
<div class="container-fluid copyrightsWrap">
    <div class="container copyrightsContent">
        <div class="copyrightsLeft">
            &copy; <?=$year?> Brand All Rights Reserved.
        </div>
        <div class="copyrightsRight">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
            <a href=""><i class="fab fa-pinterest-p"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
        
</body>
</html>