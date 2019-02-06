@extends('layouts.main')

@section('css')

<style>
    ul.pagination{
        display:none !important;
    }
</style>
@endsection

@section('content')
        
        

        <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="content-timeline"> 
                        <!--Timeline header area start -->
                        <div class="post-list-header">
                            <span class="post-list-title alert alert-success">Latest Recipes</span>
                       
                        </div>
                      
                        <div class="post-lists">
                            <div class="infinite-scroll">
                                @foreach($recipes as $recipe)
                                {{-- {{$recipe->title}} --}}

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



@section('footer')

    <script type="text/javascript" src="{{asset('js/jscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset("js/admin-ajax.js")}}"></script>
@endsection