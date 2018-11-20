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

    <!-- Login popup html source start -->
    <div class="m-modal-box" id="loginModal">
        <div class="m-modal-overlay"></div>
        <div class="m-modal-content small">
            <div class="m-modal-header">
                <h3 class="m-modal-title">Login</h3>
                <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
            </div>
            <div class="m-modal-body">
                <div class="m-modal-social-logins">
                    <div class="columns column-3">
                        <button class="frm-button facebook material-button full" type="button">Facebook</button>
                    </div>
                    <div class="columns column-3">
                        <button class="frm-button google material-button full" type="button">Google</button>
                    </div>
                </div>

                <div class="m-modal-seperator"><span>OR</span></div>

                <form>
                    <div class="frm-row">
                        <input class="frm-input" type="text" name="email" id="lmail" placeholder="Email">
                    </div>
                    <div class="frm-row">
                        <input class="frm-input" type="text" name="password" id="lpassword" placeholder="Password">
                    </div>
                    <div class="frm-row">
                        <button class="frm-button material-button full" id ="login-btn" type="button">Login</button>
                    </div>
                    <div id="validation-errors"></div>
                </form>
                <div class="frm-row">
                    <p class="txt-center">Don't you have an account yet? <a href="#" data-modal="registerModal">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Login popup html source end -->

    <!-- Newsletter popup html source start -->
    <div class="m-modal-box" id="newsletterModal">
        <div class="m-modal-overlay"></div>
        <div class="m-modal-content small">
            <div class="m-modal-header">
                <h3 class="m-modal-title">Newsletter</h3>
                <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
            </div>
            <div class="m-modal-body">
                <p>Submit to our newsletter to receive exclusive stories delivered to you inbox!</p>
                <form>
                    <div class="frm-row">
                        <input class="frm-input" type="text" name="email" placeholder="Email address">
                    </div>
                    <div class="frm-row">
                        <button class="frm-button material-button full" type="button">Send</button>
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

    @yield('footer')
    <script>
        $(function(){

            // $('#newsletterModal').show();
            // 
        
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                $('#newsletterModal').show();
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
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
