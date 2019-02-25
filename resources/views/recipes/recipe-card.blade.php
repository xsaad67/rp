<div class="columns column-2">
    <div class="post-list-item">
        <div class="post-top">
            <img class="post-image lazy" data-src="{{$recipe->image}}">
            {{-- @php dump($recipe->favorite) @endphp --}}
            <a href="javascript:void(0)" class="cornerimage {{ $recipe->favoriters->contains('id',auth()->id()) ? 'favorited' : 'favorite' }}" data-id="{{$recipe->id}}">
                <i class="material-icons">favorite</i>
            </a>
            <h3 class="post-title">
                <a href="{{$recipe->link}}">
                    <span>{{ $recipe->title }}</span>
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