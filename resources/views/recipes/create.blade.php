@extends('layouts.main')



@section('css')

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap_components/form-css.css">

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

    .mb-50{
      margin-bottom: 50px;
    }

    .btn-design{
    background: #dc2430;
    color: #fff;
    font-weight: 700;
    }

    .form-control-label{
      font-weight: 600;
    }
</style>

@endsection


@section('content')


      


<section class="slice" style="margin-top:100px;">

    <form method="POST" action="{{action('RecipeController@store')}}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h1 class="text-center mb-50" style="color:#cd283f;">Create Your amazing Recipe</h1>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row row-grid">
                <div class="col-lg-4 order-last order-sm-0">

                    <div class="form-group">
                        <label class="form-control-label">Upload Image</label>
                        <div id="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" />
                        </div>

                        @if($errors->has('image'))
                            <div class="alert alert-danger">
                                {{$errors->first('image')}}
                            </div>
                        @endif

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Cooking Time</label>
                                <input class="form-control form-control-sm" type="text" name="cooktime" placeholder="22:34" value="{{old('cooktime')}}">

                                @if($errors->has('cooktime'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('cooktime')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Prepration Time</label>
                                <input class="form-control form-control-sm" type="text" name="preptime" placeholder="22:34" value="{{old('preptime')}}">

                                @if($errors->has('preptime'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('preptime')}}
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Number of Servings</label>
                                <input class="form-control form-control-sm" type="text" name="yield" placeholder="Yield(Servings)" value="{{old('yield')}}">

                                @if($errors->has('yield'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('yield')}}
                                    </div>
                                @endif
                                
                            </div>
                        </div>

                        <div class="col-lg-6">
                             <div class="form-group">
                                <label class="form-control-label">Cooking Temprature</label>
                                <input class="form-control form-control-sm" type="text" name="cooktemp" placeholder="Celsius" value="{{old('cooktemp')}}">

                                @if($errors->has('cooktemp'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('cooktemp')}}
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="col-lg-8">
                  
                        <div class="form-group">
                            <label class="form-control-label">Recipe Title</label>
                            <input class="form-control form-control-sm" type="text" name="title" placeholder="Title" value="{{old('title')}}">
                            @if($errors->has('title'))
                                <div class="alert alert-danger">
                                    {{$errors->first('title')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Short Description</label>
                            <textarea name="description"  class="form-control" placeholder="Short Description">{{old('description')}}</textarea>

                            @if($errors->has('description'))
                                <div class="alert alert-danger">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Cuisine</label>
                                    <select class="form-control" name="cuisine">
                                      <option value="">Select a Cuisine</option>
                                      @foreach(App\Cuisine::orderBy('name')->get() as $cuisine )
                                        <option value="{{$cuisine->id}}" {{ (old("cuisine") == $cuisine->id ? "selected":"") }}>{{$cuisine->name}}</option>
                                      @endforeach
                                    </select>

                                    @if($errors->has('cuisine'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('cuisine')}}
                                        </div>
                                    @endif   
                                           
                                </div>  
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Recipe Category</label>
                                    <select class="form-control" name="category">
                                    <option value="">Select a Category</option>
                                      @foreach(App\Category::orderBy('name')->get() as $category )
                                        <option value="{{$category->id}}" {{ (old("category") == $category->id ? "selected":"") }}>{{$category->name}}</option>
                                      @endforeach
                                    </select>

                                    @if($errors->has('category'))
                                        <div class="alert alert-danger">
                                            {{$errors->first('category')}}
                                        </div>
                                    @endif   
                                </div>  
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Ingredients</label>
                            <textarea name="ingredients" class="form-control" rows="6" placeholder="Ingredients (One by one Line)">{{old('ingredients')}}</textarea>

                            @if($errors->has('ingredients'))
                                <div class="alert alert-danger">
                                    {{$errors->first('ingredients')}}
                                </div>
                            @endif  

                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Steps/Directions</label>
                            <textarea name="steps" class="form-control" rows="6" placeholder="Steps to make recipe (One by one Line)">{{old('steps')}}</textarea>

                            @if($errors->has('steps'))
                                <div class="alert alert-danger">
                                    {{$errors->first('steps')}}
                                </div>
                            @endif  

                        </div>
                </div>
            </div>

            <div class="row mb-50">
               <div class="col-12 text-center">
                <button class="btn btn-default btn-lg btn-design" type="submit"><i class="fas fa-paper-plane"></i> Submit Recipe</button>
              </div>
            </div>
        </div>

    </form>


</section>


@endsection



@section('footer')

<script src="/asset/js/upload-preview.min.js"></script>
{{-- <script src="/plugins/dirty/dirty.min.js"></script> --}}
<script type="text/javascript">
$(document).ready(function() {

  // $('form').dirtyForms();

  
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