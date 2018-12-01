@extends('layouts.main')


@section('css')

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<style>

.m-t-10{
	margin-top:30px;
}
</style>

@endsection

@section('content')



	<form class="container" style="margin-top:100px;">

          	    	
	    <div class="row">

	   

			 	<div class="col-sm-4 text-xs-center">
			 		<h2 class="text-center">Edit your profile</h2> 
			        <img src="{{ \Avatar::create('Soekarno')->setDimension(200,200)->setFontSize(100)->setBorder(0,"#dc2430")->setBackground('#dc2430') }}" class="mx-auto d-block rounded-circle m-t-10" alt="avatar" onchange="readURL(this);" />
			        
			        <div class="custom-file m-t-10">
		                <input type="file" class="custom-file-input" id="inputGroupFile02"/>
		                <label class="custom-file-label" for="inputGroupFile02">Change Profile Picture</label>
           			</div>
            
				</div>
		        <div class="col-sm-8 personal-info">
		            
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="text" value="Jane" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="text" value="Bishop" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="email" value="email@gmail.com" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Company</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="text" value="" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="url" value="" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="text" value="" placeholder="Street" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label"></label>
		                    <div class="col-lg-6">
		                        <input class="form-control" type="text" value="" placeholder="City" />
		                    </div>
		                    <div class="col-lg-3">
		                        <input class="form-control" type="text" value="" placeholder="State" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
		                    <div class="col-lg-9">
		                        <select id="user_time_zone" class="form-control" size="0">
		                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
		                            <option value="Alaska">(GMT-09:00) Alaska</option>
		                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
		                            <option value="Arizona">(GMT-07:00) Arizona</option>
		                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
		                            <option value="Central Time (US &amp; Canada)"
		                            selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
		                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
		                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
		                        </select>
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="text" value="janeuser" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="password" value="11111122333" />
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
		                    <div class="col-lg-9">
		                        <input class="form-control" type="password" value="11111122333" />
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
</script>
@endsection