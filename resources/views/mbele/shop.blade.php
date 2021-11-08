@extends('mbele.app')
@section('title')Simtech| Shop @endsection
@section('content')
<section class="inner-banner pattern-3">
        <div class="container text-center">
            <h2>SHOP</h2>
            <p>We Are Fitness Equipment Repair & Maintenance Specialists.</p>
        </div>
    </section>
    <section class="bread-cumb">
        <div class="container text-center">
            <ul>
                <li><a href="{{Config::get('app.url')}}">Home</a></li>
                <li><span>Shop</span></li>
            </ul>
        </div>
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
      <!-- /.shop-cta -->
 
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
                                <h4 class="clearfix"><span>Why is it important to check all equipment regularly in the gym?.</span></h4>
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
        </div>
    </section>

@endsection