@extends('layouts.main')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('plugins/star-rating/star-rating.css')}}">

<style>

    .custom-container {
       display: flex;
       flex-direction: row;
    }

    .custom-container>div {
        width: 100%;
        margin: 3px;
    }
    .p-ingredient > a{
        text-decoration: none;
        font-weight: 600;

    }
    .p-ingredient >a:hover{
        font-size:18px;
        color:#84408d;
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
        border-bottom: 1px dotted #bdb6b7;
        font-size:16px;
    }   
    ol.steps >li:before{
        content: counter(my-awesome-counter);
        float: left;
        margin: 0px 13px 0 6px;
        line-height: 46px;
        font-size: 25px;
        font-weight: 700;
        line-height: 1;
        padding-bottom: 2px;
        color:#84408d;
    }

.user-avatar {
    position: relative;
}
.user-avatar{
    margin-right: 0;
    width: auto;
    display: block;
    padding-right: 0;
}
.user-avatar > a{
    display: inline-block;
    background: #fff;
    border-radius: 50%;
    -webkit-font-smoothing: antialiased;
    transition: transform .3s,box-shadow .3s;
    top:-50px;
    left:45%;
    position:absolute;
}
.user-avatar > a:hover{
    -ms-transform: scale(1.04);
    transform: scale(1.04);

}
.user-avatar > a> img{
    border-radius: 50%;
    margin: 0;
    border: 3px solid #84408d;
    max-width: 100px;
}
.featuredMedia{
    width:100%;
    box-shadow: 0 0 7px rgba(0,0,0,.25);
    border-radius: 5px;
    max-height:350px;
}
.author-info{
    margin-top:60px;
    font-size:16px;
    font-weight:600;
}
.author-info > a.name{
    font-weight: 700;
    font-size:18px;
    text-decoration: none;
}
.author-info > a.name:hover{
    font-size:22px;
}
.cm-1{
    margin-top:15px;
}
.single-meta{
    background-color: #ecf6f6;
    padding: 10px 0px;
    margin-bottom: 60px;
    border-radius: 6px;
}
.single-meta ul{
    list-style: none;
    padding: 0px;
    text-align: center;
}
.single-meta ul li{
    font-weight: 400;
    font-size: 18px;
    display: inline-block;
    border-right: 1px solid rgba(0,0,0,0.1);
    padding: 0 16px;
}
.single-meta ul li:last-child {
   border-right: 0;
}
.single-meta ul li span{
    vertical-align: middle;
        color: #7d4294;
    font-weight: 600;
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
                                <li><span>{{ html_entity_decode($recipe->title) }}</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="article-content"> 
                        <div class="article-header-title">
                            
                        </div>

                        <div class="article-inner">
                            <figure>
                                <img src="{{$recipe->image}}" class="featuredMedia">
                            </figure>


                            <div class="user-avatar">
                                <a href="//www.foodnetwork.com/profiles/talent/ina-garten" class="user-avatar">
                                    <img class="o-Attribution__a-Image" src="/images/avatars/avatar-0B0B183A-3F37-674D-0A69-B8AF3B67A19E-1544945290.jpg">
                                </a>
                            </div>

                            <div class="txt-center author-info">
                                Recipe by <a href="{{$recipe->chef->link}}" class="name color-red"> {{ucwords($recipe->chef->name)}} 
                                </a>
                            </div>

                            <div class="txt-center article-header-title cm-1">
                                <h1 class="article-title">{!! $recipe->title !!}</h1>
                                <p class="description"><i>{!! $recipe->description !!}</i></p>
                            </div>


                            <div class="single-meta">

                                <ul>
                                    @if(!is_null($preprationTime))

                                        <li class="single-meta-cooking-time">
                                            <b>Prep:</b>
                                            <span>{{$preprationTime}}</span>
                                        </li>

                                    @endif

                                    <li class="single-meta-serves">
                                        <b>Serves:</b>
                                        <span>{{$recipe->serves}} {{ str_plural("serving", $recipe->serves) }}</span>
                                    </li>   
                                    @if(!is_null($cookingTime))

                                        <li class="single-meta-difficulty">
                                            <b>Cook Time: </b>
                                            <span>{{$cookingTime}}</span>
                                        </li>   
                                    @endif  


                                </ul>

                            </div>

                            <div class="custom-container">
                                <div>
                                    <h2 class="txt-center color-red">Ingredients</h2>
                                        @foreach($recipe->ingredients as $ingredient)
                                            <p class="p-ingredient">
                                               
                                                {!! preg_replace('/\b'.$ingredient->ingrident.'\b/', '<a href="/ingredient/'.$ingredient->ingrident.'">'.$ingredient->ingrident.'</a>', trim(strtolower($ingredient->note))) !!}    
                                            </p>
                                        @endforeach
                                  
                                </div>

                                <div>
                                    <h2 class="txt-center color-red">Instructions</h2>
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
            @include('layouts.main-sidebar')
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

            var reviewLink = "/member/reviews/recipe/"+recipeId;

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
