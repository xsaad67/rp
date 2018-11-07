@extends('layouts.main')



@section('css')

<style type="text/css">

    #image-preview {
      
      height: 300px;
      position: relative;
      overflow: hidden;
      background-color: #d8d3d3;
      color: #fff;
    }
    #image-preview input {
      line-height: 200px;
      font-size: 200px;
      position: absolute;
      opacity: 0;
      z-index: 10;
    }
    #image-preview label {
      position: absolute;
      z-index: 5;
      opacity: 0.8;
      cursor: pointer;
      background-color: #510fa8;
      width: 200px;
      height: 50px;
      font-size: 20px;
      line-height: 50px;
      text-transform: uppercase;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      text-align: center;
    }

</style>

@endsection


@section('content')


      


<section class="slice" style="margin-top:100px;">

    <form method="POST" action="{{action('RecipeController@store')}}">
        @csrf
        <div class="container">
            <div class="row row-grid">
                <div class="col-lg-4">

                    <div class="form-group">
                        <label class="form-control-label">Upload Image</label>
                        <div id="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Cooking Time</label>
                                <input class="form-control form-control-sm" type="text" name="cooktime" placeholder="In Minutes" value="{{old('cooktime')}}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Prepration Time</label>
                                <input class="form-control form-control-sm" type="text" name="preptime" placeholder="In Minutes" value="{{old('preptime')}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Number of Servings</label>
                                <input class="form-control form-control-sm" type="text" name="yield" placeholder="Yield(Servings)" value="{{old('yield')}}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Cooking Temprature</label>
                                <input class="form-control form-control-sm" type="text" name="cooktemp" placeholder="Temprature" value="{{old('cooktemp')}}">
                            </div>
                        </div>
                    </div>
                
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


                        <button class="btn btn-primary offset-lg-5" type="submit"><i class="fas fa-paper-plane"></i> Submit Recipe</button>
                                                  
                 

                </div>
            </div>
        </div>

    </form>


</section>


@endsection



@section('plugin')

<script src="/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<script src="/upload-preview.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>

@endsection