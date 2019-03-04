
         
<aside class="offcanvas-container" id="blog-single-sidebar">
  <div class="offcanvas-scrollable-area px-4 pt-5 px-lg-0 pt-lg-0"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
    
    
    <!-- Related Posts-->
    <div class="widget widget-featured-posts">
      <h4 class="widget-title"> Related Recipes</h4>
  
      @foreach($featuredRecipes as $recipe)

      <a class="featured-post" href="{{$recipe->link}}">
        <div class="featured-post-thumb">
          <img src="{{$recipe->image}}" alt="{{$recipe->title}}"/>
        </div>
        <div class="featured-post-info">
          <div class="featured-post-meta">
            <span class="text-primary opacity-70"><i class="fe-icon-clock"></i>{{$recipe->created_at->diffForHumans()}}</span>
            <span class="ml-3">
          </div>
          <div class="featured-post-title">{{$recipe->title}}</div>
        </div>
      </a>

      @endforeach
    </div>
  
  </div>
</aside>
