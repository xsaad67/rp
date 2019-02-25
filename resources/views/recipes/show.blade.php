@extends('layouts.main')


@section('css')
<style>
 .p-ingredient > a{
        text-decoration: none;
        font-weight: 600;
    }
    .p-ingredient >a:hover{
        font-size:18px;
        color:#84408d;
    }
    .p-ingredient{
        margin: 0;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        font-size: 16px;
        padding: 15px 20px 10px 30px;
    }
    ol.steps{
        list-style: none;
        counter-reset: my-awesome-counter;
    }
    ol.steps >li{
        counter-increment: my-awesome-counter;
        margin: 0;
        padding: 20px;
        border-bottom: 1px dotted #bdb6b7;
        font-size:16px;
    }   
    ol.steps >li:before{
        content: counter(my-awesome-counter);
        float: left;
        margin: 0px 13px 0 6px;
        line-height: 46px;
        font-size: 25px;
        font-weight: 700;
        line-height: 1;
        padding-bottom: 2px;
        color:#84408d;
    }

    .single-meta ul{
        list-style: none;
        padding: 0px;
        text-align: center;
    }
    .single-meta ul li{
        font-weight: 400;
        font-size: 18px;
        display: inline-block;
        border-right: 1px solid rgba(0,0,0,0.1);
        padding: 0 16px;
    }
    .single-meta ul li:last-child {
       border-right: 0;
    }
    .single-meta ul li span{
        vertical-align: middle;
            color: #7d4294;
        font-weight: 600;
    }

   
.cornerimage:hover{ background-color: #dc2430;color: #fff !important;}
.favorited{ background-color: #dc2430; color: #fff !important; }
.favorited:hover{ background-color: rgba(0,0,0,0.5); }
</style>
@endsection


@section('content')
 
    <!-- Page Content-->
    <div class="container pb-5 mb-3">
      <div class="row">
        <!-- Post Content-->
        <div class="col-lg-9">
          <!-- Single Post Meta-->
           
            <section class="position-relative bg-center bg-norepeat bg-cover pt-sm-5 pb-5 " style="background-image: url({{$recipe->image}});max-height:450px; min-height:350px" >
              
            </section>
            <div class="container bg-parallax-content pb-3" style="margin-top: -50px;">
              <figure class="figure d-block rounded-circle p-2 mx-auto" style="width: 100px;"><img class="d-block w-100 rounded-circle" src="{{$recipe->chef->avatar}}" alt="{{$recipe->chef->name}}"></figure>
            </div>

            <div class="text-center mb-5">
             <h6> By: {{$recipe->chef->name}} </h6>
              <h1>{{$recipe->title}}</h1>
             
            </div>

            <div class="pb-3 mt-2" id="author" data-offset-top="100">
              <div class="author-card mb-5 single-meta">

                <ul>
                  @if(!is_null($recipe->serves))
                    <li class="single-meta-serves">
                      <b>Serves:</b>
                      <span>{{$recipe->serves}} {{ str_plural("serving", $recipe->serves) }}</span>
                    </li> 
                  @endif

                  @if(!is_null($preprationTime))
                    <li class="single-meta-cooking-time">
                      <b>Prep Time:</b>
                      <span>{{$preprationTime}}</span>
                    </li>
                  @endif
                

                  @if(!is_null($cookingTime))
                    <li class="single-meta-difficulty">
                        <b>Cook Time: </b>
                        <span>{{$cookingTime}}</span>
                    </li>   
                  @endif  
                  
                    
                  @if(!is_null($totalTime))
                    <li class="single-meta-cooking-time">
                      <b>Total Time:</b>
                      <span>{{$totalTime}}</span>
                    </li>
                  @endif

              </ul>


                  
              <div class="author-card-social-bar-wrap">
                  <div class="author-card-social-bar">
                    <span class="dinline-block align-middle py-2 pl-2 mr-2"><strong>Share:</strong></span>
                    <a class="social-btn sb-style-1 sb-facebook" href="#">
                      <i class="socicon-facebook"></i>
                    </a>
                    <a class="social-btn sb-style-1 sb-pinterest" href="#">
                      <i class="socicon-pinterest"></i>
                    </a>
                    <a class="social-btn sb-style-1 sb-twitter" href="#">
                      <i class="socicon-twitter"></i>
                    </a>
                    <a class="social-btn sb-style-1 sb-linkedin" href="#">
                      <i class="socicon-linkedin"></i>
                    </a>
                  </div>
              </div>


              </div>
            </div>
            
         

          
          <hr class="pb-4">
        
          <p class="py-3"{{$recipe->description}}</p>
          
          <div class="row">
            <div class="col-lg-6">
               <h4 class="text-center color-red">Ingredients</h4>
                <ol class="steps">

                @foreach($recipe->ingredients as $ingredient)
                  <li>
                    {!! preg_replace('/\b'.$ingredient->ingrident.'\b/', '<a href="/ingredient/'.$ingredient->ingrident.'">'.$ingredient->ingrident.'</a>', trim(strtolower($ingredient->note))) !!} 
                  </li>
                @endforeach

                </ol>
            </div>

            <div class="col-lg-6">
              <h4 class="text-center color-red">Instructions</h4>
                <ol class="steps">
                    @foreach($recipe->instructions as $instruction)
                        <li>{{$instruction->description}}</li>
                    @endforeach
                </ol>
            </div>

          </div>


           <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-5 py-2">

            <div class="py-2">
              @foreach($recipe->keywords as $tag)
                <a class="tag-link" href="{{$tag->link}}">{{$tag->name}}</a>
              @endforeach
            </div>
         
          </div>
          <!-- Entry Nanigation-->
          <nav class="entry-navigation">
            <div class="prev-btn"><a class="label" href="#"><i class="fe-icon-arrow-left"></i>Prev <span class='d-none d-sm-inline'>post</span></a>
              <div class="post-preview">
                <div class="post-preview-thumb"><img src="img/blog/navigation/02.jpg" alt="Blog post thumbnail"/>
                </div>
                <div class="post-preview-details"><span class="post-preview-title">Technological breakthrough</span><span class="post-preview-meta"><i class="fe-icon-calendar"></i>May 25, 18</span></div>
              </div>
            </div><a class="back-btn" href="blog-grid-rs.html"><i class="fe-icon-grid"></i></a>
            <div class="next-btn"><a class="label" href="#">Next <span class='d-none d-sm-inline'>post</span><i class="fe-icon-arrow-right"></i></a>
              <div class="post-preview">
                <div class="post-preview-details"><span class="post-preview-title">Mother nature is speaking</span><span class="post-preview-meta"><i class="fe-icon-calendar"></i>Jul 30, 18</span></div>
                <div class="post-preview-thumb"><img src="img/blog/navigation/01.jpg" alt="Blog post thumbnail"/>
                </div>
              </div>
            </div>
          </nav>
        </div>
        
      </div>
    </div>
    <!-- Single Post Comments-->
    <div class="bg-secondary py-5" id="comments">
      <div class="container pb-4">
        <div class="row">
          <div class="col-lg-9">
            <h4 class="text-center pb-3">3 people rate</h4>
          
            @foreach($recipe->ratings as $review)
              @include('reviews.show')
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection



@section('js')
  {{-- <script src="{{asset('assets/js/admin-ajax.js')}}"></script> --}}
@endsection

