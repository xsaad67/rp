@extends('layouts.main')

@section('css')
<style>

.cornerimage { 
    display: block;
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 11px;
    border-radius: 50%;
    margin: 10px 0;
    cursor: pointer;
    position: absolute;
    top: 0;
    right: 5px;
    color:#fff;
    background-color: rgba(0,0,0,0.5);
}
.cornerimage > i{ padding-top:2px; }
.cornerimage:hover{ background-color: #dc2430; }
.favorited{ background-color: #dc2430; }
.favorited:hover{ background-color: rgba(0,0,0,0.5); }
.article-share.post-share{ display:flex; }
.article-share.post-share > a{ margin-right:5px; margin-top:10px; }

</style>

@endsection

@section('content')


<section class="main-highlight">
            <div class="highlight-carousel">
                
                <div class="owl-carousel" id="postCarousel">
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img5.jpg);">
                            <div class="post-overlay">
                                <a href="" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">Instagram will soon let you download your data, just like Facebook</h3>
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
                     <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img1.jpg);">
                            <div class="post-overlay">
                                <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">Amazon Go pioneers grocery shopping without checkout lines</h3>
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img2.jpg);">
                            <div class="post-overlay">
                                <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">Making sense of the FBI’s abrupt Apple trial postponement</h3>
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img3.jpg);">
                            <div class="post-overlay">
                                <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">It’s time for Google to retire Chromecast for Android TV</h3>
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img4.jpg);">
                            <div class="post-overlay">
                                <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">Making sense of the FBI’s abrupt Apple trial postponement</h3>
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img6.jpg);">
                            <div class="post-overlay">
                                <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">Making sense of the FBI’s abrupt Apple trial postponement</h3>
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img7.jpg);">
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img8.jpg);">
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img9.jpg);">
                            <div class="post-overlay">
                                <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                                <h3 class="post-title">Making sense of the FBI’s abrupt Apple trial postponement</h3>
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
                    <div class="item">

                        <article class="post-box" style="background-image: url(img/news-test-images/news-img10.jpg);">
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
</section>
<<<<<<< HEAD

<section class="main-content">
    <div class="main-content-wrapper">
        <div class="content-body">
            <div class="content-timeline">

                {{-- Timeline header area start 
                <div class="post-list-header">
                    <span class="post-list-title">Latest stories</span>
                    <select class="frm-input">
                        <option value="1">Technology</option>
                        <option value="1">Book</option>
                        <option value="1">Cinema</option>
                    </select>
                </div>
                --}}
=======
        <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="content-timeline">
                        <!--Timeline header area start -->
                        <div class="post-list-header">
                            <span class="post-list-title">Latest stories</span>
                            <select class="frm-input">
                                <option value="1">Technology</option>
                                <option value="1">Book</option>
                                <option value="1">Cinema</option>
                            </select>
                        </div>
                        <!--Timeline header area end -->
>>>>>>> c07d2968d776e426f6bd681bc982cf6eaffac056


                <!--Timeline items start -->
                <div class="timeline-items">

<<<<<<< HEAD
                    @foreach($recipes as $recipe)

                        <div class="timeline-item">
                            <div class="timeline-left">
                                <div class="timeline-left-wrapper">
                                    <a href="" class="timeline-category" data-zebra-tooltip title="Technology"><i class="material-icons">&#xE894;</i></a>
                                    <span class="timeline-date">{{$recipe->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                            <div class="timeline-right">
                                <div class="timeline-post-image">
                                    <a href="{{$recipe->link}}">
                                        <img src="img/news-test-images/news-img8.jpg" width="260">
                                    </a>
                                </div>
                                <div class="timeline-post-content">
                                    <a href="" class="timeline-category-name">Technology</a>
                                    <a href="{{$recipe->link}}">
                                        <h3 class="timeline-post-title">{{$recipe->title}}</h3>
                                    </a>


=======
                            @foreach($recipes as $recipe)

                            <div class="timeline-item">
                                <div class="timeline-left">
                                    <div class="timeline-left-wrapper">
                                        <a href="#" class="timeline-category" data-zebra-tooltip title="Technology">
                                            <i class="material-icons">&#xE894;</i></a>
                                        <span class="timeline-date">3 min ago</span>
                                    </div>
                                </div>
                                <div class="timeline-right">
                                    <div class="timeline-post-image">
                                        <a href="#">
                                            <img src="img/news-test-images/news-img8.jpg" width="260">

                                            <span class="cornerimage favorited" data-zebra-tooltip="" title="Add to favorite">
                                                <i class="material-icons">favorite</i>
                                            </span>

                                        </a>
                                    </div>
                                    <div class="timeline-post-content">
                                        <a href="#" class="timeline-category-name">Technology</a>
                                        <a href="#">
                                            <h3 class="timeline-post-title">{{$recipe->title}}</h3>
                                        </a>
                                        {{-- <div class="timeline-post-info">
                                            <a href="#" class="author">Tevrat Gündoğdu</a>
                                            <span class="dot"></span>
                                            <span class="comment">32 comments</span>
                                        </div> --}}

                                        <div class="blog-author">
                                            <span class="author-avatar">
                                                <img alt="avatar" src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" class="avatar" height="24" width="24" style="border-radius:50%;">
                                            </span>
                                            <a href="#" class="author-name">{{$recipe->chef->name}}</a>
                                        </div>

                                        <div class="article-share post-share">
                                            <a href="#" class="facebook"></a>
                                            <a href="#" class="twitter"></a>
                                            <a href="#" class="google-plus"></a>
                                        </div>
                                    </div>
>>>>>>> c07d2968d776e426f6bd681bc982cf6eaffac056
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
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
                    <h4 class="w-title">Populer Posts</h4>
                    <ul class="w-post-list">
                        <li>
                            <a href="#">
                                <div class="w-post-image">
                                    <img src="img/news-test-images/news-img1.jpg" width="80" height="80">
                                    <span>1</span>
                                </div>
                                <div class="w-post-content">
                                    <span class="w-post-title">Things to Consider When Choosing City Moving Companies</span>
                                    <span class="w-post-views">356 views</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="w-post-image">
                                    <img src="img/news-test-images/news-img2.jpg" width="80" height="80">
                                    <span>2</span>
                                </div>
                                <div class="w-post-content">
                                    <span class="w-post-title">Things to Consider When Choosing City Moving Companies</span>
                                    <span class="w-post-views">356 views</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="w-post-image">
                                    <img src="img/news-test-images/news-img3.jpg" width="80" height="80">
                                    <span>3</span>
                                </div>
                                <div class="w-post-content">
                                    <span class="w-post-title">Things to Consider When Choosing City Moving Companies</span>
                                    <span class="w-post-views">356 views</span>
                                </div>
                            </a>
                        </li>
                    </ul>
=======
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

>>>>>>> c07d2968d776e426f6bd681bc982cf6eaffac056
                </div>

                <div class="seperator"></div>

                 <a href="#" class="widget-ad-box">
                    <img src="img/adbox300x250.png" width="300" height="250">
                </a>
               

                <a href="#" class="widget-ad-box">
                    <img src="img/adbox300x250.png" width="300" height="250">
                </a>

            </div>
        </div>
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