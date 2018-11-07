@extends('layouts.main')


@section('content')


      


<section class="slice" style="margin-top:100px;">
        <form>

            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        
                    
                    </div>
                    <div class="col-lg-8">
                      
                            <div class="form-group">
                                <label class="form-control-label">Recipe Title</label>
                                <input class="form-control form-control-sm" type="text" name="title" placeholder="Title" value="{{old('title')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Short Description</label>
                                <textarea name="description" value="{{old('description')}}" class="form-control" placeholder="Short Description"></textarea>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Cuisine</label>
                                        <input class="form-control form-control-sm" type="text" name="cuisine" placeholder="Cuisine" value="{{old('cuisine')}}">
                                    </div>  
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Meal Category</label>
                                        <input class="form-control form-control-sm" type="text" name="category" placeholder="Meal Category" value="{{old('category')}}">
                                    </div>  
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Ingredients</label>
                                <textarea name="ingredients" value="{{old('ingredients')}}" class="form-control" rows="6" placeholder="Ingredients (One by one Line)"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Steps/Directions</label>
                                <textarea name="steps" value="{{old('steps')}}" class="form-control" rows="6" placeholder="Steps to make recipe (One by one Line)"></textarea>
                            </div>
                                                      
                     

                    </div>
                </div>
            </div>

        </form>
        </section>


@endsection



@section('plugin')

<script src="/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

@endsection