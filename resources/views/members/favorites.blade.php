@extends('layouts.main')

@section('content')

 <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="content-timeline"> 
                        <!--Timeline header area start -->
                        <div class="post-list-header">
                            <span class="post-list-title alert alert-success">Your Favorites</span>
                           
                        </div>
                      
                        <div class="post-lists">
                            <div class="infinite-scroll">
                                @foreach($favorites as $recipe)
                                    @include('recipes.recipe-card')

                                @endforeach

                            {{-- {{$recipes->links()}} --}}
                            </div>


                        </div>
                        <!--Timeline items end -->

                        <!--Data load more button start  -->
                       
                        <!--Data load more button start  -->
                    </div>

                </div>
               @include('layouts.main-sidebar')

              
            </div>
        </section>

@endsection