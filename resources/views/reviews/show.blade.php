{{-- <div class="comment-item">
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
</div> --}}


<div class="blockquote comment">
  <p> {{ is_null($review->review) ? ucfirst($review->user->name) . " rated ".  $review->rateable->title . " recipe " .round($review->rating,1). " stars. " : $review->review }}</p>
  <div class="d-sm-flex justify-content-between align-items-center">
    <div class="testimonial-footer">
      <div class="testimonial-avatar"><img src="{{ $review->user->avatar }}" alt="Comment Author Avatar"/>
      </div>
      <div class="d-table-cell align-middle pl-2">
        <div class="blockquote-footer">{{ $review->user->name }}
          <cite>{{$review->created_at->diffForHumans()}}</cite>
        </div>
      </div>
    </div>
    {{-- <div class="pt-3"><a class="btn btn-primary btn-sm" href="#"><i class="fe-icon-corner-up-left"></i>&nbsp;Reply</a></div> --}}
  </div>
</div>