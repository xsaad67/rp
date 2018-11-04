<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.png" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/vendor/fortawesome/fontawesome-pro/css/all.min.css">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.min.css">

    @yield('css')

    <style>

        .mg-tp-100{
            margin-top:100px;
        }
    </style>


</head>

<body>


  @include('layouts.nav')





<main>

  @yield('content')

      <section class="slice py-5 bg-secondary delimiter-top">
            <div class="container">
                <div class="row row-grid align-items-center justify-content-center">

                    <div class="col-lg-4">
                        <div class="pr-lg-5 text-center text-lg-right">
                            <h5 class="mb-0">Sign up for the daily newsletter:</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form method="POST" action="{{action('NewsLetterController@store')}}">
                            @csrf
                            <div class="form-group shadow mb-0">
                                <div class="input-group input-group-transparent input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white border-right-0"><i class="far fa-envelope-open"></i></span>
                                    </div>
                                    <input type="text" class="form-control border-left-0" name="nemail" placeholder="Enter your email ...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                 <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                           
                        </form>
                    </div>
                </div>
            </div>
        </section>

</main>

    @include('layouts.footer')

    <!-- Core -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/in-view/dist/in-view.min.js"></script>




    <!-- Page plugins -->
    {{-- <script src="/vendor/autosize/dist/autosize.min.js"></script> --}}


    @yield('plugin')
  


    <!-- Theme JS -->

    <script src="/js/theme.min.js"></script>


    @yield('footer')
  

</body>

</html>
