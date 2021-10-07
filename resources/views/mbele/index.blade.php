@extends('mbele.app')
@section('title')Home | Page @endsection
@section('content')
<section class="rev_slider_wrapper slider-5">
        <div id="slider2" data-height="500" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="random">
                    <img src="{{asset('frontend/img/slides/sports-1962574_1920.jpg')}}" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="115" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                       SimTech Offers Top Notch
                    </div>
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="right" data-hoffset="[20, 20]" data-y="top" data-voffset="210" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                         <span class="offer-box"><span class="inner">Gym Equipment & Services At The Best Prices</span></span>
                    </div>
                    <!-- <div class="tp-caption  tp-resizeme banner-caption-p " data-x="right" data-hoffset="90" data-y="top" data-voffset="320" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="1500">
                        Get Gift Voucher on Your Next Order & More offers - <span class="color-green font-oregano">Subscribe us</span>
                    </div> -->
                    <div class="tp-caption tp-resizeme  " data-x="right" data-hoffset="[445, 440]" data-y="top" data-voffset="500" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="{{url('shop')}}" class="thm-btn arrow-push-in-right"><span>Shop Now <i class="fa fa-caret-right"></i></span></a>
                    </div>
                    <!-- <div class="tp-caption tp-resizeme  " data-x="right" data-hoffset="244" data-y="top" data-voffset="500" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="#" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                    </div> -->
                </li>
                <li data-transition="random">
                    <img src="{{asset('frontend/img/slides/IMG20210209122613.jpg')}}" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="160" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500" style="font-size: 40px;">
                        Treademill Repairs And Maintenance Services
                    </div>
                    
                    <div class="tp-caption  tp-resizeme banner-caption-p " data-x="center" data-hoffset="0" data-y="top" data-voffset="275" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        We Repair All Brands Of Treadmills And Have All Their Spareparts.
                    </div>
                    <br>
                    <!-- <div class="tp-caption  tp-resizeme banner-caption-p large" data-x="center" data-hoffset="0" data-y="top" data-voffset="340" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="1500">
                        Sign Up & Get 40 Discount
                    </div> -->
                    <div class="tp-caption tp-resizeme  " data-x="center" data-hoffset="-100" data-y="top" data-voffset="450" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="{{url('shop')}}" class="thm-btn arrow-push-in-right"><span>Shop Now <i class="fa fa-caret-right"></i></span></a>
                    </div>
                    <!-- <div class="tp-caption tp-resizeme  " data-x="center" data-hoffset="100" data-y="top" data-voffset="450" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="#" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                    </div> -->
                </li>
                <li data-transition="random">
                    <img src="{{asset('frontend/img/slides/pic2.jpg')}}" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="left" data-hoffset="0" data-y="top" data-voffset="115" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        All Gym Equipments Available
                    </div>
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="left" data-hoffset="0" data-y="top" data-voffset="210" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        Get <span class="offer-box"><span class="inner">50% Offer</span></span>
                    </div>
                    <!-- <div class="tp-caption  tp-resizeme banner-caption-p " data-x="left" data-hoffset="10" data-y="top" data-voffset="320" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="1500">
                        Get Gift Voucher on Your Next Order & More offers - <span class="color-green font-oregano">Subscribe us</span>
                    </div> -->
                    <!-- <div class="tp-caption  tp-resizeme banner-caption-p large" data-x="left" data-hoffset="10" data-y="top" data-voffset="390" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2000">
                        Sign Up & Get 40 Discount
                    </div> -->
                    <div class="tp-caption tp-resizeme  " data-x="left" data-hoffset="0" data-y="top" data-voffset="500" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="{{url('shop')}}" class="thm-btn arrow-push-in-right"><span>Shop Now <i class="fa fa-caret-right"></i></span></a>
                    </div>
                    <!-- <div class="tp-caption tp-resizeme  " data-x="left" data-hoffset="200" data-y="top" data-voffset="500" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="#" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                    </div>
                </li> -->
            </ul>
        </div>
    </section>
    <section class="shop-cta section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-shop-cta">
                        <div class="img-holder">
                            <img src="{{asset('frontend/img/resources/offer-products-1.jpg')}}" alt="">
                            <div class="content">
                                <h1>Multi Gym Strength Equipments</h1>
                                <a href="#" class="arrow-push-in-right"><span>Shop <i class="fa fa-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.single-shop-cta -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-shop-cta">
                        <div class="img-holder-2">
                            <img src="{{asset('frontend/img/resources/ExerciseBike.png')}}" style="max-height: 300px;" alt="Exercise Bikes">
                            <div class="content-2">
                                <h1>Exercise<br><span>Bikes</span></h1>
                                <h2 >20% Offer</h2>
                                <a href="#" class="arrow-push-in-right"><span>Shop <i class="fa fa-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.single-shop-cta -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-shop-cta">
                        <div class="img-holder-3">
                            <img src="{{asset('frontend/img/resources/offer-products-3.jpg')}}" alt="">
                            <div class="content-3">
                                <h1>30%</h1>
                                <h2>Offer on<br>Treadmills</h2>
                                <a href="{{url('shop')}}" class="arrow-push-in-right"><span>Shop <i class="fa fa-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.single-shop-cta -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.shop-cta -->
    <section class="popular-shop-item mixit-gallery section-padding pt0">
        <div class="container">
            <div class="clearfix">
                <div class="section-title text-left">
                    <h1><span>Simtech  Products</span></h1>
                    <ul class="gallery-filter list-inline text-left">
                        <li class="filter" data-filter="all"><span>Show All</span></li>
                        <li class="filter" data-filter=".treadmill"><span>Treadmill</span></li>
                        <li class="filter" data-filter=".strength"><span>Multigym Strength Equipments</span></li>
                        <li class="filter" data-filter=".exercise-bikes"><span>Exercise Bikes</span></li>
                        <li class="filter" data-filter=".elliptical-bikes"><span>Elliptical Bikes</span></li>

                    </ul>
                </div>
            </div>
            <!-- /.clearfix -->
            <div class="row" id="all_products">
                
                
                
        </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.popular-shop-item -->
    <section class="daily-training-workout-area">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-7 col-md-4 col-sm-3">
                    <div class="img-holder">
                        <img src="img/resources/header-cart-1.jpg" alt="">
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="content">
                        <h1>SimTech Empire Services </h1>
                        <p>We Offer The Following Services To Our Dear Clients.</p>
                        <ul>
                            <li><i class="fa fa-check"></i>Gym Equipment Diagnosis Repair and Maintenance</li>
                            
                            <li><i class="fa fa-check"></i>Gym Equipment Installation</li>
                           
                        </ul>
                        <a class="thm-btn arrow-push-out-right" href="services.html"><span>Read More <i class="fa fa-caret-right"></i></span></a>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="section-title text-left">
                <h1><span>New Arrivals</span></h1>
            </div>
            <div class="owl-carousel owl-theme product-carousel">
                <div class="item">
                    <div class="single-product-item text-center">
                        <div class="img-holder">
                            <img alt="TREADMILL CONTROLLERS" src="{{('frontend/img/shop/simtechproducts1/TREADMILL CONTROLLERS.jpg')}}">
                        
                        </div>
                        <!-- /.img-holder -->
                        <div class="title">
                            <a href="#"><h3>TREADMILL CONTROLLERS</h3></a>
                            <h2>Kshs 15,000 To 30,000</h2>
                        </div>
                        <!-- /.title -->
                    </div>
                    <!-- /.single-product-item text-center -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="single-product-item text-center">
                        <div class="img-holder">
                            <img alt="Exercise Bikes Pedals" src="{{asset('frontend/img/shop/exercise bike pedals.jpg')}}">
                        
                        </div>
                        <!-- /.img-holder -->
                        <div class="title">
                            <a href="#"><h3> Exercise Bikes Pedals</h3></a>
                            <h2>Kshs 6,000</h2>
                        </div>
                        <!-- /.title -->
                    </div>
                    <!-- /.single-product-item text-center -->
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="single-product-item text-center">
                        <div class="img-holder">
                            <img alt="Elliptical foot plate" src="{{asset('frontend/img/shop/elliptical foot plate.jpg')}}">
                        
                        </div>
                        <!-- /.img-holder -->
                        <div class="title">
                            <a href="#"><h3>Elliptical Foot Plate </h3></a>
                            <h2>Kshs 8,000</h2>
                        </div>
                        <!-- /.title -->
                    </div>
                    <!-- /.single-product-item text-center -->
                </div>
                <!-- /.item -->
            </div>
            <!-- /.owl-carousel owl-theme -->
        </div>
        <!-- /.container -->
    </section>
 
    <section class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12 hidden-sm">
                    <div class="img-holder">
                        <img src="{{asset('frontend/img/resources/gym-2888131_640.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="subscribe-form">
                        <h1 class="title">Subscribe us for Offers & Equipments Tips</h1>
                        <form class="subscribe mailchimp-form" action="#">
                            <input class="name" type="text" name="fname" placeholder="Your Name">
                            <input class="email" type="text" name="email" placeholder="Your Email">
                            <button class="thm-btn arrow-push-out-right" type="submit"><span>Subscribe  Now <i class="fa fa-caret-right"></i></span></button>
                        </form>
                        <h1>Give us a Call  : <span>+254 772 920 155</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection