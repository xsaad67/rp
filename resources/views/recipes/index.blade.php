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
</style>

@endsection

@section('content')

<div class="container">
  <div class="row">
    @foreach($recipes as $recipe)
      <div class="col-3 mb-2 d-flex align-items-stretch">
        <div class="card recipe-card">
          <a href="{{ $recipe->link }}">
            
            <img src="{{$recipe->image}}" class="img-fluid featured-img" alt="{{ $recipe->title }}">
          </a>
          <div class="card-body">
            <p class="card-title text-truncate">{{$recipe->title}}</p>
          </div>

          <div class="card-footer">
              <a class="post-author" href="#">
                <div class="post-author-avatar">
                  <img src="{{$recipe->chef->dp}}" alt="Post Author"/>
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

