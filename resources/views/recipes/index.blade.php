@extends('layouts.main')

@section('css')

<style>
    ul.pagination{
        display:none !important;
    }
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
                            <span class="post-list-title alert alert-success">Latest Recipes</span>
                       
                        </div>
                      
                        <div class="post-lists">
                            <div class="infinite-scroll">
                                @foreach($recipes as $recipe)
                                    @include('recipes.recipe-card')
                                @endforeach

                            {{$recipes->links()}}
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
        });

        $(function() {
            // $('.infinite-scroll').jscroll({
            //     autoTrigger: true,
            //     debug : true,
            //     loadingHtml: ' <div class="load-more"><img src="{{asset('images/loading.gif')}}"></div>',
            //     padding: 0,
            //     nextSelector: '.pagination li.active + li a',
            //     contentSelector: 'div.infinite-scroll',
            //     callback: function() {
            //         $('ul.pagination').remove();
            //     }
            // });
           
        });

    </script>
@endsection