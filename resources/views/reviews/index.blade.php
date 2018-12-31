@extends('layouts.main')


@section('content')

<section class="main-highlight"></section>

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
                    @foreach($ratings as $rating)

                        <div class="timeline-item">
                            <div class="timeline-left">
                                <div class="timeline-left-wrapper">
                                    <a href="#" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
                                    <span class="timeline-date">{{$rating->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                            <div class="timeline-right">
                                <div class="timeline-post-image">
                                    <a href="#">
                                        <img width="260" class="lazy" data-src="{{$rating->rateable->featuredImage}}">
                                        <span class="cornerimage unfavorite" data-zebra-tooltip="" title="Add to favorite">
                                        <i class="material-icons">favorite</i>
                                    </span>
                                    </a>
                                </div>
                                <div class="timeline-post-content">
                                    <a href="#" class="timeline-category-name">Technology</a>
                                    <a href="#">
                                        <h3 class="timeline-post-title">{{$rating->rateable->title}}</h3>
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
        @include('layouts.main-sidebar')
    </div>
</section>

@endsection
