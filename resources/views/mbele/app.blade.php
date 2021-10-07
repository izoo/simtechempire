<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIMTECH |GYM EQUIPMENTS</title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon-icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon-icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon-icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon-icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon-icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon-icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-icons/favicon-16x16.png">
    <link rel="manifest" href="img/favicon-icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon-icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    
    
    <!-- customizer plate css -->
    <link rel="stylesheet" href="{{asset('frontend/customizer/css/style.css')}}" />
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{asset('frontend/skins/color-files/css/color1.css')}}">
    
	

</head>


<body>
    @include('mbele.partials.header')
    @yield('content')
    @include('mbele.partials.footer')
   
    
  
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <!-- jQuery js -->
    <script src="{{asset('frontend/assets/jquery-1.12.4.min.js')}}"></script>
    <!-- Custom Jquery -->
    <script>
        $(document).ready(function(){
           // $(.mix).css("display","block");
            $.ajax({
            url:"{{route('users_products')}}",
            type:"GET",
            dataType:'json',
            success:function(data)
            {
             var inner_div = '';
             $.each(data,function(index,element){
                 //alert(element.product_name);
                 var path = 'storage/pichas/' + element.product_image;
                 var price = element.product_price;
                 inner_div +=`<div class="col-md-4 col-sm-6 mix ` + element.product_category + `">` +
                    `<div class="single-product-item text-center">` +
                        `<div class="img-holder">` +
                            `<img alt="` + element.product_name + `" src="{{ asset('` + path + `')}}">` +
                        `</div>` +
                        
                       ` <div class="title">` +
                            `<a href="#"><h3> ` + element.product_name + ` </h3></a>` +
                            `<h2>Kshs ` + price.toLocaleString()  + `</h2>` +
                       ` </div>` +
                    
                    `</div>` +
              
                `</div>`;
              
             });
            // alert(inner_div);

             $('#all_products').append(inner_div);
             $('.mix').fadeIn();
            // $('.to').addClass("mix");


            }
            });
        })
    </script>
    <!-- bootstrap js -->
    <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jQuery ui js -->
    <script src="{{asset('frontend/assets/jquery-ui-1.11.4/jquery-ui.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('frontend/assets/owl.carousel-2/owl.carousel.min.js')}}"></script>
    <!-- jQuery validation -->
    <script src="{{asset('frontend/assets/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <!-- gmap.js helper -->
    <script src="http://maps.google.com/maps/api/js"></script>
    <!-- gmap.js -->
    <script src="{{asset('frontend/assets/gmap.js')}}"></script>
    <!-- mixit up -->
    <script src="{{asset('frontend/assets/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/jquery.fitvids.js')}}"></script>
    <!-- revolution slider js -->
    <script src="{{asset('frontend/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('frontend/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- fancy box -->
    <script src="{{asset('frontend/assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('frontend/assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('frontend/assets/nouislider/nouislider.js')}}"></script>
    <script src="{{asset('frontend/assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('frontend/assets/jquery-appear/jquery.appear.js')}}"></script>
    <script src="{{asset('frontend/assets/jquery.countTo.js')}}"></script>
    <script src="{{asset('frontend/assets/menuzord/js/menuzord.js')}}"></script>
    <script src="{{asset('frontend/assets/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/jquery.isotope.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{asset('frontend/assets/waypoint.js')}}"></script>
    <!-- theme custom js  -->
    <script src="{{asset('frontend/js/default-map.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
    <script src="{{asset('frontend/customizer/plugins/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('frontend/customizer/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/customizer/js/customizer.js')}}"></script>

    
</body>


</html>
