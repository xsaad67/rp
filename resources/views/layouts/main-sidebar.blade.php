 <div class="content-sidebar">
    <div class="sidebar_inner">

      


        <div class="widget-item">
            <h4 class="w-title">Populer Posts</h4>

           
             
            <ul class="w-post-list">
                @foreach($featuredRecipes as $featured)

                <li>
                    <a href="{{$featured->link}}">
                        <div class="w-post-image">
                            <img src="{{$featured->image}}" width="80" height="80">
                            <span>{{$loop->iteration}}</span>
                        </div>
                        <div class="w-post-content">
                            <span class="w-post-title">{{$featured->title}}</span>
                            <span class="w-post-views">{{$featured->views}} {{ str_plural("view",$featured->views) }}</span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="seperator"></div>

        <a href="#" class="widget-ad-box">
            <img src="/img/adbox300x250.png" width="300" height="250">
        </a>

        <div class="seperator"></div>

        <a href="#" class="widget-ad-box">
            <img src="/img/adbox300x250.png" width="300" height="250">
        </a>

    </div>
</div>