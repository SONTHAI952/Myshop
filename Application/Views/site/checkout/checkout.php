<?php view('shared.site.header', [
    'title' => 'Checkout'
]);
require './Config/province.php'; ?>
<style>
    .checkout-banner {
        background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
    }
</style>
<section class="banner checkout-banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">Thanh toán</h2>
                <span>Trang chủ</span> &nbsp;<span>\\</span> &nbsp;<span>Giỏ hàng</span>
            </div>

        </div>
    </div>

    <div class="container-fluid banner-share">
        <div class="row">
            <span>Chia sẻ trang:</span>
            <div class="banner-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

    </div>

</section>

<section class="checkout p-50">
    <div class="container">
        <div class="row">
            <?php if (count($cart->items) > 0) { ?>
                <div class="col-md-7">
                    <?php if (empty($_SESSION['user']) || $user['status'] == 0) : ?>

                        <div class="error-block" style="padding: 0 5% ">

                            <h2>Vui lòng đăng nhập để đặt hàng!</h2>
                            <p>Nếu bạn đã có tài khoản. Ấn vào <a> <button class="login-modal p-0" style="font-family: inherit; width:unset" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">đây</button>
                                </a> để đăng nhập
                            </p>
                            <p>Bạn chưa có tài khoản? Đăng ký ngay <a> <button class="login-modal p-0" style="font-family: inherit; width:unset" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">tại đây</button>
                                </a>
                            </p>
                            <div class="img-container">
                                <img src="./public/uploads/404.png" alt="">
                            </div>


                        </div>
                    <?php else : ?>
                        <div class="bill-form-block">
                            <h2>
                                Thông tin nhận hàng
                            </h2>

                            <form method="POST" action="./?controller=checkout&action=process" name="checkoutForm" onsubmit="return validateCheckoutForm();">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="fname">Họ <span class="asterisk">*</span></label>
                                        <input type="text" value="<?= $_SESSION['user']['fname']  ?>" name="fname" id="co-fname" class="form-control" aria-describedby="helpId" onkeyup="validateName(this, 'First name');">
                                        <small id="co-fname-err"></small>

                                    </div>

                                    <div class="col-md-6">
                                        <label for="lname">Tên <span class="asterisk">*</span></label>
                                        <input type="text" value="<?= $_SESSION['user']['lname']  ?>" name="lname" id="co-lname" class="form-control" aria-describedby="helpId" onkeyup="validateName(this, 'Last name');">
                                        <small id="co-lname-err"></small>


                                    </div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="email">Email  <span class="asterisk">*</span></label>
                                        <input type="text" value="<?= $_SESSION['user']['email']  ?>" name="email" id="co-email" class="form-control" aria-describedby="helpId" onkeyup="validateEmail(this);">
                                        <small id="co-email-err"></small>

                                    </div>

                                    <div class="col-md-6">
                                        <label for="phone">Só điện thoại <span class="asterisk">*</span></label>
                                        <input type="text" value="<?= $_SESSION['user']['phone']  ?>" name="phone" id="co-phone" class="form-control" aria-describedby="helpId" onkeyup="validatePhone(this);">
                                        <small id="co-phone-err"></small>
                                        <div>

                                        </div>

                                    </div>

                                </div>




                                <div class="form-group">
                                    <label for="province">Huyện/Thành phố <span class="asterisk">*</span></label>
                                    <select class="form-control" id="province" name="province">
                                        <?php foreach ($provinces as $province) : ?>
                                            <option value="<?= $province['value'] ?>" <?php $_SESSION['user']['province'] == $province['value'] ? 'selected' : ''
                                                                                        ?>><?= $province['province'] ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="address">Địa chỉ <span class="asterisk">*</span></label>

                                    <input value="<?= $_SESSION['user']['address']  ?>" type="text" name="address" id="co-address" class="form-control" aria-describedby="helpId" onkeyup="validateNotEmpty(this, 'Address');">
                                    <small id="co-address-err"></small>

                                </div>

                                <div class="form-group">
                                    <label for="note">Ghi chú</label>

                                    <textarea class="form-control" name="note" rows="5" placeholder="Notes on your order"></textarea>

                                </div>



                                <h2 style="margin-top: 2.5rem;">Phương thức giao hàng</h2>
                                <div class="form-group">
                                    <label for="delivery">Chọn phương thức giao hàng</label>

                                    <select class="form-control" id="delivery" name="delivery">
                                        <option value="Giaohangtietkiem">Giaohangtietkiem</option>
                                    </select>

                                </div>

                                <h2 style="margin-top: 2.5rem;">Phương thức thanh toán</h2>
                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label for="payment">Chọn phương thức thanh toán</label>

                                    <select class="form-control" id="payment" name="payment">
                                        <option value="Cash on delivery">Thanh toán khi nhận hàng</option>
                                    </select>

                                </div>

                                <div class="form-group" style="border-top: 1px solid lightgray; padding-top: 1.5rem;">
                                    <button type="submit" class="btn-root border-root place-order-btn">Đặt hàng</button>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>


                <div class="col-md-5">
                    <h2>Đơn hàng của bạn</h2>
                    <table class="table checkout-table">

                        <tbody>
                            <?php foreach ($cart->items as $item) : ?>
                                <tr class="checkout-pro">
                                    <td class="checkout-pro-title">
                                        <img src="./public/uploads/<?= $item['image'] ?>" width="100">
                                        <div class="checkout-pro-info">

                                            <h6><?= $item['name'] ?></h6>

                                            <p><?= number_format($item['price_sum']) ?> &#273;</p>
                                        </div>

                                    </td>

                                    <td class="checkout-pro-quantity text-right">
                                        X<?= $item['quantity'] ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                            <tr class="order-subtotal">

                                <td>
                                    <div class="checkout-pro-info p-0">
                                        <p>Tổng tiền trước phí (<?= $cart->total_quantity ?> sản phẩm):</p>
                                        <!-- <p>Tax:</p> -->
                                        <!-- <?php if ($_SESSION['coupon'] != 0) : ?>
                                            <p>Discount: </p>
                                        <?php endif; ?> -->
                                        <p>Phí giao hàng:</p>

                                    </div>

                                </td>
                                <td>
                                    <div class="checkout-fee text-right">
                                        <p>
                                            <?= number_format($cart->total_price) ?> &#273;
                                        </p>
                                        <!-- <p>
                                        $0.00
                                    </p> -->
                                        <!-- <?php if ($_SESSION['coupon'] != 0) : ?>
                                            <p>
                                                - $<?= number_format(($cart->total_price) * $_SESSION["coupon"]) ?>
                                            </p>
                                        <?php endif; ?> -->
                                        <p>
                                            10.000 đ
                                        </p>

                                    </div>
                                </td>

                            </tr>
                        </tbody>

                        <tr class="order-total">
                            <td>
                                <h2>Tổng tiền</h2>
                            </td>

                            <?php if ($_SESSION['coupon'] != 0) : ?>
                                <td>
                                    <h2 class="price">$<?= number_format(($cart->total_price) * (1 -  $_SESSION["coupon"]) + 10000) ?> &#273;</h2>
                                </td>
                            <?php endif; ?>
                            <?php if ($_SESSION['coupon'] == 0) : ?>
                                <td>
                                    <h2 class="price"><?= number_format(($cart->total_price) + 10000) ?> &#273;</h2>
                                </td>
                            <?php endif; ?>
                        </tr>
                        <tfoot>

                            <tr>
                                <td colspan="2">
                                    Nếu có bất kì thắc mắc nào
                                    <p> <i class="discount fas fa-phone-alt mr-2" style="font-size: 13px;"></i>(085) 988
                                        2251
                                        <i class="discount far fa-envelope ml-4 mr-2"></i>myshop@support.com
                                    </p>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>

            <?php } else { ?>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="error-block cart-empty">
                        <div class="img-container" style="margin-bottom: 40px">
                            <img src="./public/site/img/empty-cart.png" alt="">
                        </div>
                        <p><a href="./?controller=product&action=allProducts" class="btn-root ptc-btn border-root">Tiếp tục mua sắm</a>
                        </p>


                    </div>

                </div>



            <?php } ?>
        </div>
    </div>
</section>


<?php view('shared.site.footer'); ?>