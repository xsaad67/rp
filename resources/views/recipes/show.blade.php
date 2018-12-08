@extends('layouts.main')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('plugins/star-rating/star-rating.css')}}">



<style>



</style>

@endsection

@section('content')

    <section class="sub-highlight">


        <!-- Detail parallax start -->
        <div class="parallax-box">
            <div class="parallax-image" style="background-image: url({{$recipe->featuredImage}});"></div>
            <article class="post-box">
                <div class="post-overlay">
                    <div class="post-overlay-inner">
                        <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                        <h1 class="post-title">{{$recipe->title}} {{$recipe->id}}</h1>
                        <div class="post-meta">
                            <div class="post-meta-author-avatar">
                                <img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
                            </div>
                            <div class="post-meta-author-info">
                                <span class="post-meta-author-name">
                                    <a href="{{$recipe->chef->link}}" title="Posts by John Doe" rel="author">{{$recipe->chef->name}}</a>
                                </span>
                                <span class="middot">·</span>
                                <span class="post-meta-date">
                                    <abbr class="published updated" title="December 4, 2017">{{$recipe->created_at->diffForHumans()}}</abbr>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <!-- Detail parallax end -->

    </section>
    <section class="main-content">
        <div class="main-content-wrapper">
            <div class="content-body">

                <!-- article body start -->
                <article class="article-wrapper">
                    <div class="article-header">
                        <div class="breadcrumb">
                            <ul>
                                <li><a href="#"><span>Home</span></a> <i class="material-icons">&#xE315;</i></li>
                                <li><a href="#"><span>Technology</span></a> <i class="material-icons">&#xE315;</i></li>
                                <li><span>{{$recipe->title}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="article-content"> <!-- adbox120 or adbox160 -->
                        <div class="article-left-box">
                            <div class="article-left-box-inner">
                                <div class="article-share">
                                    <a href="#" class="facebook"></a>
                                    <a href="#" class="twitter"></a>
                                    <a href="#" class="google-plus"></a>
                                </div>
                                <span class="add-to-favorite" data-zebra-tooltip title="Ad to favorite">
                                    <i class="material-icons">&#xE866;</i>
                                </span>
                                <ul class="article-emoticons">
                                    <li>
                                        <a href="#" class="popular happy"></a><span>13</span>
                                        <ul>
                                            <li><a href="#" class="love"></a><span>7</span></li>
                                            <li><a href="#" class="shocked"></a><span>5</span></li>
                                            <li><a href="#" class="angry"></a><span>4</span></li>
                                            <li><a href="#" class="crying"></a><span>1</span></li>
                                            <li><a href="#" class="sleepy"></a><span>0</span></li>
                                        </ul>
                                    </li>                                       
                                </ul>
                            </div>
                        </div>
                        <div class="article-inner">
                            <div class="article-description">
                                {{$recipe->description}}
                            </div>
                           
                            <ul>
                                <li>galley of type and scrambled</li>
                                <li>text of the printing</li>
                                <li>lorem Ipsum has been the industry</li>
                                <li>and more recently with desktop</li>
                            </ul>
                           
                          
                            <!-- article sources area start -->
                            <div class="article-source-box">
                                <div class="source-item">
                                    <span class="source-subtitle">Source : </span>
                                    <span class="source-url">https://themeforest.net/item/ideabox-mobile-web-ui-template/20489553</span>
                                </div>
                                <div class="source-item">
                                    <span class="source-subtitle">Source : </span>
                                    <span class="source-url">https://help.market.envato.com/hc/en-us/articles/202499864-How-to-Withdraw-Earnings</span>
                                </div>
                            </div>
                            <!-- article sources area end -->
                            
                            <!-- article tags area start -->
                            <div class="article-tags">
                                <span class="tag-subtitle">Tags : </span>
                                <a href="#">theme</a><span class="tag-dot"></span>
                                <a href="#">template</a><span class="tag-dot"></span>
                                <a href="#">mobile ui</a>
                            </div>
                            <!-- article tags area end -->
                        </div>

                        <!--this is important for the left ad box or share box fixer -->
                        <div id="endOfTheArticle"></div>

                        <!-- More article unit start -->
                        <div class="more-article">
                            <div class="w-header">
                                <div class="w-title">Continue Reading</div>
                                <div class="w-seperator"></div>
                            </div>
                            <div class="more-posts">
                                <div class="columns column-2">

                                    <article class="post-box" style="background-image: url(/img/news-test-images/news-img5.jpg);">
                                        <div class="post-overlay">
                                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                            <h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
                                            <div class="post-meta">
                                                <div class="post-meta-author-avatar">
                                                    <img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
                                                </div>
                                                <div class="post-meta-author-info">
                                                    <span class="post-meta-author-name">
                                                        <a href="#" title="Posts by John Doe" rel="author">John Doe</a>
                                                    </span>
                                                    <span class="middot">·</span>
                                                    <span class="post-meta-date">
                                                        <abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="post-overlayLink"></a>
                                    </article>

                                </div>
                                <div class="columns column-2">

                                    <article class="post-box" style="background-image: url(/img/news-test-images/news-img1.jpg);">
                                        <div class="post-overlay">
                                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                            <h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
                                            <div class="post-meta">
                                                <div class="post-meta-author-avatar">
                                                    <img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
                                                </div>
                                                <div class="post-meta-author-info">
                                                    <span class="post-meta-author-name">
                                                        <a href="#" title="Posts by John Doe" rel="author">John Doe</a>
                                                    </span>
                                                    <span class="middot">·</span>
                                                    <span class="post-meta-date">
                                                        <abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="post-overlayLink"></a>
                                    </article>

                                </div>
                                <div class="columns column-2">

                                    <article class="post-box" style="background-image: url(/img/news-test-images/news-img6.jpg);">
                                        <div class="post-overlay">
                                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                            <h3 class="post-title">Slipknot’s Concert in Phoenix Showed Why Mayhem Fest Died</h3>
                                            <div class="post-meta">
                                                <div class="post-meta-author-avatar">
                                                    <img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
                                                </div>
                                                <div class="post-meta-author-info">
                                                    <span class="post-meta-author-name">
                                                        <a href="#" title="Posts by John Doe" rel="author">John Doe</a>
                                                    </span>
                                                    <span class="middot">·</span>
                                                    <span class="post-meta-date">
                                                        <abbr class="published updated" title="December 4, 2017">12 November 2018</abbr>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="post-overlayLink"></a>
                                    </article>

                                </div>
                                

                            </div>
                        </div>
                        <!-- More article unit end -->
                   
                        <!--article comment area start -->
                            <div class="article-comments">
                                <div class="w-header">
                                    <div class="w-title">Reviews ({{count($recipe->ratings)}})</div>
                                    <div class="w-seperator"></div>
                                </div>
                                @auth
                                <div class="comment-form">
                                    <form>
                                        <div class="comment-columns">
                                           
                                            <div class="frm-row">
                                                <div class="my-rating" data-rating="0"></div>
                                                <span class= "error hide" id="ratedErr"></span>
                                            </div>
                                        </div>
                                        <div class="frm-row">
                                            <textarea class="frm-input" id="reviewTxt" rows="4" placeholder="Your Review.."></textarea>
                                            <span class= "error hide" id="reviewErr"></span>
                                        </div>
                                        <div class="frm-row">
                                        
                                            <div class="columns column-2">
                                                <button type="button" class="frm-button full material-button" id="reviewBtn">Your Review</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </form>
                                </div>
                                @endauth

                                @guest You must be <a href="/login">Logged In</a> to write a review @endguest
                                <div class="all-comments">
                                
                                    @foreach($recipe->ratings as $review)
                                        <!-- comment item start -->
                                        @include('reviews.show')
                                        <!-- comment item end -->
                                    @endforeach


                                </div>
                            </div>
                        <!-- article comment area start -->

                       

                    </div>
                </article>
                

            </div>
            @include('layouts.main-sidebar')
        </div>
    </section>
    
@endsection


@section('footer')

<script type="text/javascript" src="{{asset('plugins/star-rating/star-rating.min.js')}}"></script>
<script>

   

    $(function(){

        printToast();


        //Initialize Rating plugin

        var rating = "";
        var recipeId = "{{$recipe->id}}";

        var reviewLink = "/reviews/recipe/"+recipeId;

        $(".my-rating").starRating({
          totalStars: 5,
          starShape: 'rounded',
          starSize: 40,
          activeColor: '#000',
          disableAfterRate: false,
            onLeave: function(currentIndex, currentRating, $el){
              rating = currentRating;

            }
        });

        //Ends Initialize
        

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });


        $("#reviewBtn").click(function(){
        
        $("#reviewTxt").val();

        $.ajax({
            type:'POST',
            url:reviewLink,
            data:{ rating: rating, review: $("#reviewTxt").val() },
            context: this,
            success:function(data){
                $(".all-comments").prepend(data.html);
                loadStarSvg();
    
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

@endsection
