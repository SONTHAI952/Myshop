<main>
    <!-- Start of main banner -->
    <section class="banner container-fluid p-0">
        <div class="banner-frame row m-0 p-0">
            <div class="bannercontainer">
                <img src="./public/uploads/<?= $banners[0]['image'] ?>" alt="" class="col-md-12 m-0 p-0 bread-img">
                <!-- <div class="overlay"></div>
                <div class="bannertitle">
                    <img src="./public/site/img/home/wheat1.png" alt="" class="wheat-img">
                    <p id="motto">FRESHLY BAKED BREAD</p>
                    <h6>MADE WITH THE LOVE OF THE BEST BAKERS</h6>
                </div> -->
            </div>
        </div>
    </section>

    <section class="quickshopping">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Những sản phẩm chất lượng cao</p>
                <p class="block-motto"><span>MUA NGAY</span></p>
            </div>

            <div class="container" style="margin-top: 40px;">
                <div class="content-block">
                    <ul id='quick-shop-list'>
                        <li>

                            <div class="bread-desc">
                                <h3>Đầm</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
                                </p>
                                <a href="./?controller=product&action=allProducts"><button><span>SHOP NOW</span><img src="./public/site/img/home/logo/right.png" alt=""></button></a>
                                <div class="basket">
                                    <img src="./public/site/img/home/images/dresses.png" alt="">
                                </div>
                            </div>

                        </li>

                        <li>

                            <div class="bread-desc">
                                <h3>Áo</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                <a href="./?controller=product&action=allProducts"><button><span>SHOP NOW</span><img src="./public/site/img/home/logo/right.png" alt=""></button></a>
                                <div class="basket">
                                    <img src="./public/site/img/home/images/shirts.png" alt="">
                                </div>
                            </div>

                        </li>

                        <li>

                            <div class="bread-desc">
                                <h3>Phụ kiện</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                <a href="./?controller=product&action=allProducts"><button><span>SHOP NOW</span><img src="./public/site/img/home/logo/right.png" alt=""></button></a>
                                <div class="basket">
                                    <img src="./public/site/img/home/images/bags.png" alt="">
                                </div>
                            </div>
                            <!-- <div class="trapezoid">
                                    <div class="basket">
                                        <img src="./public/site/img/home/images/basket1.png" alt="">
                                    </div>
                                </div> -->

                        </li>
                    </ul>
                </div>


            </div>
        </div>


    </section>
    <!-- Start of why choose us -->
    <section class="why-choose-us p-50">
        <div class="container-fluid section-main">
            <div class="title-block">
                <p class="block-title">Vì sao lại chọn MyShop</p>
                <p class="block-motto"><span>Chất lượng cao</span></p>
            </div>

            <div class="container content-block">
                <ul id="why-list">
                    <li>
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/payment.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5>Thanh toán an toàn</h5>
                                <p>Bảo mật cho bạn</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/organic.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5>100% sản phẩm đạt chuẩn</h5>
                                <p>An tâm về chất lượng</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/24-hours-support.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5>Hỗ trợ khách hàng</h5>
                                <p>Phản hồi 24/7</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/free-delivery.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5>Miễn phí giao hàng</h5>
                                <p>Mua nhìu giảm nhìu</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of why choose us -->

    <!-- Start of promotion -->
    <section class="promotion">
        <div class="promotion-block container-fluid content-block">
            <ul>
                <li class="offer-image">
                    <div class="imgcontainer">
                        <img src="./public/uploads/<?= $offer_pro['image'] ?>" alt="">
                    </div>
                </li>
                <li class="offer-info">
                    <div>
                        <p class="block-title">GIÁ HỜI TUẦN NÀY</p>
                        <p class="offer-deal">
                            SẢN PHẨM NÀY ĐANG GIẢM GIÁ <span style="font-weight: bold"><?= $offer_pro['percent'] ?></span>% HÃY NHANH TAY MUA NÀO 
                        </p>

                        <h3><?= $offer_pro['name'] ?></h3>
                        <h5 class="offer-price"><span class="strikeout"><?= number_format($offer_pro['price']) ?> &#273;</span> chỉ còn 
                            <?= number_format($offer_pro['sale_price']) ?> &#273;</h5> 

                        <p class="p-lorem">Sản phẩm dành cho phái nữ. </p>

                        <!-- <div class="countdown" data-date="2021-12-28" data-time="12:00"></div> -->

                        <a class="offer-btn btn-root ptc-btn border-root" style="margin-top: 15px; position: absolute" href="./?controller=product&action=productDetail&id=<?= $offer_pro['id'] ?>">
                            MUA NGAY
                        </a>

                    </div>





                </li>

            </ul>

        </div>
    </section>
    <!-- End of promotion -->

    <!-- Start of latest products -->
    <section class="latest-products p-50">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Những sản phẩm mới </p>
                <p class="block-motto"><span>OUR BEST CAKES</span></p>
            </div>

            <div class="container">

                <ul class="pro-category">
                    <?php foreach ($categories as $cat) : ?>
                        <li><a href="./?controller=product&action=allProducts&id=<?= $cat['id'] ?>">
                                <h5><?= $cat['name'] ?></h5>
                            </a></li>

                        <p>/</p>
                    <?php endforeach; ?>

                </ul>

                <div class="content-block">
                    <ul id='pro-list'>
                        <?php foreach ($latest_products8 as $product) : ?>
                            <li>
                                <a href="./?controller=product&action=productDetail&id=<?= $product['id'] ?>">
                                    <div class="pro-block">
                                        <div class="pro-img">
                                            <?php
                                            $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                            ?>
                                            <img src="./public/uploads/<?= $productImage; ?>" alt="<?= $product['name']; ?>">
                                        </div>
                                        <div class="pro-info">
                                            <h5><?= $product['name'] ?? '' ?></h5>
                                            <h5><?= number_format($product['sale_price'] > 0 ? $product['sale_price'] : $product['price']) ?> &#273;
                                            </h5>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End of latest products -->


    <section class="cookie-banner">

        <img src="./public/uploads/<?= $banners[1]['image'] ?>" alt="">

    </section>

    <!-- Start of product for you -->
    <section class="product-for-you p-50">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Dành cho bạn</p>
                <p class="block-motto"><span>SẢN PHẨM MỚI</span></p>
            </div>

            <div class="container" style="margin-top: 40px;">

                <div class="content-block">
                    <div id="add-product-to-cart-ajax" style="margin: 0 auto 20px auto; width: 90%"></div>
                    <ul id='new-pro-list'>
                        <!-- <input type="text" id="success-message"> -->
                        <?php foreach ($latest_products4 as $product) : ?>
                            <li>

                                <div class="new-pro-block">
                                    <div class="new-pro-img">
                                        <?php
                                        $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                        ?>
                                        <img src="./public/uploads/<?= $productImage; ?>" alt="<?= $product['name']; ?>">
                                    </div>
                                    <div class="new-pro-info">
                                        <h5> <?= $product['name'] ?? '' ?> </h5>
                                        <p><?= $product['description'] ?> </p>
                                        <h5><?= number_format($product['sale_price'] > 0 ? $product['sale_price'] : $product['price']) ?> &#273;
                                        </h5>
                                    </div>
                                    <a id="add-to-cart-btn<?= $product['id'] ?>" class="swalDefaultSuccess " onclick="onAddToCartAjax(<?= $product['id'] ?>)">
                                        <button><i class="fas fa-shopping-basket" style="font-size:13px"></i><span> THÊM VÀO GIỎ</span></button>
                                    </a>

                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End of profuct for you -->

    <!-- Start of testimonial -->
    <section class="testimonial">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Nhận xét của khách hàng</p>
                <p class="block-motto"><span>TESTIMONIALS</span></p>
            </div>
            <div class="container">
                <div class="carousel-inner" id="testimonial-list" role="listbox">
                    <div class="mySlides fade testimonial-item">
                        <div class="testimonial-block">

                            <div class="customer-info">
                                <img src="./public/site/img/home/customer/testimonial.png">
                                <p> Một trong các shop quân áo online đẹp không thể quên cái tên thời trang Daisy. 
                                    Hiện tại shop đang có khoảng hơn 1 triệu lượt thích, lượng tương tác online rất tốt. 
                                    Các mặt hàng rất đa dạng có đầy đủ túi xách, áo, quần, giầy, mũ đa dạng phong cách từ thanh lịch,
                                     tinh tế dịu dàng tới cá tính cho nhiều đối tượng khách hàng lựa chọn.
                                    <br>
                                </p>
                                <span id="star-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <h5> Dan Gheesling </h5>
                                <span id="job"> Food blogger </span>
                            </div>
                            <div class="customer-img">
                                <img src=" ./public/site/img/home/customer/comment_1.png ">
                            </div>
                        </div>
                    </div>

                    <div class="mySlides fade testimonial-item">
                        <div class="testimonial-block">

                            <div class="customer-info">
                                <img src="./public/site/img/home/customer/testimonial.png">
                                <p> Nếu bạn đang tìm một cửa hàng quần áo online nổi tiếng theo phong cách trẻ trung, 
                                    nữ tính, đa dạng phong cách và thường xuyên update các xu hướng mới thì MyShop sẽ là sự lựa chọn tuyệt vời. 
                                    <br>
                                </p>
                                <span id="star-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <h5> Ian Terry </h5>
                                <span id="job"> Pastry chef </span>
                            </div>
                            <div class="customer-img">
                                <img src=" ./public/site/img/home/customer/comment_2.png ">
                            </div>
                        </div>
                    </div>

                    <div class="mySlides fade testimonial-item">
                        <div class="testimonial-block">

                            <div class="customer-info">
                                <img src="./public/site/img/home/customer/testimonial.png">
                                <p> Nói chung là sản phẩm đẹp, shop 10 điểm.
                                    <br>
                                </p>
                                <span id="star-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <h5> Kaysar Ridha </h5>
                                <span id="job"> Model </span>
                            </div>
                            <div class="customer-img">
                                <img src=" ./public/site/img/home/customer/comment_3.png ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>
    </section>
    <!-- End of testimonial -->

    <section class="bottom-banner">
        <img src="./public/site/img/about/logo-banner.png" alt="">
    </section>
</main>