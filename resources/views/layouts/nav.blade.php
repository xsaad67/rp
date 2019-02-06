    <!-- header start -->
    <header class="header">
        <div class="header-wrapper">

            <!--sidebar menu toggler start -->
            {{-- <div class="toggle-sidebar material-button">
                <i class="material-icons">&#xE5D2;</i>
            </div> --}}
            <!--sidebar menu toggler end -->

            <!--logo start -->
            <div class="logo-box">
                <h1>
                    <a href="{{url('/')}}" class="logo"></a>
                </h1>
            </div>
            <!--logo end -->

            <div class="header-menu">

                <!-- header left menu start -->
                <ul class="header-navigation" data-show-menu-on-mobile>
                    <li>
                        <a href="{{url('/')}}" class="material-button">Home</a>
                    </li>
                    <li>
                        <a href="{{url('/pages/about-us')}}" class="material-button submenu-toggle">About Us</a>
                    </li>
                    <li>
                        <a href="{{url('/pages/contact-us')}}" class="material-button submenu-toggle">Contact Us</a>
                    </li>
                  
                </ul>
                <!-- header left menu end -->

            </div>
            <div class="header-right with-seperator">

                <!-- header right menu start -->
                <ul class="header-navigation">
                    <li>
                        <a href="#" class="material-button search-toggle">
                            <i class="material-icons">&#xE8B6;</i>
                        </a>
                    </li>
                    @guest
                    <li>
                         <a href="/recipes/create">
                            Submit Your Recipe
                        </a>
                    </li>
                   
                    @endguest
                    @auth
                    <li>
                        <a href="#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> 
                            <span class="hide-on-tablet">{{ucwords(auth()->user()->name)}}<i class="material-icons">&#xE313;</i></span></a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="/recipes/create">Create Recipe</a></li>
                                <li><a href="/member/favorites">My Favorites</a></li>
                                <li><a href="/member/reviews">My Reviews</a></li>
                            </ul>
                        </div>
                    </li>
                    @endauth
                    {{-- <li class="hide-on-mobile"><a href="#" class="material-button" data-modal="newsletterModal"><i class="material-icons">&#xE0E1;</i></a></li> --}}
                </ul>
                <!-- header right menu end -->

            </div>

            <!--header search panel start -->
            <div class="search-bar">
                <form class="search-form" action="{{action('SearchController@simpleLikeSearch')}}" method="GET">
                    <div class="search-input-wrapper">
                        <input type="text" name="search" placeholder="search something..." class="search-input">
                        <button type="submit" class="search-submit"><i class="material-icons">&#xE5C8;</i></button>
                    </div>
                    <span class="search-close search-toggle">
                        <i class="material-icons">&#xE5CD;</i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->

        </div>
    </header>
    <!-- header end -->


    <!-- Left sidebar menu start -->
   {{--  <div class="sidebar">
        <div class="sidebar-wrapper">

            <!-- side menu logo start -->
            <div class="sidebar-logo">
                <a href="#"></a>
                <div class="sidebar-toggle-button">
                    <i class="material-icons">&#xE317;</i>
                </div>
            </div>
            <!-- side menu logo end -->

            <!-- showing on mobile screen sizes -->
            <!-- mobile menu start -->
            <div id="mobileMenu">
                <div class="sidebar-seperate"></div>
            </div>
            <!-- mobile menu end -->

            <!-- sidebar menu start -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
                        <span class="menu-label">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
                        <span class="menu-label">Videos</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE0BF;</i></span>
                        <span class="menu-label">Posts</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE866;</i></span>
                        <span class="menu-label">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE8B0;</i></span>
                        <span class="menu-label">Multi Menu</span>
                        <span class="multimenu-icon"><i class="material-icons">&#xE313;</i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="#"><span class="menu-label">Menu Level 1</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="menu-label">Menu Level 2</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="menu-label">Menu Level 3</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end -->

            <div class="sidebar-seperate"></div>

            <!-- sidebar menu start -->
            <ul class="sidebar-menu">
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
                        <span class="menu-label">Extra Menu One</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE8B0;</i></span>
                        <span class="menu-label">Extra Menu Two</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
                        <span class="menu-label">Extra Menu Three</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end -->

            <div class="sidebar-seperate"></div>

            <!-- sidebar menu start -->
            <ul class="sidebar-menu">
                <li>
                    <a href="#" class="facebook material-button">
                        <span class="menu-label">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter material-button">
                        <span class="menu-label">Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="google-plus material-button">
                        <span class="menu-label">Google +</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end -->
        </div>
    </div> --}}
    <!-- Left sidebar menu end -->