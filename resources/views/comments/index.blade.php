<!--article comment area start -->
<div class="article-comments">
    <div class="w-header">
        <div class="w-title">Reviews ({{count($recipe->reviews)}})</div>
        <div class="w-seperator"></div>
    </div>
    <div class="comment-form">
        <form>
            <div class="comment-columns">
               
                <div class="frm-row">
                    <div class="my-rating"></div>
                    <span class= "error hide" id="ratedErr"></span>
                </div>
            </div>
            <div class="frm-row">
                <textarea class="frm-input" id="reviewTxt" rows="4" placeholder="Your Review.."></textarea>
                <span class= "error hide" id="reviewErr"></span>
            </div>
            <div class="frm-row">
            
                <div class="columns column-2">
                    <button type="button" class="frm-button full material-button" id="reviewBtn">Review it</button>
                </div>
                <div class="clearfix"></div>
            </div>

        </form>
    </div>
    <div class="all-comments">

        @foreach($recipe->reviews as $review)
        <!-- comment item start -->
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
                </div>
                <div class="comment-wrapper">
                    {{ucfirst($review->review)}}
                </div>
                {{-- <div class="comment-meta">
                    <span class="replay-button">Replay</span>
                    <button type="button" class="comment-vote up-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">+7</span></button>
                    <button type="button" class="comment-vote down-vote"><i class="material-icons">&#xE8DC;</i> <span class="vote-count">-1</span></button>
                </div> --}}
            </div>
        </div>
        <!-- comment item end -->

        @endforeach


    </div>
</div>
<!-- article comment area start