@extends('layouts.main')

@section('css')
<style>
.jq-star{
    cursor:default !important;
}
.no-padding{
    padding:0 !important;
}
</style>

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

            @include('recipes.displayRecipe')

        @endforeach
           
        </div>
    </div>
</section>



    



@endsection

