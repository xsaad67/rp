<div class="blockquote comment">
  <p style="margin-left:6px; font-size:16px;"> 
    {{ is_null($review->review) ? ucfirst($review->user->name) . " rated ".  $review->rateable->title . " recipe " .round($review->rating,1). " stars. " : ucfirst($review->review) }}
  </p>

  <div class="item-rated" data-rating="{{$review->rating}}"></div>

  <div class="d-sm-flex justify-content-between align-items-center">
    <div class="testimonial-footer">
      <div class="testimonial-avatar"><img src="{{ $review->user->avatar }}" alt="{{ $review->user->name }}"/>
      </div>
      <div class="d-table-cell align-middle pl-2">
        <div class="blockquote-footer">{{ $review->user->name }}
          <cite>{{$review->created_at->diffForHumans()}}</cite>
        </div>
      </div>
    </div>
  </div>
</div>