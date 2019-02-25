<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="_token" content="{{csrf_token()}}">

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

    <div class="footer"></div>


       
 
    <div class="m-modal-box" id="newsletterModal" displayed="false">
        <div class="m-modal-overlay"></div>
        <div class="m-modal-content small">
            <div class="m-modal-header">
                <h3 class="m-modal-title">Newsletter</h3>
                <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
            </div>
            <div class="m-modal-body">
                <p>Submit to our newsletter to receive exclusive recipes delivered to your inbox!</p>
                <form>
                    <div class="frm-row">
                        <input class="frm-input" id="nemail" type="text" name="email" placeholder="Email address">

                    <div id="subscribe-errors"></div>
                    </div>
                    <div class="frm-row">
                        <button class="frm-button material-button full" id="newsLetter" type="button">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter popup html source end -->

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    <!-- Tooltip plugin (zebra) js file -->
    <script src="{{asset('plugins/zebra-tooltip/zebra_tooltips.min.js')}}"></script>

    <!-- Owl Carousel plugin js file -->
    <script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- Ideabox theme js file. you have to add all pages. -->
    <script src="{{asset('js/main-script.js')}}"></script>
    <script src="{{asset('js/lazy-load.min.js')}}"></script>

    @yield('footer')
    <script>
        $(function(){
        
        $('.lazy').Lazy({
            placeholder: "/img/logo.png"
        });

        $(window).scroll(function() {
            if($(document).scrollTop() > 3000 && $("#newsletterModal").attr("displayed") === "false") {
                $('#newsletterModal').show();
                $("#newsletterModal").attr("displayed","true");
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $("#newsLetter").click(function(){
            var email = $("#nemail").val();
            $.ajax({
                type:'POST',
                url:'/newsletter',
                data:{ email: email},
                context: this,
                success:function(data){
                     $('#subscribe-errors').html('<div class="alert alert-success">Thank you for subscription</a>');
                },
                error: function (xhr) {
                   $('#subscribe-errors').html('');
                   $.each(xhr.responseJSON.errors, function(key,value) {
                     $('#subscribe-errors').append('<div class="alert alert-danger">'+value+'</div');
                 }); 
                },
            });
    
        });  


        $("#login-btn").click(function(){
            var email = $("#lmail").val();
            var password = $("#lpassword").val();
            $.ajax({
                type:'POST',
                url:'/login',
                data:{ email: email, password: password },
                context: this,
                success:function(data){
                    location.reload();
                },
                error: function (xhr) {
                   $('#validation-errors').html('');
                   $.each(xhr.responseJSON.errors, function(key,value) {
                     $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
                 }); 
                },
            });
    
        });  

        });
    </script>

</body>

</html>
