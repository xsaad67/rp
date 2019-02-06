@extends('admin.a_layouts.admin_main')
@section('css')
    <link rel="stylesheet" href="/member/vendor/summernote/summernote-bs4.css">

    <style>

      #image-preview {
      
      height: 300px;
      position: relative;
      overflow: hidden;
       background-image: url("{{$post->image}}");
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

<div class="page-inner">
	<header class="page-title-bar">
	    <nav aria-label="breadcrumb">
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item active">
	          <a href="#!"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
	        </li>
	      </ol>
	    </nav>
	    <h1 class="page-title"> Create Post </h1>
	    @if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	</header>
	<div class="page-section">
	    <section id="base-style" class="card">
	      <!-- .card-body -->
	      <div class="card-body">
	        <!-- .form -->
	        <form  method="post" action="{{action('PostController@update',$post->id)}}" enctype="multipart/form-data">
	        	@csrf
	        	@method("put")
	          <!-- .fieldset -->
	          <fieldset>
	            <legend>Create Post</legend> 
	            <!-- .form-group -->
		            <div class="form-group">
		              <label >Title</label> 
		              <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title',$post->title)}}"> 

		               @if($errors->has('title'))
                            <div class="alert alert-danger mt-2">
                                {{$errors->first('title')}}
                            </div>
                        @endif
		            </div>

		            <div class="form-group">
                        <label class="form-control-label">Upload Image</label>
                        <div id="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" />
                        </div>

                        @if($errors->has('image'))
                            <div class="alert alert-danger mt-2">
                                {{$errors->first('image')}}
                            </div>
                        @endif

                    </div>

		            <div class="form-group">
		              <label>Page Type</label> 
		              <select class="form-control" name="post_type"> 
		              	<option value="1">Post</option>
		              	<option value="2">Page</option>
		              </select>
		               @if($errors->has('post_type'))
                            <div class="alert alert-danger mt-2">
                                {{$errors->first('post_type')}}
                            </div>
                        @endif
		            </div>

		            <div class="form-group">
		              <label>User</label> 
		              <select class="form-control" name="user"> 
		              		<option value="">Select a user</option>
			              	@foreach(\App\User::take(50)->get() as $user)
			              		<option value="{{$user->id}}" {{ (old("user",$post->user_id) == $user->id ? "selected":"") }}>{{ucwords($user->name)}}</option>
			              	@endforeach
		           
		              </select>

		               @if($errors->has('user'))
                            <div class="alert alert-danger mt-2">
                                {{$errors->first('user')}}
                            </div>
                        @endif
		            </div>

		            <div class="form-group">
		              <label >Body</label> 
		              <textarea class="summernote" data-height="400" name="body">{{old('body',$post->body)}}</textarea>

		               	@if($errors->has('body'))
                            <div class="alert alert-danger mt-2">
                                {{$errors->first('body')}}
                            </div>
                        @endif

		            </div>
		         	
		         	<div class='text-center'>
		         		<button class="btn btn-primary btn-lg">Submit</button>
		         	</div>
	            
	          </fieldset>
	        </form>
	      </div>
	    
	   
	    </section>
	</div>
</div>

@endsection	



@section('js')
    <script src="/member/vendor/summernote/summernote-bs4.min.js"></script>
	<script src="/asset/js/upload-preview.min.js"></script>
<script>
   	$(function() {

  		$('.summernote').summernote({height: 600});

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