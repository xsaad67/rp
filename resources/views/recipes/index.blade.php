@extends('layouts.main')

@section('css')

<style>

.post-details {
    flex-grow: 1;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

span.bookmark-icon {
    top: 0;
    right: 25px;
    transform: translateY(-50%) scale(.96);
}
.post-footer{
    flex-grow: 0;
    padding: 20px 30px;
    border-top:2px solid #ccc;
    padding: 20px 35px;
    border-radius: 0 0 4px 4px;
    position: relative;
}

.no-padding-left{
    padding-left:0 !important;
}

.no-padding-right{
    padding-right:0 !important;
}

</style>

@endsection

@section('content')


<!-- Recent Blog Posts -->

<div class="section white padding-top-0 padding-bottom-60 full-width-carousel-fix">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="blog-carousel">

                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="images/blog-04a.jpg" alt="">
                            <span class="blog-item-tag">Tips</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>20 May 2018</li>
                                </ul>
                                <h3>5 Myths That Prevent Job Seekers from Overcoming Failure</h3>
                                <p>Distinctively reengineer revolutionary meta-services and premium architectures intuitive opportunities.</p>
                            </div>
                        </div>
                    </a>

                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="images/blog-05a.jpg" alt="">
                            <span class="blog-item-tag">Recruiting</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>28 April 2018</li>
                                </ul>
                                <h3>12 Dog-Friendly Companies Hiring Now</h3>
                                <p>Compellingly embrace empowered e-business after user friendly intellectual capital. Interactively front-end.</p>
                            </div>
                        </div>
                    </a>

                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="images/blog-03a.jpg" alt="">
                            <span class="blog-item-tag">Marketing</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>10 June 2018</li>
                                </ul>
                                <h3>11 Tips to Help You Get New Clients Through Cold Calling</h3>
                                <p>Compellingly embrace empowered e-business after user friendly intellectual capital. Interactively front-end.</p>
                            </div>
                        </div>
                    </a>
                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="images/blog-06a.jpg" alt="">
                            <span class="blog-item-tag">Recruiting</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>9 June 2018</li>
                                </ul>
                                <h3>Follow Up On Job Application With This Template</h3>
                                <p>Appropriately empower dynamic leadership skills after business portals. Globally myocardinate interactive.</p>
                            </div>
                        </div>
                    </a>

                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="images/blog-07a.jpg" alt="">
                            <span class="blog-item-tag">Recruiting</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>3 June 2018</li>
                                </ul>
                                <h3>What It Really Takes to Make $100k Before You Turn 30</h3>
                                <p>Appropriately empower dynamic leadership skills after business portals. Globally myocardinate interactive.</p>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Recent Blog Posts / End -->



<div class="container">

    <div class="listings-container grid-layout margin-top-35">
                

        <a href="single-job-page.html" class="job-listing col-lg-3 no-padding-left no-padding-right">

            <!-- Job Listing Details -->
            <div class="post-details">
                <img src="images/blog-06a.jpg" alt="">
            </div>

            <!-- Job Listing Footer -->
            <div class="post-footer">
                <span class="bookmark-icon"></span>
                <div id='parent1' class="parent">
                  <div class="left">Left</div>
                  <div class="right">Right</div>
                </div>
                
            </div>
        </a>    

     


    </div>


</div>

<!-- Section / End -->



@endsection

