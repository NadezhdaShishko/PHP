<?php
require './../engine/init.php';
$title = 'Brand-Shopping Cart';
require ROOT_DIR.'/templates/header.php';
require ROOT_DIR.'/templates/topNav.php';
require ROOT_DIR.'/templates/navNewArrivals.php';
?>

<div class="container shoppingCartContainer">
    <div class="shoppingCartWrap">
        <div class="shoppingHeadProductWrap">
            <div class="shoppingCartHead">PRODUCT DETAILS</div>
            <div class="shoppingCartHead"></div>
        </div>
        <div class="shoppingHeadPriceWrap">
            <div class="shoppingCartHead">UNITE PRICE</div>
            <div class="shoppingCartHead">QUANTITY</div>
            <div class="shoppingCartHead">SHIPPING</div>
            <div class="shoppingCartHead">SUBTOTAL</div>
            <div class="shoppingCartHead">ACTION</div>
        </div>

        <div class="shoppingDescProductWrap1">
            <img src="images/productImage1.jpg" alt="">
            <div class="productCart">
                <div class="productCartName">
                    Mango  People  T-shirt
                </div>
                <div class="productCartDetails">
                    <div class="productCartDetailsTop">
                        Color: <span>Red</span>
                    </div>
                    <div class="productCartDetailsBottom">
                        Size: <span>XLL</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="shoppingDescPriceWrap1">
            <div class="productCartPrice">$150</div>
            <div class="productCartQuantity">
                <input type="number" placeholder="2">
            </div>
            <div class="productCartShipping">FREE</div>
            <div class="productCartSubtotal">$300</div>
            <div class="productCartAction">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>

        <div class="shoppingDescProductWrap2">
            <img src="images/productImage2.jpg" alt="">
            <div class="productCart">
                <div class="productCartName">
                    Mango  People  T-shirt
                </div>
                <div class="productCartDetails">
                    <div class="productCartDetailsTop">
                        Color: <span>Red</span>
                    </div>
                    <div class="productCartDetailsBottom">
                        Size: <span>XLL</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="shoppingDescPriceWrap2">
            <div class="productCartPrice">$150</div>
            <div class="productCartQuantity">
                <input type="number" placeholder="2">
            </div>
            <div class="productCartShipping">FREE</div>
            <div class="productCartSubtotal">$300</div>
            <div class="productCartAction">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>

        <div class="shoppingDescProductWrap3">
            <img src="images/productImage3.jpg" alt="">
            <div class="productCart">
                <div class="productCartName">
                    Mango  People  T-shirt
                </div>
                <div class="productCartDetails">
                    <div class="productCartDetailsTop">
                        Color: <span>Red</span>
                    </div>
                    <div class="productCartDetailsBottom">
                        Size: <span>XLL</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="shoppingDescPriceWrap3">
            <div class="productCartPrice">$150</div>
            <div class="productCartQuantity">
                <input type="number" placeholder="2">
            </div>
            <div class="productCartShipping">FREE</div>
            <div class="productCartSubtotal">$300</div>
            <div class="productCartAction">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>

    <div class="row shoppingCartBtnWrap">
        <div class="col-sm-6 col-xs-12 productCartBtnLeft">
            <button class="cartBtnLeft">
                CLEAR SHOPPING CART
            </button>
        </div>
        <div class="col-sm-6 col-xs-12 productCartBtnRight">
            <button class="cartBtnRight">
                CONTINUE SHOPPING
            </button>
        </div>
    </div>
</div>

<div class="container boxCheckoutWrap">
    <div class="row boxCheckoutContainer">
        <section class="col-md-4 boxShippingAdress">
            <form action="#" method="post">
                <h2 class="boxCheckoutName">
                    Shipping Adress
                </h2>
                <select required>
                    <option selected value="Bangladesh">Bangladesh</option>
                    <option value="Russia">Russia</option>
                    <option value="France">France</option>
                </select>
                <input required type="text" placeholder="State">
                <input required type="text" placeholder="Postcode/Zip">
                <button>GET A QUOTE</button>
            </form>
        </section>
        <section class="col-md-4 boxCouponDiscount">
            <form>
                <h2 class="boxCheckoutName">
                    Coupon Discount
                </h2>
                <label for="state">Enter your coupon code if you have one</label>
                <input id="state" type="text" placeholder="State">
                <button>APPLY COUPON</button>
            </form>
        </section>
        <div class="col-md-4 boxProceedToCheckout">
            <div class="boxProceedToCheckoutTop">
                <div class="boxCheckoutSubTotal">
                    <div class="boxCheckoutSubTotalLeft">
                        SUB TOTAL
                    </div>
                    <div class="boxCheckoutSubTotalRight">
                        $900
                    </div>
                </div>
                <div class="boxCheckoutGrandTotal">
                    <div class="boxCheckoutGrandTotalLeft">
                        GRAND TOTAL
                    </div>
                    <div class="boxCheckoutGrandTotalRight">
                        &900
                    </div>
                </div>
            </div>
            <div class="checkoutDivider"></div>
            <div class="boxProceedToCheckoutBottom">
                <button>PROCEED TO CHECKOUT</button>
            </div>
        </div>
    </div>
</div>

<?php
require ROOT_DIR.'/templates/reviews.php';
require ROOT_DIR.'/templates/footer.php';
?>