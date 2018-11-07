  <header class="header-transparent" id="header-main">

        <!-- Search -->
        <div id="search-main" class="navbar-search">
            <div class="container">
                <!-- Search form -->
                <form class="navbar-search-form" role="form" method="GET" action='{{action("SearchController@index")}}'>
                    <div class="form-group">
                        <div class="input-group input-group-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" name="q" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                {{-- <div class="navbar-search-suggestions">
                    <h6>Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>iphone 8</span> in Smartphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>beats pro solo 3</span> in Headphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="far fa-search"></i>
                                        <span>smasung galaxy 10</span> in Phones
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>



        <!-- Topbar -->
        <div id="navbar-top-main" class="navbar-top  navbar-light bg-white border-bottom">
            <div class="container">
                <div class="navbar-nav align-items-center">
                    <div class="d-none d-lg-inline-block">
                        <span class="navbar-text mr-3">Purpose - Website UI Kit</span>
                    </div>
                    <div>
                        <ul class="nav">
                            <li class="nav-item dropdown ml-lg-2 dropdown-animate" data-toggle="hover">
                                <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="Image placeholder" src="/img/icons/flags/us.svg">
                                    <span class="d-none d-lg-inline-block">United States</span>
                                    <span class="d-lg-none">EN</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item">
                                        <img alt="Image placeholder" src="/img/icons/flags/es.svg">Spanish</a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="Image placeholder" src="/img/icons/flags/ro.svg">Romanian</a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="Image placeholder" src="/img/icons/flags/gr.svg">Greek</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="support.html">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-action="search-open" data-target="#search-main"><i class="far fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop-cart.html"><i class="far fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html"><i class="far fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main navbar -->

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="../index-2.html">
                    <img alt="Image placeholder" src="/img/brand/dark.png" style="height: 50px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="../index-2.html">Overview</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                                <div class="list-group">
                                    <a href="pages-landing.html" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="/img/icons/dusk/svg/browser-window.svg" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Landing Pages</h6>
                                                <p class="mb-0">A great point to start from.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-secondary.html" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="/img/icons/dusk/svg/ios-photos.svg" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Secondary Pages</h6>
                                                <p class="mb-0">Build your website with these demos.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-account.html" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="/img/icons/dusk/svg/maintenance.svg" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Account Pages</h6>
                                                <p class="mb-0">Account management made easy.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-shop.html" class="list-group-item list-group-item-action">
                                        <div class="media d-flex align-items-center">
                                            <img alt="Image placeholder" src="/img/icons/dusk/svg/in-progress.svg" class="img-saturate" style="width: 50px;">
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Shop Pages</h6>
                                                <p class="mb-0">Explore the full ecommerce website flow.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/alerts.html" role="button">Components</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/introduction.html" target="_blank">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/changelog.html" target="_blank">Changelog</a>
                        </li>
                        <li class="nav-item mr-0">
                            <a   class="nav-link d-lg-none">Purchase now</a>
                            <a href="#" data-action="search-open" data-target="#search-main" class="btn btn-sm btn-danger btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="far fa-search"></i></span>
                                <span class="btn-inner--text">Search</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>