<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Starter Template | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Starter Template">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index-2.html">
    <meta property="og:url" content="index-2.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
   
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/member/apple-touch-icon.png">
    <link rel="shortcut icon" href="/member/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="/member/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/member/vendor/fontawesome/css/all.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="/member/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="/member/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="/member/stylesheets/custom.css"><!-- Disable unused skin immediately -->
    <script> var skin = localStorage.getItem('skin') || 'default';
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

    unusedLink.setAttribute('rel', '');
    unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->

    @yield('css')
</head>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
        
      @include("admin.a_layouts.admin_nav")


      @include("admin.a_layouts.admin_sidebar")


      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->

            @yield('content')

          <!-- /.page -->
        </div><!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="/member/vendor/jquery/jquery.min.js"></script>
    <script src="/member/vendor/bootstrap/js/popper.min.js"></script>
    <script src="/member/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="/member/vendor/pace/pace.min.js"></script>
    <script src="/member/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="/member/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> 
    <!-- END PLUGINS JS -->
    @yield('plugins')
    <!-- BEGIN THEME JS -->
    <script src="/member/javascript/theme.min.js"></script> <!-- END THEME JS -->
    
    @yield('js')
  </body>
</html>