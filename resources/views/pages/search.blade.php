@extends('layouts.main')


@section('content')
<section class="main-highlight"></section>

<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<div class="content-timeline">
						<!--Timeline header area start -->
						<div class="post-list-header">
							<span class="post-list-title">{{$searchCount}} results found for {{request('search')}}</span>
						</div>
						<!--Timeline header area end -->


						<div class="post-lists">

							@foreach($recipes as $recipe)
                              	@include('recipes.recipe-card')
                            @endforeach

						</div>

						<!--Timeline header area start -->
						<div class="post-list-header">
							<span class="post-list-title">{{count($ingredientRecipes)}} Recipes found containing {{request('search')}} ingredient </span>
						</div>
						<!--Timeline header area end -->
						<div class="post-lists">

							@foreach($ingredientRecipes as $recipe)
                              	@include('recipes.recipe-card')
                            @endforeach

						</div>

					</div>

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<a href="#" class="widget-ad-box">
								<img src="img/adbox300x600.png" width="300" height="600">
							</a>
						</div>

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Editor's Picks</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>
									<li class="active">
										<a href="#" style="background-image: url(img/news-test-images/news-img7.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>1</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img5.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>2</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img6.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>3</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" style="background-image: url(img/news-test-images/news-img3.jpg);">
											<div class="box-wrapper">
												<div class="box-left">
													<span>4</span>
												</div>
												<div class="box-right">
													<h3 class="p-title">Things to Consider When Choosing City Moving Companies</h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="seperator"></div>

						<a href="#" class="widget-ad-box">
							<img src="img/adbox300x250.png" width="300" height="250">
						</a>

					</div>
				</div>
			</div>
</section>

@endsection