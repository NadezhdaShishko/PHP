<?php
require './../engine/init.php';
$title = 'Brand-Checkout';
require ROOT_DIR.'/templates/header.php';
require ROOT_DIR.'/templates/topNav.php';
require ROOT_DIR.'/templates/navNewArrivals.php';
?>

<div class="container checkoutWrap">
    <div class="checkoutContainer">
        <details open class="checkoutShippingAddress">
            <summary class="checkoutShippingAddressName">
                <span>01. SHIPPING ADDRESS</span>
            </summary>
            <div class="checkoutShippingAddressWrap">
                <div class="checkoutShippingAddressLeft">
                    <div class="checkoutRegister">
                        <h3>Check as a guest or register</h3>
                        <p>Register with us for future convenience</p>
                    </div>
                    <form class="checkoutRegister">
                        <div class="checkoutRegisterRadio">
                            <input id="reg1" type="radio" name="register" value="guest">
                            <label for="reg1"> checkout as guest</label>
                        </div>
                        <div class="checkoutRegisterRadio">
                            <input id="reg2" checked type="radio" name="register" value="register">
                            <label for="reg2"> register</label>
                        </div>
                    </form>
                    <div class="checkoutRegister">
                        <h3>register and save time!</h3>
                        <p>Register with us for future convenience</p>
                    </div>
                    <div class="checkoutRegister">
                        <p><i class="fas fa-angle-double-right"></i> Fast and easy checkout</p>
                        <p><i class="fas fa-angle-double-right"></i> Easy access to your order history and status</p>
                    </div>
                    <div class="checkoutRegisterButton">
                        <button>CONTINUE</button>
                    </div>

                </div>
                <div class="checkoutShippingAddressRight">
                    <div class="checkoutRegister">
                        <h3>Already registed?</h3>
                        <p>Please log in below</p>
                    </div>
                    <div class="checkoutRegisterLabel">
                        <label>EMAIL ADDRESS <em>*</em></label>
                        <p><input type="email"></p>
                        <label>PASSWORD <em>*</em></label>
                        <p><input type="password"></p>
                    </div>
                    <div class="checkoutRegisterFileds">
                        <em>*</em> Required Fileds
                    </div>
                    <div class="checkoutRegisterButton">
                        <button>LOG IN</button> <span>Forgot Password?</span>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary class="checkoutBillingInformation">
                <span>02. BILLING INFORMATION</span>
            </summary>
            <div class="checkOutData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores nisi ad neque asperiores consectetur in pariatur ipsum accusamus dignissimos. Voluptas debitis ad culpa quasi corrupti quidem maiores, veritatis ipsum?
            </div>
        </details>
        <details>
            <summary class="checkoutShippingInformation">
                <span>03. SHIPPING INFORMATION</span>
            </summary>
            <div class="checkOutData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores nisi ad neque asperiores consectetur in pariatur ipsum accusamus dignissimos. Voluptas debitis ad culpa quasi corrupti quidem maiores, veritatis ipsum?
            </div>
        </details>
        <details>
            <summary class="checkoutShippingMethod">
                <span>04. SHIPPING METHOD</span>
            </summary>
            <div class="checkOutData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores nisi ad neque asperiores consectetur in pariatur ipsum accusamus dignissimos. Voluptas debitis ad culpa quasi corrupti quidem maiores, veritatis ipsum?
            </div>
        </details>
        <details>
            <summary class="checkoutPaymentMethod">
                <span>05. PAYMENT METHOD</span>
            </summary>
            <div class="checkOutData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores nisi ad neque asperiores consectetur in pariatur ipsum accusamus dignissimos. Voluptas debitis ad culpa quasi corrupti quidem maiores, veritatis ipsum?
            </div>
        </details>
        <details>
            <summary class="checkoutOrderReview">
                <span>06. ORDER REVIEW</span>
            </summary>
            <div class="checkOutData">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus maiores nisi ad neque asperiores consectetur in pariatur ipsum accusamus dignissimos. Voluptas debitis ad culpa quasi corrupti quidem maiores, veritatis ipsum?
            </div>
        </details>

        <div></div>
    </div>
    </div>

<?php
require ROOT_DIR.'/templates/reviews.php';
require ROOT_DIR.'/templates/footer.php';
?>