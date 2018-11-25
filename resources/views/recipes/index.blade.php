@extends('layouts.main')

@section('css')
<style>





</style>

@endsection

@section('content')
        
        
        @include('recipes.featured-slider')

        <section class="main-content">
            <div class="main-content-wrapper">
                <div class="content-body">
                    <div class="content-timeline">
                        <!--Timeline header area start -->
                        <div class="post-list-header">
                            <span class="post-list-title alert alert-success">Latest stories</span>
                            <select class="frm-input">
                                <option value="1">Technology</option>
                                <option value="1">Book</option>
                                <option value="1">Cinema</option>
                            </select>
                        </div>
                      
                        <div class="post-lists">
                            @foreach($recipes as $recipe)
                                @include('recipes.recipe-card')

                            @endforeach

                        </div>
                        <!--Timeline items end -->

                        <!--Data load more button start  -->
                        <div class="load-more">
                            <button class="load-more-button material-button" type="button">
                                <i class="material-icons">&#xE5D5;</i>
                                <span>Load More</span>
                            </button>
                        </div>
                        <!--Data load more button start  -->
                    </div>

                </div>
               @include('layouts.main-sidebar')

              
            </div>
        </section>


    



@endsection



@section('footer')


    <script type="text/javascript">

        //Owl carousel initializing
        $('#postCarousel').owlCarousel({
            loop:true,
            dots:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                900:{
                    items:3
                },
                1100:{
                    items:4
                },
                1400:{
                    items:5
                }
            }
        })

        //widget carousel initialize
        $('#widgetCarousel').owlCarousel({
            dots:true,
            nav:false,
            items:1
        })

    </script>


@endsection