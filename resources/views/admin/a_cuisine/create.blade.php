@extends('admin.a_layouts.admin_main')


@section('content')

<div class="page">

<!-- .page-inner -->
<div class="page-inner">

<!-- .page-title-bar -->
	<header class="page-title-bar">
		<h1 class="page-title"> Create Cuisine </h1>
	</header>
<!-- /.page-title-bar -->


<!-- .card -->
	<section class="card">
	  <!-- .card-body -->
	  <div class="card-body">
	    <h3 class="card-title"> </h3><!-- form .needs-validation -->
	    <form class="needs-validation" method="POST" action="{{action('Admin\CuisineController@store')}}"  enctype="multipart/form-data">
	     	
	     	@csrf
	     	
	     	<div class="form-group">
              <label for="tf1">Cuisine Name</label> 
              <input type="text" class="form-control" name="name" placeholder=""> 
            </div>
	     	
	     	<div class="form-group">
              <label for="tf1">Material Icon Name</label> 
              <input type="text" class="form-control" name="icon" placeholder=""> 
            </div>

	     	<div class="form-group">
              <label for="tf3">File input</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="tf3" name="image" multiple=""> 
                <label class="custom-file-label" for="tf3">Choose file</label>
              </div>
            </div>

		      <div class="form-actions">
		        <button class="btn btn-primary" type="submit">Add Cuisine</button>
		      </div>
	      <!-- /.form-actions -->
	    </form><!-- /form .needs-validation -->
	  </div><!-- /.card-body -->
	</section>
<!-- /.card -->
</div>
<!-- /.page-section -->
<!-- .app-footer -->
<footer class="app-footer">
<ul class="list-inline">
  <li class="list-inline-item">
    <a class="text-muted" href="#!">Support</a>
  </li>
  <li class="list-inline-item">
    <a class="text-muted" href="#!">Help Center</a>
  </li>
  <li class="list-inline-item">
    <a class="text-muted" href="#!">Privacy</a>
  </li>
  <li class="list-inline-item">
    <a class="text-muted" href="#!">Terms of Service</a>
  </li>
</ul>
<div class="copyright"> Copyright © 2018. All right reserved. </div>
</footer><!-- /.app-footer -->
</div><!-- /.page-inner -->


</div>

@endsection