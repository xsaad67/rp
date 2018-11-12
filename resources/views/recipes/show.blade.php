@extends('layouts.main')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/star-rating.css')}}">

<style>
.single-ingredients {
    background-color: #faf5f1;
    padding: 40px 60px;
    margin-bottom: 40px;
    border-radius: 6px;
}

.single-ingredients table.ingredients-table {
    width: 100%;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

.single-ingredients table.ingredients-table td.ingredient-action {
    cursor: pointer;
    width: 40px;
    padding: 10px 5px;
    text-align: center;
    border-right: 1px solid #efe0d3;
}

.single-ingredients table.ingredients-table td {
    border-bottom: 1px solid #efe0d3;
    padding: 10px 20px;
    font-size: 20px;
    
    font-weight: 400;
}



.big-meta-box {
    /*border: 1px solid rgba(0,0,0,0.1);*/
    background-color: #fff;
    padding: 20px 0px;
    /*font-weight: 200;*/
    margin-bottom:25px;
}

.big-meta-box ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
    text-align: center;
}

.big-meta-box ul li {
    display: inline-block;
    padding: 5px 25px;
    font-weight: 600;
    font-size:20px;
    border-right: 1px solid rgba(0,0,0,0.1);
        color: #510fa8;
}
.big-meta-box ul  li:last-child { border-right: none; }


.description{
    font-size: 22px;
    line-height: 1.4;
    padding: 70px 80px;
    font-style: italic;
    position: relative;
    z-index: 1;
    text-align: center;

    }
</style>

@endsection


