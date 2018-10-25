
<html lang="en">

<head>
    <title>Home page
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--decorative-->
    <meta name="theme-color" content="#d44f68">
    <!--decorative END-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/preload.css">

    <link rel="stylesheet" href="/css/style.css">

    @yield('css')
</head>

  <body>

   @include('layouts.nav')

    <main style="padding-top:100px;">
        
     @yield('content')

    </main>

    @include('layouts.footer')
    <!--Base style-->
    <!--Base js-->
    <script src="/js/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--App js-->
    <script src="/js/script.js"></script>
    <!-- Enable tooltips-->
    <script>$(function () { $('[data-toggle="tooltip"]').tooltip() })</script>
    @yield('footer')
  </body>

</html>