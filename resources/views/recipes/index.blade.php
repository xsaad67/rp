@extends('layouts.main')


@section('content')
  <div class="section section-gray">
    <div class="container">
      <div class="row">

        @foreach($recipes as $recipe)

          <div class="col-md-3 col-sm-6 col-xs-6">

            <div class="card">
              <div class="card-image">
                <a href="{{$recipe->link}}">
                  <img class="img lazy" data-src="assets/img/sections/david-marcu.jpg" style="background-size:cover; background-position: center center; width:100%; height:250px;" >
                </a>
              </div>
              <div class="card-body">
                {{-- <label class="badge badge-pill badge-warning">Travel</label> --}}
                <h5 class="card-title">
                  <a href="{{$recipe->link}}">{{$recipe->title}}</a>
                </h5>
                <hr />
                <div class="card-footer">
                  <div class="author">
                    <a href="#pablo">
                      <img src="assets/img/rihanna.jpg" alt="{{$recipe->chef->name}}" class="avatar img-raised lazy">
                      <span>{{$recipe->chef->name}}</span>
                    </a>
                  </div>
                  <div class="stats">

                    <a href="" class=""><i class="fa fa-bookmark-o" aria-hidden="true"></i></a> 5.3k
                  </div>
                </div>
              </div>
            </div>

          </div>

        @endforeach


      </div>
    </div>
  </div>

@endsection

@section('footer')

<script type="text/javascript">
   $(function() {
        $('.lazy').Lazy();
    });
           
</script>

@endsection