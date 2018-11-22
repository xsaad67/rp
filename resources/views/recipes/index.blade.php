@extends('layouts.main')

@section('css')
<style>





</style>

@endsection

@section('content')
        
        
        @include('recipes.featured-slider')

        <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="content-timeline">
                        <!--Timeline header area start -->
                        <div class="post-list-header">
                            <span class="post-list-title alert alert-success">Latest stories</span>
                            <select class="frm-input">
                                <option value="1">Technology</option>
                                <option value="1">Book</option>
                                <option value="1">Cinema</option>
                            </select>
                        </div>
                      
                        <div class="post-lists">
                            @foreach($recipes as $recipe)
                                <div class="columns column-2">
                                    <div class="post-list-item">
                                        <div class="post-top">
                                            <img class="post-image lazy" data-src="{{$recipe->featuredImage}}">
                                             <span class="cornerimage unfavorite" data-zebra-tooltip="" title="Add to favorite">
                                                <i class="material-icons">favorite</i>
                                            </span>
                                            <h3 class="post-title">
                                                <a href="{{$recipe->link}}">
                                                    <span>{{$recipe->title}}</span>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="post-bottom">
                                            <div class="post-author-box">
                                                <a class="author-avatar" href="{{$recipe->chef->link}}"><img alt="avatar" data-src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" class="avatar lazy" height="24" width="24"></a>
                                                <a href="{{$recipe->chef->link}}" class="author-name">{{ucwords($recipe->chef->name)}}</a>
                                                <span class="post-date">{{$recipe->created_at->diffForHumans()}}</span>

                                            </div>
                                            <div class="post-meta">
                                                
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



@section('footer')


    <script type="text/javascript">

        //Owl carousel initializing
        $('#postCarousel').owlCarousel({
            loop:true,
            dots:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                900:{
                    items:3
                },
                1100:{
                    items:4
                },
                1400:{
                    items:5
                }
            }
        })

        //widget carousel initialize
        $('#widgetCarousel').owlCarousel({
            dots:true,
            nav:false,
            items:1
        })

    </script>


@endsection