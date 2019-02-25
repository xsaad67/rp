@extends('layouts.main')

@section('css')

<style>
  .recipe-card {
    width:100%;
  }
  .recipe-card .featured-img{
    max-height: 175px;
    object-fit: cover;
    min-height: 175px;
    width:100%;
  }
  .recipe-card .card-title{
    font-size:0.8rem;
  }
  .fa-abs{
    position:absolute;top: 0;right: 5px; width: 50px; height: 50px; 
  }
  .cornerimage { display: block;z-index: 9;text-align: center;padding: 11px; border-radius: 50%;margin: 10px 0;cursor: pointer; color:#fff;background-color: rgba(0,0,0,0.5); text-decoration:none; font-size:20px;
}
.cornerimage > i{ padding-top:2px; }
.cornerimage:hover{ background-color: #dc2430; }
.favorited{ background-color: #dc2430; }
.favorited:hover{ background-color: rgba(0,0,0,0.5); }
</style>

@endsection

@section('content')

<div class="container">
  <div class="row">

    @foreach($recipes as $recipe)
      <div class="col-3 mb-2 d-flex align-items-stretch">
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
    
  </div>
</div>

@endsection

@section('js')
  <script src="{{asset('assets/js/admin-ajax.js')}}"></script>
@endsection

