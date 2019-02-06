@extends('admin.a_layouts.admin_main')
@section('css')

    <link rel="stylesheet" href="/member/vendor/summernote/summernote-bs4.css">
@endsection


@section('content')

<form method="post" action="{{action('Admin\AdminController@store')}}">
	@csrf
 <textarea class="summernote"></textarea>

<button type="submit">Submit</button>

</form>

@endsection	



@section('js')

    <script src="/member/vendor/summernote/summernote-bs4.min.js"></script>
<script>
   	$(document).ready(function() {
  		$('.summernote').summernote();
	});
</script>

@endsection