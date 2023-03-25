<?php view('shared.site.header', [
    'title' => 'About'
]); ?>
<style>
    .banner {
        background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
    }
</style>
<!-- Start of banner -->
<section class="banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">Về chúng tôi</h2>
                <span>Trang chủ</span> &nbsp;<span>\\</span> &nbsp;<span>Về chúng tôi</span>
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
<!-- End of banner -->


<!-- Start of history -->
<section class="history">
    <div class="container-fluid content-block">

        <ul>
            <li>
                <div class="cupcake-img">
                    <img src="./public/site/img/about/about-us.png" alt="">
                </div>
            </li>
            <li>
                <div class="intro">
                    <div class="content-title-block">
                        <h2 class="block-title">Cảm hứng từ sự mộc mạc</h2>
                        <p class="block-motto"><span>LỊCH SỬ THƯƠNG HIỆU</span></p>
                    </div>

                    <div class="content">
                        <p>Đây là một local brand được lấy cảm hứng từ cánh đồng lúa mạch, 
                            nơi sinh sống và làm việc của nhiều người nông dân trên khắp thế giới.</p>
                        <p>MyShop chú trọng đến sự tươi mới và sự đơn giản trong thiết kế. 
                            Tất cả các sản phẩm của thương hiệu đều được làm từ chất liệu organic và sustainable, giúp bảo vệ môi trường và chăm sóc sức khỏe cho người tiêu dùng. 
                            Các bộ trang phục của thương hiệu được thiết kế với những chi tiết nhỏ như họa tiết lúa mạch, 
                            túi đựng hạt lúa và các phụ kiện nhỏ khác để tạo nên sự độc đáo và thú vị.</p>
                        <p>MyShop không chỉ là một thương hiệu thời trang, mà còn là một sứ mệnh về bảo vệ môi trường và đẩy mạnh phong trào slow fashion. 
                            Thương hiệu này mong muốn truyền tải thông điệp về ý thức bảo vệ môi trường và sức khỏe cho mọi người, 
                            đồng thời giúp khách hàng cảm nhận sự yên bình và tươi mới của cánh đồng lúa mạch thông qua những bộ trang phục độc đáo của mình.</p>

                    </div>

                    <div class="signature">
                        <img src="./public/site/img/about/sign.png" alt="">
                        <div>
                            <h6>Stephen Strange</h6> <span> - Store owner</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End of history -->


<!-- Start of why choose us -->
<!-- <section class="why-choose-us p-50">
    <div class="container-fluid section-main">
        <div class="title-block">
            <p class="block-title">Why choose us</p>
            <p class="block-motto"><span>BEST PRODUCTS</span></p>
        </div>

        <div class="container content-block">
            <ul id="why-list">
                <li class="list-item">
                    <ul>
                        <li>
                            <div class="why-block left">
                                <div class="circle">
                                    <img src="./public/site/img/about/healthy.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Good for health</h5>
                                    <p>Made with care for your health</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-block left">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/organic.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>100% organic</h5>
                                    <p>Available Quality Foods</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </li>


                <li class="list-item">
                    <img src="./public/site/img/home/images/basket5.png" alt="">
                </li>
                <li class="list-item">
                    <ul>
                        <li>
                            <div class="why-block right">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/free-delivery.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Free shipping</h5>
                                    <p>All orders over $100</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-block right">
                                <div class="circle">
                                    <img src="./public/site/img/about/quality.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>High-quality products</h5>
                                    <p>Deliver incredible standards</p>
                                </div>
                            </div>
                        </li>
                    </ul>



                </li>
            </ul>
        </div>
    </div>
</section> -->

<!-- End of why choose us -->

<!-- Start of Meet our chef -->
<!-- <section class="meet p-50">
    <div class="container-fluid section-main">
        <div class="title-block">
            <p class="block-title">Meet our chefs</p>
            <p class="block-motto"><span>THE BEST BAKERS</span></p>
        </div>

        <div class="container-fluid" style="margin-top: 40px;">
            <div class="content-block">
                <ul id="chef-list">


                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/dz.png" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Dzuong Thai</h5>
                                <p>F* the right one</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/thedayIplaynextmove"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/honganh.png" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Hong Einh</h5>
                                <p>😏</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/hong.einh"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/hoang.png" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Nguyen Viet Hoang</h5>
                                <p>Television is my life.</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/NVHLoveTV"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/phuc.png" alt="" style="background: lightblue; border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Phuc Nguyen</h5>
                                <p>Eat . Live . Pray</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/manhphuc.nguyen.5/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section> -->
<!-- End of Meet our chef -->


<section class="bottom-banner">
    <img src="./public/site/img/about/logo-banner.png" alt="">
</section>

<?php view('shared.site.footer'); ?>