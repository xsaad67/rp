<!doctype html>
<html lang="en">

<head>

<!-- Basic Page Needs -->

<title>Dummy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/colors/blue.css">

@yield('css')
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container-->

    @include('layouts.nav')

<!-- Header Container / End -->



<!-- Content-->

    @yield('content')
    

<!-- Footer -->

    @include('layouts.footer')

<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/js/mmenu.min.js"></script>
<script src="/js/tippy.all.min.js"></script>
<script src="/js/simplebar.min.js"></script>
<script src="/js/bootstrap-slider.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/snackbar.js"></script>
<script src="/js/clipboard.min.js"></script>
<script src="/js/counterup.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
    Snackbar.show({
        text: 'Your status has been changed!',
        pos: 'bottom-center',
        showAction: false,
        actionText: "Dismiss",
        duration: 3000,
        textColor: '#fff',
        backgroundColor: '#383838'
    }); 
}); 
</script>

</body>

</html>