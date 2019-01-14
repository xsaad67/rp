@extends('layouts.main')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('plugins/star-rating/star-rating.css')}}">

<style>

    .custom-container {
       display: flex;
       flex-direction: row;
    }

    .custom-container>div {
        /*height: 100px;*/
        width: 100%;
        /*background-color: #b93c2f;*/
        /*border: 1px solid #626262;*/
        margin: 3px;
    }
    .p-ingredient{
        margin: 0;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        font-size: 16px;
        padding: 15px 20px 10px 30px;
    }
    ol.steps{
        list-style: none;
        counter-reset: my-awesome-counter;
    }
    ol.steps >li{
        counter-increment: my-awesome-counter;
        margin: 0;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        font-size:16px;
    }   
    ol.steps >li:before{
        content: "0" counter(my-awesome-counter);
        float: left;
        margin: 0px 13px 0 6px;
        line-height: 46px;
        font-size: 25px;
        font-weight: 700;
        line-height: 1;
        padding-bottom: 2px;
    }
</style>

@endsection

@section('content')

    <div class="extra-posts">
        <div class="extra-post-wrapper">
            <div class="columns column-2">
                <article class="extra-post-box">
                    <a href="#" class="extra-post-link">
                        <div class="post-image">
                            <span><img src="img/news-test-images/news-img9.jpg" width="80" height="80"></span>
                        </div>
                        <div class="post-title">
                            Web Design Common Mistakes and Lessons Learned
                            <span class="post-date">September 14, 2018</span>
                        </div>
                    </a>
                </article>
            </div>
            <div class="columns column-2">
                <article class="extra-post-box">
                    <a href="#" class="extra-post-link">
                        <div class="post-image">
                            <span><img src="img/news-test-images/news-img11.jpg" width="80" height="80"></span>
                        </div>
                        <div class="post-title">
                            Web Design Common Mistakes and Lessons Learned
                            <span class="post-date">September 14, 2018</span>
                        </div>
                    </a>
                </article>
            </div>
            <div class="columns column-2">
                <article class="extra-post-box">
                    <a href="#" class="extra-post-link">
                        <div class="post-image">
                            <span><img src="img/news-test-images/news-img3.jpg" width="80" height="80"></span>
                        </div>
                        <div class="post-title">
                            Web Design Common Mistakes and Lessons Learned
                            <span class="post-date">September 14, 2018</span>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </div>

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
                                <li><span>{{ html_entity_decode($recipe->title) }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="article-content"> <!-- adbox120 or adbox160 -->
                        <div class="article-header-title">
                            <h1 class="article-title">{!! $recipe->title !!}</h1>
                        </div>

                        <div class="article-inner">
                            <figure>
                                <img src="{{$recipe->image}}">
                            </figure>
                            <div class="custom-container">
                                <div>
                                    <h2>Ingredients</h2>
                                    
                                        @foreach($recipe->ingredients as $ingredient)
                                            <p class="p-ingredient">
                                                {!! $ingredient->note !!}
                                            </p>

                                        @endforeach
                                  
                                </div>

                                <div>
                                    <h2>Instructions</h2>
                                        <ol class="steps">
                                            @foreach($recipe->instructions as $instruction)
                                                <li>{{$instruction->description}}</li>
                                            @endforeach
                                        </ol>
                                </div>
                            </div>
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
            @include('layouts.content-sidebar')
        </div>
    </section>
    
@endsection


@section('footer')

<script type="text/javascript" src="{{asset('plugins/star-rating/star-rating.min.js')}}"></script>
<script>
    $(function(){

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
