@extends('layouts.main')


@section('css')

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<style>

.m-t-10{
	margin-top:30px;
}
#profile{
	max-height:200px !important;
	max-width:200px !important;
	object-fit: contain;
	border-radius:50%;
}
</style>

@endsection

@section('content')



	<form class="container" style="margin-top:100px;" method="POST" action="{{action('ProfileController@update',$user->id)}}">

          	    	
	    <div class="row">

	   

			 	<div class="col-sm-4 text-xs-center">
			 		<h2 class="text-center">Edit your profile</h2> 
			        <img src="{{ \Avatar::create('Soekarno')->setDimension(200,200)->setFontSize(100)->setBorder(0,"#dc2430")->setBackground('#dc2430') }}" class="mx-auto d-block rounded-circle m-t-10" alt="avatar" id="profile"/>
			        
			        <div class="custom-file m-t-10">
		                <input type="file" class="custom-file-input" id="inputGroupFile02"  onchange="readURL(this);" />
		                <label class="custom-file-label" for="inputGroupFile02">Change Profile Picture</label>
           			</div>
            
				</div>
		        <div class="col-sm-8 personal-info">
		            
		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label form-control-label">Name</label>
		                    <div class="col-lg-10">
		                        <input class="form-control" type="text" name="name" value="{{ old('name',$user->name) }}" />
		                    </div>
		                </div>
		              

		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label form-control-label">Short Bio</label>
		                    <div class="col-lg-10">
		                        <textarea name="bio" value="{{old('bio',$user->bio)}}" class="form-control" rows=5></textarea>
		                    </div>
		                </div>
		              	
		              	<hr>

		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label form-control-label">Facebook</label>
		                    <div class="col-lg-10">
		                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
		                    </div>
		                </div>


		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label form-control-label">Google Plus</label>
		                    <div class="col-lg-10">
		                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
		                    </div>
		                </div>

		                
		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label form-control-label">Twitter</label>
		                    <div class="col-lg-10">
		                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
		                    </div>
		                </div>


		              


				       	<div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label"></label>
		                    <div class="col-lg-9">
		                        <input type="reset" class="btn btn-secondary" value="Cancel" />
		                        <input type="button" class="btn btn-primary" value="Save Changes" />
		                    </div>
		                </div>

		        
		        </div>

	      	
	    </div>
	</form>


			


@endsection

@section('footer')

<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<script>
	 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	$(function(){
		
	});
</script>
@endsection