@extends('layouts.main')


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/star-rating/star-rating.css')}}">
@endsection

@section('content')

	<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<div class="content-timeline">
						<!--Timeline header area start -->
						<div class="post-list-header" >
							<span class="post-list-title">Your Reviews</span>
							
						</div>
						<!--Timeline header area end -->

						@foreach($ratings as $rating)
							<!--Timeline items start -->
							<div class="timeline-items">
								<div class="timeline-item">
									<div class="timeline-left">
										<div class="timeline-left-wrapper">
											<a href="#" class="timeline-category" ><i class="material-icons">&#xE894;</i></a>
											<span class="timeline-date">{{$rating->created_at->diffForHumans()}}</span>
										</div>
									</div>
									<div class="timeline-right">
										<div class="timeline-post-image">
											<a href="#">
												<img src="{{$rating->rateable->image}}" width="260">
											</a>
										</div>
										<div class="timeline-post-content">
											<a href="#">
												<h3 class="timeline-post-title">{{$rating->rateable->title}}</h3>

											</a>
											<div class="timeline-post-info">
												
												<blockquote>
													<div class="my-rating" data-rating="{{$rating->rating}}"></div>
													{{$rating->review}}
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Timeline items end -->
						@endforeach

					</div>

				</div>
				@include('layouts.main-sidebar')
			</div>
		</section>


@endsection

@section('footer')
<script type="text/javascript" src="{{asset('plugins/star-rating/star-rating.min.js')}}"></script>

<script>
	
	$(function(){
		$(".my-rating").starRating({
		  totalStars: 5,
		  starShape: 'rounded',
		  starSize: 25,
		  emptyColor: 'lightgray',
		  hoverColor: 'salmon',
		  activeColor: 'crimson',
		  useGradient: false
		});
	});

</script>

@endsection