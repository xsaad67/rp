<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Tooltip plugin (zebra) css file -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/zebra-tooltip/zebra_tooltips.min.css')}}">

    <!-- Owl Carousel plugin css file. only used pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/owl-carousel/assets/owl.carousel.min.css')}}">

    <!-- Ideabox main theme css file. you have to add all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main-style.css')}}">

    <!-- Ideabox responsive css file -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive-style.css')}}">
    @yield('css')
</head>





<body>


  @include('layouts.nav')



    <!--Main container start -->
    <main class="main-container">
        
        @yield('content')

    </main>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    <!-- Tooltip plugin (zebra) js file -->
    <script src="{{asset('plugins/zebra-tooltip/zebra_tooltips.min.js')}}"></script>

    <!-- Owl Carousel plugin js file -->
    <script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- Ideabox theme js file. you have to add all pages. -->
    <script src="{{asset('js/main-script.js')}}"></script>

    @yield('footer')
  

</body>

</html>
