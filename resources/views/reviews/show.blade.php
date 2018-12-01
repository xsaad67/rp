<div class="comment-item">
    <div class="comment-avatar">
        <span class="comment-img">
            <img src="{{ $review->user->avatar }}" width="50" height="50">
        </span>
    </div>
    <div class="comment-content">
        <div class="comment-header">
            <span class="author-name">{{ucfirst($review->user->name)}}</span> - 
            <span class="comment-date">{{$review->created_at->diffForHumans()}}</span>
            <div class="item-rated" data-rating="{{$review->rating}}"></div>
        </div>
        <div class="comment-wrapper">
            {{ is_null($review->review) ? ucfirst($review->user->name) . " rated ".  $review->rateable->title . " recipe " .round($review->rating,1). " stars. " : $review->review }}

        </div>
     
    </div>
</div>