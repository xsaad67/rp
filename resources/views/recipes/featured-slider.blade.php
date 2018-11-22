    <section class="main-highlight">
        <div class="highlight-carousel">
            
            <div class="owl-carousel" id="postCarousel">
            

                @foreach($featuredRecipes as $key=>&$featured)
                
                <div class="item">

                    <article class="post-box" style="background-image: url(/img/news-test-images/news-img5.jpg);">
                        <div class="post-overlay">
                            <a href="#" class="post-category" title="Title of blog post" rel="tag">{{$key}}</a>
                            <h3 class="post-title">{{$featured->title}}</h3>
                            <div class="post-meta">
                                <div class="post-meta-author-avatar">
                                    <img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
                                </div>
                                <div class="post-meta-author-info">
                                    <span class="post-meta-author-name">
                                        {{-- <a href="{{$recipe->chef->link}}" title="Posts by John Doe" rel="author">John Doe</a> --}}
                                    </span>
                                    <span class="middot">·</span>
                                    <span class="post-meta-date">
                                        <abbr class="published updated" title="December 4, 2017">{{$featured->created_at->diffForHumans()}}</abbr>
                                    </span>
                                </div>

                                

                            </div>
                        </div>
                        <a href="#" class="post-overlayLink"></a>
                    </article>
                </div>
                @php
                    $featuredRecipes->forget($key);
                    if($key==10) break;
                @endphp
                @endforeach
            
            </div>

        </div>
    </section>