@section('content')

        <section class="slice slice-lg">
            <div class="container pt-lg">
                <div class="row">

                 



                    <div class="col-md-9">
                        <h1 class="lh-150 mb-3">{{$recipe->title}}</h1>
                        {{-- <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p> --}}
                        <div class="media align-items-center mt-5">
                            <img alt="Image placeholder" src="/img/prv/team-7-800x800.jpg" class="avatar avatar-sm mr-3">
                            <div class="media-body">
                                <span class="h6 mb-0 float-left">{{$recipe->chef->name}}</span>
                                <span class="text-small text-muted float-right">{{$recipe->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if(!is_null($recipe->featuredImage))
        <section class="bg-cover bg-size--cover" style="height: 600px; background-image: url('/img/backgrounds/img-14.jpg'); background-position: top center;"></section>
        @endif

        <section class="slice">

            <div class="container">
                <div class="row">


                    <div class="col-lg-9">
                        <!-- Article body -->
                        <article>


                            <div class="big-meta-box col-12">
                                <ul>
                                    <li class="single-meta-views">
                                        <span><i class="fas fa-eye"></i> 14,235 Views</span>
                                    </li>

                                    <li class="single-meta-views">
                                      <span><i class="far fa-heart" ></i> 14,235 Love</span>
                                    </li>
                                    

                                    <li class="single-meta-views">
                                        <span><i class="fas fa-utensils"></i> Serves 15</span>
                                    </li>

                                    
                                    
                                </ul>
                            </div>
                            {!! !is_null($recipe->description) ? '<p class="description">'.$recipe->description.'</p>' : '' !!}



                            <div class="row">
                            <div class="single-ingredients  offset-md-1 offset-lg-1 col-lg-10 col-md-10 col-12">
                                <h3><i class="fas fa-book-open" style="color:#e5f3eb"></i> Ingredients</h3>

                                <table class="ingredients-table">
                                    <tbody>

                                        @foreach($recipe->rIngridents as $ingrident)
                                            <tr>
                                                <td class="ingredient-action">
                                                    <span class="ingredient-mark-icon"><i class="fa fa-utensils"></i></span>
                                                </td>
                                                <td>
                                                    <span class="ingredient-name">{{$ingrident->note}}</span>
                                                </td>
                                            </tr>
                                        @endforeach


                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>



                            <ul>
                        	{{-- @foreach($recipe->ingridents as $ingrident)
                            	<li id="{{$recipe->id.'ing'.$ingrident->id}}">
                            		{{$ingrident->note}}	
                            	</li>
                        	@endforeach --}}
                            </ul>
                            <hr>
                            <h3>Recipe Instruction</h3>


                            <ul>
                        	{{-- @forelse($recipe->instructions as $instructions)
                            	<li>
                            		{{$instruction->note}}	
                            	</li>
                            @empty 
                            	
                            	<div class="container">
								  <div class="row">
								    <div class="col-12 text-center">
								      <a href="{{$recipe->crawlLink}}" target="_blank" class="btn btn-sm btn-primary btn-circle btn-lg btn-icon d-lg-inline-flex text-center">
			                                <span class="btn-inner--text">Read Recipe Instruction From {{ucwords($recipe->chef->name)}}</span>
			                           </a>
								    </div>
								  </div>
								</div>
                        	@endforelse --}}
                            </ul>

                            
                        </article>

                        <hr>
                        <h5 class="mb-4">Comments</h5>
                        <div class="p-5 bg-secondary border rounded">
                            <div class="media">
                                <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="/img/prv/team-1-800x800.jpg" style="width: 64px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                        lacinia congue felis in faucibus.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="text-muted">Like</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#" class="text-muted">Reply</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#" class="text-muted">Report</a>
                                        </li>
                                    </ul>

                                    <div class="media mt-5">
                                        <a class="pr-4" href="#">
                                            <img alt="Image placeholder" src="/img/prv/team-2-800x800.jpg" class="rounded-circle shadow" style="width: 64px;">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Media heading</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="#" class="text-muted">Like</a>
                                                </li>
                                                <li class="list-inline-item"><a href="#" class="text-muted">Reply</a>
                                                </li>
                                                <li class="list-inline-item"><a href="#" class="text-muted">Report</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-5">
                                <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="/img/prv/team-3-800x800.jpg" style="width: 64px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                        lacinia congue felis in faucibus.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="text-muted">Like</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#" class="text-muted">Reply</a>
                                        </li>
                                        <li class="list-inline-item"><a href="#" class="text-muted">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Comment form -->
                            <h5 class="mt-5 mb-4">Add you Review</h5>

                            <form class="form-secondary">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="sr-only">Your name</label>
                                            <input class="form-control" placeholder="Your name" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="sr-only">Email address</label>
                                            <input class="form-control" placeholder="Email address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Phone number</label>
                                    <input class="form-control" placeholder="Phone number" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Type your message</label>
                                    <textarea class="form-control textarea-autosize" rows="3" placeholder="Type your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-lg btn-block btn-primary shadow mt-4">Reply</button>
                            </form>
                        </div>

                    </div>


                    <div class="col-lg-3">

                        <div data-toggle="sticky" data-sticky-offset="100" data-negative-margin=".card-profile-cover">

                            
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="slice slice-lg bg-secondary" data-delimiter-before="1" data-delimiter-after="1">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="heading h2">Latest from the blog</h3>
                    <div class="fluid-paragraph mt-3">
                        <p class="lead">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <div class="card shadow-sm shadow--hover">
                            <img alt="Image placeholder" src="/img/prv/img-1-800x600.jpg" class="card-img-top">
                            <div class="card-body py-5 text-center">
                                <a href="#" class="h5 lh-150">Choose the best solution for your business</a>
                                <h6 class="text-muted mt-4 mb-0">25 April, 2018</h6>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                                            </li>
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-sm shadow--hover">
                            <img alt="Image placeholder" src="/img/prv/img-2-800x600.jpg" class="card-img-top">
                            <div class="card-body py-5 text-center">
                                <a href="#" class="h5 lh-150">How to find the right design for your specific product</a>
                                <h6 class="text-muted mt-4 mb-0">25 April, 2018</h6>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                                            </li>
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-sm shadow--hover">
                            <img alt="Image placeholder" src="/img/prv/img-3-800x600.jpg" class="card-img-top">
                            <div class="card-body py-5 text-center">
                                <a href="#" class="h5 lh-150">How to win buyers and influence sales with marketing</a>
                                <h6 class="text-muted mt-4 mb-0">25 April, 2018</h6>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col text-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                                            </li>
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <span class="my-rating-9" data-rating="2"></span>
                            <span class="live-rating"></span>
                            <br>

                            <span class="my-rating-9" data-rating="6"></span>
                            <span class="live-rating"></span>
                            <br>
                            <span class="my-rating-9" data-rating="1"></span>
                            <span class="live-rating"></span>
                            <br>

                            <span class="my-rating-9" data-rating="3"></span>
                            <span class="live-rating"></span>
                            <br>
                            <span class="my-rating-9" data-rating="4"></span>
                            <span class="live-rating"></span>
                            <br>
        </section>


   
                          
@endsection


@section('plugin')

<script type="text/javascript" src="/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<script type="text/javascript" src="/js/star-rating.min.js"></script>

<script>
    $(document).ready(function(){
          // $(".my-rating-9").starRating({
          //   initialRating: $(this).data("rating"),
          //   disableAfterRate: false,
          //   onHover: function(currentIndex, currentRating, $el){
          //     $('.live-rating').text(currentIndex);
          //   },
          //   onLeave: function(currentIndex, currentRating, $el){
          //     $('.live-rating').text(currentRating);
          //   }
          // });


             $(".my-rating-9").starRating({
                initialRating: $(this).data("rating"),
                starShape: 'rounded',
                readOnly: true
            });


    })
</script>
@endsection