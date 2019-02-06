@extends('layouts.main')



@section('content')


        <section class="main-highlight">
            
        </section>
        <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="author-wrapper">
                        <div class="author-image">
                            <img src="{{$user->avatar}}" class="lazy" width="100" height="100">
                        </div>
                        <h2 class="author-name">{{ucwords($user->name)}}</h2>

                       
                        <p>{{$user->bio}}</p>
                        <div class="author-meta">
                            <span>Total Recipes : {{count($recipes)}}</span>
                        </div>
                    </div>
                    <div class="content-timeline">
                        

                        <!--Timeline items start -->
                        <div class="timeline-items">
                            @foreach($recipes as $recipe)

                              @include('recipes.recipe-card')

                            @endforeach
                        </div>
                        <!--Timeline items end -->

                        
                    </div>

                </div>
                @include('layouts.main-sidebar')
            </div>
        </section>



@endsection