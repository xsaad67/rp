    <section class="main-highlight">
        <div class="highlight-carousel">
            
            <div class="owl-carousel" id="postCarousel">
            

                @foreach($featuredRecipes as $key=>&$featured)
                
                <div class="item">

                    <article class="post-box lazy" style="background-image: url({{$featured->image}});">
                        <div class="post-overlay">
                            {{-- <a href="" class="post-category" title="Title of blog post" rel="tag"</a> --}}
                            <h3 class="post-title">{{$featured->title}}</h3>
                            <div class="post-meta">
                                <div class="post-meta-author-avatar">
                                    <img alt="avatar" src="{{$featured->chef->avatar}}" class="avatar" height="24" width="24">
                                </div>
                                <div class="post-meta-author-info">
                                    <span class="post-meta-author-name">
                                        <a href="{{$featured->chef->link}}" title="Posts by John Doe" rel="author">John Doe</a>
                                    </span>
                                    <span class="middot">·</span>
                                    <span class="post-meta-date">
                                        <abbr class="published updated" title="December 4, 2017">{{$featured->created_at->diffForHumans()}}</abbr>
                                    </span>
                                </div>

                                

                            </div>
                        </div>
                        <a href="{{$featured->link}}" class="post-overlayLink"></a>
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