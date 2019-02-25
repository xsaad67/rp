<div class="product-box-layout1">
    <div class="item-figure">
        
      <img data-src="{{$recipe->image}}" alt="{{$recipe->title}}" class="lazy">
      
        <a href="{{$recipe->link}}" class="item-dot">
            
        </a>
    </div>
    <div class="item-content">
        {{-- <span class="sub-title">BREAKFAST</span> --}}
        <h3 class="item-title">
            <a href="{{$recipe->link}}">{{$recipe->title}}</a>
        </h3>
        <ul class="item-rating">
            <li class="star-fill"><i class="fas fa-star"></i></li>
            <li class="star-fill"><i class="fas fa-star"></i></li>
            <li class="star-fill"><i class="fas fa-star"></i></li>
            <li class="star-fill"><i class="fas fa-star"></i></li>
            <li class="star-empty"><i class="fas fa-star"></i></li>
            <li><span>9<span> / 10</span></span> </li>
        </ul>
        <ul class="entry-meta">
            @if(!is_null($recipe->totalTIme))<li><a href="#"><i class="fas fa-clock"></i>{{$recipe->totalTIme}}</a></li>@endif
            <li><a href="#"><i class="fas fa-user"></i>by <span>{{$recipe->chef->name}}</span></a></li>
            <li><a href="#"><i class="fa fa-heart"></i><span>02</span> Likes</a></li>
        </ul>
    </div>
</div>