@extends('layouts.main')


@section('content')



        <!-- Detail extra post start -->
      {{--   <div class="extra-posts">
            <div class="extra-post-wrapper">
                <div class="columns column-2">
                    <article class="extra-post-box">
                        <a href="#" class="extra-post-link">
                            <div class="post-image">
                                <span><img src="/img/news-test-images/news-img9.jpg" width="80" height="80"></span>
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
                                <span><img src="/img/news-test-images/news-img11.jpg" width="80" height="80"></span>
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
                                <span><img src="/img/news-test-images/news-img3.jpg" width="80" height="80"></span>
                            </div>
                            <div class="post-title">
                                Web Design Common Mistakes and Lessons Learned
                                <span class="post-date">September 14, 2018</span>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </div> --}}
        <!-- Detail extra post start -->

        <section class="sub-highlight">

            <!-- Detail parallax start -->
            <div class="parallax-box">
                <div class="parallax-image" style="background-image: url({{$recipe->featuredImage}});"></div>
                <article class="post-box">
                    <div class="post-overlay">
                        <div class="post-overlay-inner">
                            <a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
                            <h1 class="post-title">{{$recipe->title}}</h1>
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

                            <!-- article comment area start -->
                            <div class="article-comments">
                                <div class="w-header">
                                    <div class="w-title">Comments (7)</div>
                                    <div class="w-seperator"></div>
                                </div>
                                <div class="comment-form">
                                    <form>
                                        <div class="comment-columns">
                                            <div class="frm-row columns column-2">
                                                <input type="text" name="n" placeholder="Name" class="frm-input">
                                            </div>
                                            <div class="frm-row columns column-2">
                                                <input type="text" name="e" placeholder="Email" class="frm-input">
                                            </div>
                                            <div class="frm-row columns column-2">
                                                <input type="text" name="w" placeholder="Website" class="frm-input">
                                            </div>
                                        </div>
                                        <div class="frm-row">
                                            <textarea class="frm-input" rows="4" placeholder="Your comments..."></textarea>
                                        </div>
                                        <div class="frm-row">
                                            <div class="comment-form-notice columns column-4">
                                                <div>Your comments must be minimum 30 charachter.</div>
                                                <div>You are commenting as a visitor, you can <a href="#" data-modal="loginModal">login</a> or <a href="#" data-modal="registerModal">register</a></div>
                                            </div>
                                            <div class="columns column-2">
                                                <button type="button" class="frm-button full material-button">Send your comment</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                
                                    </form>
                                </div>
                                <div class="all-comments">

                                    <!-- comment item start -->
                                    <div class="comment-item">
                                        <div class="comment-avatar">
                                            <span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" width="50" height="50"></span>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <span class="author-name">Visitor</span> - 
                                                <span class="comment-date">3 hours ago</span>
                                            </div>
                                            <div class="comment-wrapper">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            </div>
                                            <div class="comment-meta">
                                                <span class="replay-button">Replay</span>
                                                <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
                                                <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- comment item end -->

                                    <!-- comment item start -->
                                    <div class="comment-item">
                                        <div class="comment-avatar">
                                            <span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" width="50" height="50"></span>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <span class="author-name">Visitor</span> - 
                                                <span class="comment-date">3 hours ago</span>
                                            </div>
                                            <div class="comment-wrapper">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </div>
                                            <div class="comment-meta">
                                                <span class="replay-button">Replay</span>
                                                <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+2</span></button>
                                                <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- comment item end -->

                                    <!-- comment item start -->
                                    <div class="comment-item">
                                        <div class="comment-avatar">
                                            <span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <a href="#" class="author-name">Mr. Spock</a> - 
                                                <span class="comment-date">3 hours ago</span>
                                            </div>
                                            <div class="comment-wrapper">
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            </div>
                                            <div class="comment-meta">
                                                <span class="replay-button">Replay</span>
                                                <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+1</span></button>
                                                <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-12</span></button>
                                            </div>

                                            <!-- comment item start -->
                                            <div class="comment-item">
                                                <div class="comment-avatar">
                                                    <span class="comment-img"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y" width="50" height="50"></span>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-header">
                                                        <span class="author-name">Visitor</span> - 
                                                        <span class="comment-date">3 hours ago</span>
                                                    </div>
                                                    <div class="comment-wrapper">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                    </div>
                                                    <div class="comment-meta">
                                                        <span class="replay-button">Replay</span>
                                                        <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
                                                        <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
                                                    </div>

                                                    <!-- comment item start -->
                                                    <div class="comment-item">
                                                        <div class="comment-avatar">
                                                            <span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-header">
                                                                <a href="#" class="author-name">Mr. Spock</a> - 
                                                                <span class="comment-date">3 hours ago</span>
                                                            </div>
                                                            <div class="comment-wrapper">
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                            </div>
                                                            <div class="comment-meta">
                                                                <span class="replay-button">Replay</span>
                                                                <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
                                                                <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- comment item end -->

                                                </div>
                                            </div>
                                            <!-- comment item end -->

                                            <!-- comment item start -->
                                            <div class="comment-item">
                                                <div class="comment-avatar">
                                                    <span class="comment-img"><img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" width="50" height="50"></span>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-header">
                                                        <a href="#" class="author-name">Mr. Spock</a> - 
                                                        <span class="comment-date">3 hours ago</span>
                                                    </div>
                                                    <div class="comment-wrapper">
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                    </div>
                                                    <div class="comment-meta">
                                                        <span class="replay-button">Replay</span>
                                                        <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
                                                        <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- comment item end -->

                                        </div>
                                    </div>
                                    <!-- comment item end -->

                                </div>
                            </div>
                            <!-- article comment area start -->

                        </div>
                    </article>
                    <!-- article body end -->

                    <!-- article body start -->
                    <!--
                    <article class="article-wrapper">
                        <div class="article-header">
                            
                        </div>
                        <div class="article-content">
                            <div class="article-share">
                                <div class="article-share-inner">
                                    
                                </div>
                            </div>
                            <div class="article-inner">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                <br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </article>
                    -->
                    <!-- article body end -->
                    

                </div>
                <div class="content-sidebar">
                    <div class="sidebar_inner">

                        <div class="widget-item">
                            <div class="w-header">
                                <div class="w-title">Editor's Picks</div>
                                <div class="w-seperator"></div>
                            </div>
                            <div class="w-boxed-post">
                                <ul>
                                    <li class="active">
                                        <a href="#" style="background-image: url(/img/news-test-images/news-img7.jpg);">
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
                                        <a href="#" style="background-image: url(/img/news-test-images/news-img5.jpg);">
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
                                        <a href="#" style="background-image: url(/img/news-test-images/news-img6.jpg);">
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
                                        <a href="#" style="background-image: url(/img/news-test-images/news-img3.jpg);">
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

                        <div class="widget-item">
                            <div class="w-header">
                                <div class="w-title">Carousel Posts</div>
                                <div class="w-seperator"></div>
                            </div>
                            <div class="w-carousel-post">
                                <div class="owl-carousel" id="widgetCarousel">
                                    <div class="item">
                                        <a href="#">
                                            <div class="w-play-img">
                                                <img src="/img/news-test-images/news-img4.jpg" width="300">
                                                <span class="w-video-icon"><i class="material-icons">&#xE038;</i></span>
                                            </div>
                                            <span class="w-post-title">It has roots in a piece of classical Latin literature from</span>
                                            
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="/img/news-test-images/news-img5.jpg" width="300">
                                            <span class="w-post-title">Lorem Ipsum used since</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="/img/news-test-images/news-img6.jpg" width="300">
                                            <span class="w-post-title">English versions from the 1914 translation</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="/img/news-test-images/news-img7.jpg" width="300">
                                            <span class="w-post-title">The standard chunk of Lorem Ipsum used since</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <a href="#" class="widget-ad-box">
                            <img src="/img/adbox300x250.png" width="300" height="250">
                        </a>

                    
                    </div>
                </div>
            </div>
        </section>




@endsection