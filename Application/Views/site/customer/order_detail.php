<?php view('shared.site.header', [
    'title' => 'Order history'
]); ?>

<style>
    .cart-banner {
        background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
    }
</style>

<section class="banner order-success-banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">Đơn hàng #<?= $order['id'] ?> chi tiết</h2>

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

            <div class="col-md-7">

                <div class="bill-form-block">
                    <h2>
                        Chi tiết đơn hàng
                    </h2>


                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="fname">Họ <span class="asterisk">*</span></label>
                            <input value="<?= $order['fname'] ?>" type="text" name="fname" id="fname" class="form-control" aria-describedby="helpId" disabled>

                        </div>

                        <div class="col-md-6">
                            <label for="lname">Tên <span class="asterisk">*</span></label>
                            <input value="<?= $order['lname'] ?>" type="text" name="lname" id="lname" class="form-control" aria-describedby="helpId" disabled>



                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">Email  <span class="asterisk">*</span></label>
                            <input value="<?= $order['email'] ?>" type="text" name="email" id="email" class="form-control" aria-describedby="helpId" disabled>

                        </div>

                        <div class="col-md-6">
                            <label for="phone">Số điện thoại <span class="asterisk">*</span></label>
                            <input value="<?= $order['phone'] ?>" type="text" name="phone" id="phone" class="form-control" aria-describedby="helpId" disabled>

                            <div>

                            </div>

                        </div>

                    </div>




                    <div class="form-group">
                        <label for="province">Huyện/Thành phố <span class="asterisk">*</span></label>
                        <select class="form-control" id="province" name="province" disabled>

                            <option value="<?= $order['province'] ?>"><?= $order['province'] ?></option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ <span class="asterisk">*</span></label>

                        <input value="<?= $order['address'] ?>" type="text" name="address" id="address" class="form-control" aria-describedby="helpId" disabled>

                    </div>

                    <div class="form-group">
                        <label for="note">Chú thích</label>

                        <textarea class="form-control" name="note" rows="5" placeholder="Notes on your order" disabled><?= $order['note'] ?></textarea>

                    </div>



                    <h2 style="margin-top: 2.5rem;">Phương thức giao hàng</h2>
                    <div class="form-group">
                        <label for="delivery">Chọn phương thức giao hàng</label>

                        <select class="form-control" id="delivery" name="delivery" disabled>
                            <option value="<?= $order['delivery'] ?>"><?= $order['delivery'] ?></option>
                        </select>

                    </div>

                    <h2 style="margin-top: 2.5rem;">Phương thức thanh toán</h2>
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="payment">Chọn phương thức thanh toán</label>

                        <select class="form-control" id="payment" name="payment" disabled>
                            <option value="<?= $order['payment'] ?>"><?= $order['payment'] ?> </option>
                        </select>

                    </div>



                </div>

            </div>


            <div class="col-md-5">
                <h2>Đơn của bạn</h2>
                <table class="table checkout-table">

                    <tbody>
                        <?php foreach ($products_in_order as $item) : ?>
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
                                    <p>Tổng tiền trước phí (<?= $order['quantity'] ?> sản phẩm):</p>
                                    <!-- <?php if ($order['coupon'] != 0) : ?>
                                        <p>Discount: </p>
                                    <?php endif; ?> -->
                                    <!-- <p>Tax:</p> -->
                                    <p>Phí giao hàng:</p>
                                </div>

                            </td>
                            <td>
                                <div class="checkout-fee text-right">
                                    <p>
                                        <?= number_format($order['total']) ?> &#273;
                                    </p>
                                    <!-- <?php if ($order['coupon'] != 0) : ?>
                                        <p>
                                            - $<?= number_format($order['total'] * ($order['coupon'])) ?>
                                        </p>
                                    <?php endif; ?> -->

                                    <p>
                                        10000 đ
                                    </p>
                                </div>
                            </td>

                        </tr>
                    </tbody>

                    <tr class="order-total">
                        <td>
                            <h2>Tổng tiền</h2>
                        </td>

                        <td>
                            <h2 class="price"><?= number_format($order['total'] * (1 - $order['coupon']) + 10000) ?> &#273;</h2>
                        </td>
                    </tr>

                    <form action="./?controller=customer&action=cancelOrder&id=<?= $order['id'] ?>" method="POST" role="form">


                        <tr>
                            <td colspan="2" style="padding-top: 7px">

                                <div class="form-group">
                                    <label for="status">Trạng thái</label>

                                    <select class="form-control" id="status" name="status" disabled>
                                        <option value="<?= $order['status'] ?>">
                                            <?php
                                            if ($order['status'] == 0) {
                                                echo 'Đã giao hàng';
                                            } else if ($order['status'] == 1) {
                                                echo 'Chờ giao hàng';
                                            } else if ($order['status'] == 2) {
                                                echo 'Đang giao hàng';
                                            } else if ($order['status'] == 3) {
                                                echo 'Đã hủy';
                                            }
                                            ?>
                                        </option>
                                    </select>
                                </div>

                            </td>
                        </tr>
                        <?php if ($order['status'] == 1) : ?>
                            <tr>

                                <td colspan="2" style="border: none; padding-top: 20px">
                                    <div class="form-group">
                                        <input type="submit" class="btn-root border-root place-order-btn btn-cancel" value="Cancel order">
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </form>

                    <tfoot>

                        <tr>
                            <td colspan="2">
                                Nếu có bất cứ thắc mắc nào, liên hệ
                                <p> <i class="discount fas fa-phone-alt mr-2" style="font-size: 13px;"></i>(085) 988
                                    2251
                                    <i class="discount far fa-envelope ml-4 mr-2"></i>myshop@support.com
                                </p>
                            </td>
                        </tr>
                    </tfoot>
                </table>

            </div>


        </div>
    </div>
</section>
<?php view('shared.site.footer'); ?>