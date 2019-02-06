@extends('layouts.main')

@section('content')

 <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="content-timeline"> 
                        <!--Timeline header area start -->
                        <div class="post-list-header">
                            <div class="post-list-title alert alert-success txt-center">Your Favorites</div>
                           
                        </div>
                      
                        <div class="post-lists">
                            <div class="infinite-scroll">
                                @forelse($favorites as $recipe)
                                    {{-- @include('recipes.recipe-card') --}}
                                @empty
                                    <div class="alert alert-warning">
                                       <h3 class="txt-center">Barm! You don't have favorited anything yet  <i class="material-icons">free_breakfast</i>  </h3>
                                        <p class="txt-center">
                                            <button class="bg-transparent btn btn-danger text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">Go Home</button>
                                        </p>
                                    </div>
                                

                                @endforelse

                            
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