<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{url()->current()}}" />
  <!--  Social tags      -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:image" content="">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="">
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="" />
  <!--     Fonts and icons     -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> --}}
  <link href="/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/main.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />

@yield('css')
  
</head>

<body class="contact-page sidebar-collapse">
  <!-- Start Navbar -->

    @include('layouts.nav')

  <!-- End Navbar -->

  <div class="main">
   @yield('content')
  </div>

  <footer class="footer footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
          </span>
        </div>
      </div>
    </div>
  </footer>

   <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/plugins/moment.min.js"></script>
    <script src="/assets/js/paper-kit.min89bf.js?v=2.2.1" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/js/plugins/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/jquery.lazy.plugin.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    {{-- <script src="/assets/js/plugins/bootstrap-switch.js"></script> --}}
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    {{-- <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script> --}}
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   
    <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    {{-- <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script> --}}
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    {{-- <script src="/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script> --}}
    <!--  Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    {{-- <script src="/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script> --}}
    <!--  Vertical nav - dots -->
    <!--  Photoswipe files -->
    {{-- <script src="/assets/js/plugins/photo_swipe/photoswipe.min.js"></script> --}}
    {{-- <script src="/assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script> --}}
    {{-- <script src="/assets/js/plugins/photo_swipe/init-gallery.js"></script> --}}
    <!--  for Jasny fileupload -->
    {{-- <script src="/assets/js/plugins/jasny-bootstrap.min.js"></script> --}}
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> --}}
    <!--  Plugin for presentation page - isometric cards  -->
    {{-- <script src="/assets/js/plugins/presentation-page/main.js"></script> --}}
    <!-- Sharrre libray -->
    {{-- <script src="/assets/demo/jquery.sharrre.js"></script> --}}  
  @yield('footer')
</body>

</html>