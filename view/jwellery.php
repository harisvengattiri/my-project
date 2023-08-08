<?php
$apiType = 'Jwellery';
require_once '../api.php';
$gold_rate = $responseData;
?>
<?php include "header.php";?>
<div class="">
    <div class="fullwidth-template">
        <div class="home-slider fullwidth rows-space-60">
            <div class="slider-owl owl-slick equal-container nav-center equal-container"
                 data-slick='{"autoplay":true, "autoplaySpeed":10000, "arrows":true, "dots":true, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                <div class="slider-item style4">
                    <div class="slider-inner equal-element">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Sale up to 40% off!
                                </h5>
                                <h3 class="title-big">
                                    Ring Jewelry <br/>
                                    Design
                                </h3>
         <!--                       <div class="price">-->
         <!--                           New Price:-->
         <!--                           <span class="number-price">-->
									<!--			$25.00-->
									<!--</span>-->
         <!--                       </div>-->
                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item style5">
                    <div class="slider-inner equal-element">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Start weekend off!
                                </h5>
                                <h3 class="title-big">
                                    Huge sale<br/>
                                    Up to 75% Off
                                </h3>
                                <div class="when-code">
                                    When Use Code:
                                    <span class="number-code">
										Project
									</span>
                                </div>
                                <a href="#" class="button btn-view-promotion bgroud-style">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item style6">
                    <div class="slider-inner equal-element">
                        <div class="container">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Make your hand!
                                </h5>
                                <h3 class="title-big">
                                    New Trending <br/>
                                    Collection
                                </h3>
         <!--                       <div class="price">-->
         <!--                           Template Price:-->
         <!--                           <span class="number-price">-->
									<!--	$89.00-->
									<!--</span>-->
         <!--                       </div>-->
                                <a href="#" class="button btn-lets-create bgroud-style">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-video-wrapp rows-space-40 type2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner">
                            <div class="item-banner style9">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="ysera-subtitle">Hurry up</h4>
                                        <h3 class="title">Big Sale To <br/> 30% Off</h3>
                                        <div class="code">
                                            Use promo Code:
                                            <span class="nummer-code">Project</span>
                                        </div>
                                        <a href="#" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner">
                            <div class="item-banner style9 type1">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="ysera-subtitle">Sale Up to 50% Off</h4>
                                        <h3 class="title"> Get daily <br/> update</h3>
                                        <div class="code">
                                            Use promo Code:
                                            <span class="nummer-code">Project</span>
                                        </div>
                                        <a href="#" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ysera-product produc-featured rows-space-40">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Our Collections
                </h3>
                <ul class="row list-products auto-clear equal-container product-grid">
                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-1.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button">
                                            <a href="#">Add to Wishlist</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Sanchita Earrings</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            6 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 6*$gold_rate;?>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-2.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Splendid Diamond</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            3 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 3*$gold_rate;?>
                                        </ins>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-3.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Drop Earrings</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            4 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 4*$gold_rate;?>
                                        </ins>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-4.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Dazzling Earrings</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            5 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 5*$gold_rate;?>
                                        </ins>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-5.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Elegant Neckwear</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            6 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 6*$gold_rate;?>
                                        </ins>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-6.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Rose Gold</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            4 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 4*$gold_rate;?>
                                        </ins>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-7.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#"> Contemporary Diamond</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            6 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 6*$gold_rate;?>
                                        </ins>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
									<span class="onnew">
										<span class="text">
											new
										</span>
									</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="assets/images/product-item-8.jpg" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Modern Neckwear</a>
                                </h5>
                                <div class="group-info">
                                    <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="count-star">
                                            8 Grams
                                        </div>
                                    </div>
                                    <div class="price">
                                        <ins>
                                            Rs: <?php echo 8*$gold_rate;?>
                                        </ins>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="banner-pinmap-wrapp rows-space-70">
            <div>
                <div class="banner">
                    <div class="item-banner style21">
                        <div class="inner">
                            <div class="banner-content container">
                                <div class="banner-content-inner">
                                    <h4 class="ysera-subtitle">Style your hair</h4>
                                    <h3 class="title">
                                        Collection<br/>
                                        Sale <span>15%</span> Off
                                    </h3>
                                    <div class="start-from">
                                        start from <span>27th </span>of this month</span>
                                    </div>
                                    <a href="#" class="button btn-shop-now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ysera-testimonials-newsletter-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ysera-testimonials-wrapp">
                            <div class="ysera-testimonials default">
                                <div class="owl-slick equal-container"
                                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800}'
                                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                    <div class="testimonial-item">
                                        <div class="image">
                                            <img src="assets/images/testimonial-1.jpg" alt="img">
                                        </div>
                                        <div class="info">
                                            <h5 class="name">
                                                Adam Smith
                                                <span>Shop Owner</span>
                                            </h5>
                                            <div class="text">
                                                <p>
                                                    Maecenas vel nulla eleifend, euismod magna sed, tristique velit. Nam
                                                    sed eleifend dui, eu eleifend leo. Mauris ornare eros quis placerat
                                                    mollis zuis ornare euismod.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="image">
                                            <img src="assets/images/testimonial-2.jpg" alt="img">
                                        </div>
                                        <div class="info">
                                            <h5 class="name">
                                                Adam Smith
                                                <span>Shop Owner</span>
                                            </h5>
                                            <div class="text">
                                                <p>
                                                    Maecenas vel nulla eleifend, euismod magna sed, tristique velit. Nam
                                                    sed eleifend dui, eu eleifend leo. Mauris ornare eros quis placerat
                                                    mollis zuis ornare euismod.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ysera-newsletter default">
                            <div class="newsletter-head">
                                <h3 class="title">Newsletter</h3>
                                <div class="subtitle">Get more special Deals, Events & Promotions</div>
                            </div>
                            <div class="newsletter-form-wrap">
                                <input class="input-text email email-newsletter" type="email" name="email"
                                       placeholder="Your email here...">
                                <button class="button btn-submit submit-newsletter">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
    </div>
</div>
<?php include "footer.php";?>