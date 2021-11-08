@extends('mbele.app')
@section('title')Simtech | Services @endsection
@section('content')
<section class="inner-banner pattern-3">
        <div class="container text-center">
            <h2>Simtech Emipires Services </h2>
            <p>We Are Fitness Equipment Repair & Maintenance Specialists.</p>
        </div>
    </section>
    <section class="bread-cumb">
        <div class="container text-center">
            <ul>
                <li><a href="{{Config::get('app.url')}}">Home</a></li>
                <li><span>Services</span></li>
            </ul>
        </div>
    </section>
    
  
    <section class="fitness-service-round-icon square-box section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h1><span>Simtech Empire Services</span></h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-fitness-service-round-icon square-box">
                        <div class="icon-box">
                            <i class="fc-icon ftc-icon-meter"></i>
                        </div>
                        <!-- /.icon-box -->
                        <h3>Gym Equipment Diagnosis Maintenance </h3>
                        <p>Simtech Empire offers after-sales gym equipment maintenance. Regular maintenance updates can be managed through our expert team, ensuring that your exclusive fitness equipment maintains its world-renowned excellence throughout the years. For our tailor-made service level agreement options, contact us today. </p>
                        <a href="cpntact.html">Request Service</a>
                    </div>
                    <!-- /.single-fitness-service-round-icon -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="single-fitness-service-round-icon square-box">
                        <div class="icon-box">
                            <i class="fc-icon ftc-icon-shopping-bag"></i>
                        </div>
                        <!-- /.icon-box -->
                        <h3>Gym Spareparts Solutions</h3>
                        <p>We supply a selection of the best fitness equipment products. Our expert sales team will advise you on the best equipment for your company or personal fitness journey, making the purchasing process easy and offering you a a satisfying experience. </p>
                        <a href="{{url('contact')}}">Request Service Now</a>
                    </div>
                    <!-- /.single-fitness-service-round-icon -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="single-fitness-service-round-icon square-box">
                        <div class="icon-box">
                            <i class="fc-icon ftc-icon-dumbbells"></i>
                        </div>
                        <!-- /.icon-box -->
                        <h3>Gym Equipments Installation</h3>
                        <p>Our team of technicians can design and install any fitness facility from a simple home gym to an intricate commercial club.. </p>
                        <a href="{{url('contact')}}">Request Service Now</a>
                    </div>
                    <!-- /.single-fitness-service-round-icon -->
                </div>
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
 
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
        </div>
    </section>
@endsection