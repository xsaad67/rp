@extends('layouts.main')

@section('css')



@endsection

@section('content')





<section class="slice slice-lg bg-secondary" data-delimiter-before="1" data-delimiter-after="1">
    <div class="container">
        <div class="mb-md text-center">
            <h3 class="heading h2">Latest from the blog</h3>
            <div class="fluid-paragraph mt-3">
                <p class="lead">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
            </div>
        </div>
        <div class="row row-grid">

        @foreach($recipes as $recipe)

            <div class="col-lg-3" style="margin-bottom:25px;">
                <div class="card shadow-sm shadow--hover">
                    <img alt="Image placeholder" src="/img/prv/img-1-800x600.jpg" class="card-img-top">
                    <div class="card-body py-5 text-center">
                        <a href="#" class="h5 lh-150">Choose the best solution for your business</a>
                        <h6 class="text-muted mt-4 mb-0">25 April, 2018</h6>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item pr-4">
                                        <a href="#" class="text-muted">
                                            <i class="far fa-bookmark mr-1 text-muted" style="color:#000;"></i> 131</a>
                                    </li>
                                    <li class="list-inline-item pr-4">
                                        <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                    </li>
                               
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach
           
        </div>
    </div>
</section>



    



@endsection

