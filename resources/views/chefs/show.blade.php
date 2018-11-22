@extends('layouts.main')



@section('content')





        <section class="main-highlight">
            
        </section>
        <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="author-wrapper">
                        <div class="author-image">
                            <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="lazy" width="100" height="100">
                        </div>
                        <h2 class="author-name">John Doe</h2>

                       
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                        <div class="author-meta">
                            <span>Website : </span>
                            <a href="#" rel="nofollow">www.envato.com</a>&nbsp;&nbsp;&nbsp;<span>Posts : 57</span>
                        </div>
                    </div>
                    <div class="content-timeline">
                        

                        <!--Timeline items start -->
                        <div class="timeline-items">
                            @foreach($recipes as $recipe)

                                <div class="timeline-item">
                                    <div class="timeline-left">
                                        <div class="timeline-left-wrapper">
                                            <a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
                                            <span class="timeline-date">{{$recipe->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                    <div class="timeline-right">
                                        <div class="timeline-post-image">
                                            <a href="#">
                                                <img width="260" class="lazy" data-src="{{$recipe->featuredImage}}">
                                                <span class="cornerimage unfavorite" data-zebra-tooltip="" title="Add to favorite">
                                                <i class="material-icons">favorite</i>
                                            </span>
                                            </a>
                                        </div>
                                        <div class="timeline-post-content">
                                            <a href="#" class="timeline-category-name">Technology</a>
                                            <a href="#">
                                                <h3 class="timeline-post-title">{{$recipe->title}}</h3>
                                            </a>
                                            <div class="timeline-post-info">
                                                <a href="#" class="author">Tevrat Gündoğdu</a>
                                                <span class="dot"></span>
                                                <span class="comment">32 comments</span>
                                                 <div class="article-share post-share">
                                                    <a href="#" class="facebook"></a>
                                                    <a href="#" class="twitter"></a>
                                                    <a href="#" class="google-plus"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <!--Timeline items end -->

                        <!--Data load more button start  -->
                        <div class="load-more">
                            <button class="load-more-button material-button" type="button">
                                <i class="material-icons">&#xE5D5;</i>
                                <span>Load More</span>
                            </button>
                        </div>
                        <!--Data load more button start  -->
                    </div>

                </div>
                <div class="content-sidebar">
                    <div class="sidebar_inner">

                        <div class="widget-item">
                            <a href="#" class="widget-ad-box">
                                <img src="img/adbox300x600.png" width="300" height="600">
                            </a>
                        </div>

                        <div class="widget-item">
                            <div class="w-header">
                                <div class="w-title">Editor's Picks</div>
                                <div class="w-seperator"></div>
                            </div>
                            <div class="w-boxed-post">
                                <ul>
                                    <li class="active">
                                        <a href="#" style="background-image: url(img/news-test-images/news-img7.jpg);">
                                            <div class="box-wrapper">
                                                <div class="box-left">
                                                    <span>1</span>
                                                </div>
                                                <div class="box-right">
                                                    <h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
                                                    <div class="p-icons">
                                                        213 likes . 124 comments
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-image: url(img/news-test-images/news-img5.jpg);">
                                            <div class="box-wrapper">
                                                <div class="box-left">
                                                    <span>2</span>
                                                </div>
                                                <div class="box-right">
                                                    <h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
                                                    <div class="p-icons">
                                                        213 likes . 124 comments
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-image: url(img/news-test-images/news-img6.jpg);">
                                            <div class="box-wrapper">
                                                <div class="box-left">
                                                    <span>3</span>
                                                </div>
                                                <div class="box-right">
                                                    <h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
                                                    <div class="p-icons">
                                                        213 likes . 124 comments
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-image: url(img/news-test-images/news-img3.jpg);">
                                            <div class="box-wrapper">
                                                <div class="box-left">
                                                    <span>4</span>
                                                </div>
                                                <div class="box-right">
                                                    <h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
                                                    <div class="p-icons">
                                                        213 likes . 124 comments
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <a href="#" class="widget-ad-box">
                            <img src="img/adbox300x250.png" width="300" height="250">
                        </a>

                    </div>
                </div>
            </div>
        </section>



@endsection