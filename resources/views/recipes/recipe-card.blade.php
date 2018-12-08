<div class="columns column-2">
    <div class="post-list-item">
        <div class="post-top">
            <img class="post-image lazy" data-src="{{getFeaturedMedia('recipes/'.$recipe->featuredImage)}}">
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
                <a class="author-avatar" href="{{$recipe->chef->link}}">
                    <img alt="avatar" data-src="{{$recipe->chef->avatar}}" class="avatar lazy" height="24" width="24">
                </a>
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