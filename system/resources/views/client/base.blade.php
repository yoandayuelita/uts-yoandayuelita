 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8">
        <title>Website Blog Yoan Dayu Elita</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <!-- CSS
         ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css"/>
        <!-- FontAwesome -->
        <link rel="stylesheet" href="{{url('public')}}/css/font-awesome.min.css"/>
        <!-- Animation -->
        <link rel="stylesheet" href="{{url('public')}}/css/animate.css" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.css"/>
        <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.css"/>
        <!-- Pretty Photo -->
        <link rel="stylesheet" href="{{url('public')}}/css/prettyPhoto.css"/>
        <!-- Main color style -->
        <link rel="stylesheet" href="{{url('public')}}/css/red.css"/>
        <!-- Template styles-->
        <link rel="stylesheet" href="{{url('public')}}/css/custom.css" />
        <!-- Responsive -->
        <link rel="stylesheet" href="{{url('public')}}/css/responsive.css" />
        <link rel="stylesheet" href="{{url('public')}}/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
    </head>

 <body data-spy="scroll" data-target=".navbar-fixed-top">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

@include('client.section.header')
<!-- bLOG Start -->
@yield('content')
@include('client.section.footer')
<!-- Footer Area End -->



<!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->

        <!-- initialize jQuery Library -->
        <!-- Main jquery -->
            <script type="text/javascript" src="{{url('public')}}/js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
         <script src="{{url('public')}}/js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script src="{{url('public')}}/js/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="{{url('public')}}/js/jquery.isotope.js"></script>
        <!-- Pretty Photo -->
            <script type="text/javascript" src="{{url('public')}}/js/jquery.prettyPhoto.js"></script>
        <!-- SmoothScroll -->
        <script type="text/javascript" src="{{url('public')}}/js/smooth-scroll.js"></script>
        <!-- Image Fancybox -->
        <script type="text/javascript" src="{{url('public')}}/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Counter  -->
        <script type="text/javascript" src="{{url('public')}}/js/jquery.counterup.min.js"></script>
        <!-- waypoints -->
        <script type="text/javascript" src="{{url('public')}}/js/waypoints.min.js"></script>
        <!-- Bx slider -->
        <script type="text/javascript" src="{{url('public')}}/js/jquery.bxslider.min.js"></script>
        <!-- Scroll to top -->
        <script type="text/javascript" src="{{url('public')}}/js/jquery.scrollTo.js"></script>
        <!-- Easing js -->
        <script type="text/javascript" src="{{url('public')}}/js/jquery.easing.1.3.js"></script>
         <!-- PrettyPhoto -->
        <script src="{{url('public')}}/js/jquery.singlePageNav.js"></script>
        <!-- Wow Animation -->
        <script type="js/javascript" src="{{url('public')}}/js/wow.min.js"></script>
        <!-- Google Map  Source -->
        <script type="text/javascript" src="{{url('public')}}/js/gmaps.js"></script>
             <!-- Custom js -->
        <script src="{{url('public')}}/js/custom.js"></script>
         <script>
        // Google Map - with support of gmaps.js
     var map;
        map = new GMaps({
          div: '#map',
          lat: 23.709921,
          lng: 90.407143,
          scrollwheel: false,
          panControl: false,
          zoomControl: false,
        });

        map.addMarker({
          lat: 23.709921,
          lng: 90.407143,
          title: 'Smilebuddy',
          infoWindow: { 
            content: '<p> Smilebuddy, Dhanmondhi 27</p>'
          },
          icon: "images/map1.png"
        });
        </script>
        
    </body>
</html>
