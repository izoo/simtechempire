@extends('mbele.app')
@section('title')Simtech| Customer | Reviews @endsection
@section('content')
<section class="inner-banner pattern-3">
        <div class="container text-center">
            <h2>About us</h2>
            <p>We Are Fitness Equipment Repair & Maintenance Specialists.</p>
        </div>
    </section>
    <section class="bread-cumb">
        <div class="container text-center">
            <ul>
                <li><a href="{{Config::get('app.url')}}">Home</a></li>
                <li><span>About Us</span></li>
            </ul>
        </div>
    </section>
    <section class="fitness-video-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="video-box">
                        <div class="inner-box">
                            <ul class="img-list">
                                <li class="active" data-video-img="{{ asset('frontend/img/video-gallery/TREADMILL TECHNICIAN 0772920155.png') }}" data-video-url="https://www.youtube.com/watch?v=DCJz_HPYyyw"><img src="{{asset('frontend/img/video-gallery/TREADMILL TECHNICIAN 0772920155.png')}}" alt="TREADMILL TECHNICIAN 0772920155" /></li>
                                <li data-video-img="{{asset('frontend/img/video-gallery/Trademill lubrication with pure silicon oil.png')}}" data-video-url="https://www.youtube.com/watch?v=yTJ4C2ALNRQ"><img src="{{asset('frontend/img/video-gallery/Trademill lubrication with pure silicon oil.png')}}" alt="Trademill lubrication with pure silicon oil" /></li>
                                <li data-video-img="{{asset('frontend/img/video-gallery/Trademill repair and maintenance.png')}}" data-video-url="https://youtu.be/PbTjl5mfpBI"><img src="{{asset('frontend/img/video-gallery/Trademill repair and maintenance.png')}}" alt="Trademill repair and maintenance" /></li>
                            </ul>
                            <div class="main-box">
                                <div class="img-box">
                                    <img src="{{ asset('frontend/img/video-gallery/Screenshot from 2021-09-23 21-57-56.png')}}" alt="TREADMILL TECHNICIAN 0772920155" />
                                    <div class="overlay">
                                        <div class="box-content">
                                            <div class="content">
                                                <a class="play-video video-fancybox" href="#"><img src="{{asset('frontend/img/resources/video-play.png')}}" alt="TREADMILL TECHNICIAN 0772920155" /></a>
                                            </div>
                                            <!-- /.content -->
                                        </div>
                                        <!-- /.box-content -->
                                    </div>
                                    <!-- /.overlay -->
                                </div>
                                <!-- /.img-box -->
                            </div>
                            <!-- /.main-box -->
                            <ul class="navigation vid-nav">
                                <li><a data-dir="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a data-dir="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <!-- /.navigation -->
                        </div>
                        <!-- /.inner-box -->
                    </div>
                    <!-- /.video-box -->
                </div>
                <!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="right-text">
                        <h3>Simtech Empire : Gym Equpments Serviced By Experienced Experts.</h3>
                        <p class="highlighted">Here at Simtech Empire, we specialize in delivering tailor-made solutions specifically designed to meet our customers' own individual service needs. We provide full-service solution packages to leading industry manufacturers and retailers. </p>
                        <br />
                        <p>We are Fitness Equipment Service Engineers, with several years engineering experience. Our service is second to none, and we pride ourselves on the service that we provide.

                            Our mission is to help you get, and keep your Fitness Equipment in the best condition possible. Whilst keeping the costs and repairs down to a minimum.
                            
                            We believe that with regular servicing and maintenance, your equipment will perform better, longer, keeping you and your customers happier. </p>
                        <br />
                        <p>The quality of our work is completed to an excellent standard. </p>
                        <p> We also have a one stop shop for various gym equipments spareparts.</p>
                        <p> <div class="button">
                            <a class="thm-btn arrow-push-out-right" href="{{url('shop')}}"><span>Checkout For More <i class="fa fa-caret-right"></i></span></a>
                        </div></p>
                        <br />
                        <h4>YOUR SUCCESS IS OUR PASSION</h4>
                    </div>
                    <!-- /.right-text -->
                </div>
                <!-- /.col-md-7 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.fitness-video-area -->
    <section class="section-padding pt0">
        <div class="container">
            <div class="section-title text-center">
                <h1><span>Our Skills</span></h1>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pgrs-bar pgrs-bar-chart " id="chart-1">
                        <div class="counter-box pgrs-bar-status">
                            <span class="timer" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="25">0</span><span>%</span>
                        </div>
                        <canvas class="pgrs-bar-cv" width="600" height="600" data-percentage-value="90" data-track-color="#ffffff" data-bar-color="#A6C311" data-bar-alt-color="#A6C311" data-ball-color="#A6C311">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                    </div>
                    <h3 class="pgrs-bar-title">Equipment Repairs</h3>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="pgrs-bar pgrs-bar-chart " id="chart-2">
                        <div class="counter-box pgrs-bar-status">
                            <span class="timer" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="25">0</span><span>%</span>
                        </div>
                        <canvas class="pgrs-bar-cv" width="600" height="600" data-percentage-value="90" data-track-color="#ffffff" data-bar-color="#8C42CB" data-bar-alt-color="#8C42CB" data-ball-color="#8C42CB">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                    </div>
                    <h3 class="pgrs-bar-title">Equipment Servicing</h3>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="pgrs-bar pgrs-bar-chart " id="chart-3">
                        <div class="counter-box pgrs-bar-status">
                            <span class="timer" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="25">0</span><span>%</span>
                        </div>
                        <canvas class="pgrs-bar-cv" width="600" height="600" data-percentage-value="90" data-track-color="#ffffff" data-bar-color="#E3913A" data-bar-alt-color="#E3913A" data-ball-color="#E3913A">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                    </div>
                    <h3 class="pgrs-bar-title">Professionalism</h3>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="pgrs-bar pgrs-bar-chart " id="chart-4">
                        <div class="counter-box pgrs-bar-status">
                            <span class="timer" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="25">0</span><span>%</span>
                        </div>
                        <canvas class="pgrs-bar-cv" width="600" height="600" data-percentage-value="90" data-track-color="#ffffff" data-bar-color="#49C9C4" data-bar-alt-color="#49C9C4" data-ball-color="#49C9C4">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                    </div>
                    <h3 class="pgrs-bar-title">Customer Support</h3>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section-padding -->
  
 
 
    <section class="faq-testimonial-section section-padding">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="section-title">
                        <h1><span>Gym Equipments Related FAQ'S</span></h1>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4 class="clearfix"><span>How often does gym equipment need to be serviced?</span></h4>
                            </div>
                            <div class="accrodion-content">
                                <p>The frequency with which exercise equipment should be inspected varies substantially depending on the type and manufacture of the equipment. Because fitness centre equipment is used frequently, it is advised that you inspect it at least once a week.</p>
                            </div>
                        </div>
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4 class="clearfix"><span>Why is it important to check all equipment regularly in the gym?</span></h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Regular equipment inspections are an integral element of any fitness facility's day-to-day operations. The advantages of having a solid routine and documenting all frequent gym equipment checks ensure that you are always operating a safe facility and getting the most out of your equipment.

                                    Choose a gym equipment servicing provider who can cater to your requests Monday-Friday, or even on weekends. It is also important to make sure that the service provider follows health and safety protocols. </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection