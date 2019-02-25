<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>@yield('title',env('APP_NAME')) </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO Meta Tags-->
    <meta name="description" content="CreateX - Multipurpose Bootstrap Theme">
    <meta name="keywords" content="multipurpose, portfolio, blog, shop, e-commerce, modern, flat style, responsive,  business, corporate, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#343b43" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/assets/css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css">

    @yield('css')
   
    <script src="/assets/js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    
    @include('layouts.nav')
    <!-- Page Content-->
    <div class="content">
      @yield('content')
    </div>
    
    @include('layouts.footer')
    <a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>

    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/js/theme.min.js"></script>
    @yield('js')
  </body>

</html>