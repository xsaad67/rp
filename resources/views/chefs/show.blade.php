@extends('layouts.main')

@section('content')

    @foreach($recipes as $recipe)
      <div class="col-lg-3 mb-2 d-flex align-items-stretch">
        <div class="card recipe-card">
          <a href="javascript:void(0)" class="cornerimage fa-abs {{ $recipe->favoriters->contains('id',auth()->id()) ? 'favorited' : 'favorite' }}" data-id="{{$recipe->id}}">
                <i class="fe-icon-heart"></i>
            </a>
          <a href="{{ $recipe->link }}">

             
            
            <img src="{{$recipe->image}}" class="img-fluid featured-img" alt="{{ $recipe->title }}">
          </a>
          <div class="card-body">
            <p class="card-title text-truncate">{{$recipe->title}}</p>
          </div>

          <div class="card-footer">
              <a class="post-author" href="{{$recipe->chef->link}}">
                <div class="post-author-avatar">
                  <img src="{{$recipe->chef->avatar}}" alt="{{ $recipe->chef->name }}"/>
                </div>
                <div class="post-author-name">{{$recipe->chef->name}}</div>
              </a>
          </div>

        </div>
      </div>
    @endforeach


@endsection