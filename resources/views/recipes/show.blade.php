@extends('layouts.main')


@section('content')
 
    <!-- Page Content-->
    <div class="container pb-5 mb-3">
      <div class="row">
        <!-- Post Content-->
        <div class="col-lg-9">
          <!-- Single Post Meta-->
           
            <section class="position-relative bg-center bg-norepeat bg-cover pt-sm-5 pb-5" style="background-image: url(/assets/images/homepages/personal-blog/hero-bg.jpg);">
              
            </section>
            <div class="container bg-parallax-content pb-3" style="margin-top: -80px;">
              <figure class="figure d-block rounded-circle p-2 mx-auto" style="width: 170px;"><img class="d-block w-100 rounded-circle" src="/assets/images/homepages/personal-blog/author-avatar.jpg" alt="James Smith"></figure>
            </div>
          <hr class="mb-4">
          <!-- Link-->
        
          <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
          <p class="pb-3">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
          <h5 class="pb-3">Here is what people saying</h5>
          <div class="owl-carousel testimonials-carousel pb-4" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;margin&quot;: -15, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;630&quot;:{&quot;items&quot;:2},&quot;991&quot;:{&quot;items&quot;:2},&quot;1200&quot;:{&quot;items&quot;:2}} }">
            <div class="blockquote testimonial">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <footer class="testimonial-footer">
                <div class="testimonial-avatar"><img src="img/testimonials/01.jpg" alt="Testimonial Author Avatar"/>
                </div>
                <div class="d-table-cell align-middle pl-2">
                  <div class="blockquote-footer">Barbara Palson
                    <cite>Graphic Designer</cite>
                  </div>
                </div>
              </footer>
            </div>
            <div class="blockquote testimonial">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <footer class="testimonial-footer">
                <div class="testimonial-avatar"><img src="img/testimonials/02.jpg" alt="Testimonial Author Avatar"/>
                </div>
                <div class="d-table-cell align-middle pl-2">
                  <div class="blockquote-footer">Hinata Nakamura
                    <cite>Financial Director</cite>
                  </div>
                </div>
              </footer>
            </div>
            <div class="blockquote testimonial">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <footer class="testimonial-footer">
                <div class="testimonial-avatar"><img src="img/testimonials/03.jpg" alt="Testimonial Author Avatar"/>
                </div>
                <div class="d-table-cell align-middle pl-2">
                  <div class="blockquote-footer">Michael Davis
                    <cite>Co-Founder, CEO</cite>
                  </div>
                </div>
              </footer>
            </div>
            <div class="blockquote testimonial">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <footer class="testimonial-footer">
                <div class="testimonial-avatar"><img src="img/testimonials/04.jpg" alt="Testimonial Author Avatar"/>
                </div>
                <div class="d-table-cell align-middle pl-2">
                  <div class="blockquote-footer">Sophia Johnson
                    <cite>Marketing Manager</cite>
                  </div>
                </div>
              </footer>
            </div>
            <div class="blockquote testimonial">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <footer class="testimonial-footer">
                <div class="testimonial-avatar"><img src="img/testimonials/05.jpg" alt="Testimonial Author Avatar"/>
                </div>
                <div class="d-table-cell align-middle pl-2">
                  <div class="blockquote-footer">Christopher Lee
                    <cite>Marketing Manager</cite>
                  </div>
                </div>
              </footer>
            </div>
          </div>
          <!-- Single Post Tags + Share-->
          <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-5 py-2">
            <div class="py-2"><a class="tag-link" href="#">Architecture</a><a class="tag-link" href="#">Design</a><a class="tag-link" href="#">Construction</a></div>
            <div class="py-2"><span class="dinline-block align-middle py-2 mr-2"><strong>Share:</strong></span><a class="social-btn sb-style-3 sb-facebook mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-twitter mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-pinterest mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="socicon-pinterest"></i></a></div>
          </div>
          <!-- Single Post Author-->
          <div class="pb-3" id="author" data-offset-top="100">
            <div class="author-card mb-5">
              <div class="author-card-cover" style="background-image: url(img/widgets/author/cover.jpg);"></div>
              <div class="author-card-profile">
                <div class="author-card-avatar"><img src="img/widgets/author/avatar.jpg" alt="Post Author"/>
                </div>
                <div class="author-card-details">
                  <h5 class="author-card-name">Sara Palson</h5><span class="author-card-position">Architect &amp; Designer</span>
                </div>
              </div>
              <p class="author-card-info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem olore accusantium doloremque isul laudantium, totam remape. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <div class="author-card-social-bar-wrap">
                <div class="author-card-social-bar"><a class="social-btn sb-style-1 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-1 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-1 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-1 sb-linkedin" href="#"><i class="socicon-linkedin"></i></a></div>
              </div>
            </div>
          </div>
          <hr class="pb-4">
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
        <div class="col-lg-3">
          <!-- Single Post Sidebar-->
          <!-- Off-Canvas Toggle--><a class="offcanvas-toggle" href="#blog-single-sidebar" data-toggle="offcanvas"><i class="fe-icon-sidebar"></i></a>
          <!-- Off-Canvas Container-->
          <aside class="offcanvas-container" id="blog-single-sidebar">
            <div class="offcanvas-scrollable-area px-4 pt-5 px-lg-0 pt-lg-0"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
              <!-- Categories-->
              <div class="widget widget-categories">
                <h4 class="widget-title">Categories</h4>
                <ul>
                  <li><a href="#technology" data-toggle="collapse">Software &amp; Technology<span>&nbsp;(45)</span></a>
                    <div class="collapse show" id="technology">
                      <ul>
                        <li><a href="#">Gadgets reviews<span>&nbsp;(22)</span></a></li>
                        <li><a href="#">Robotics &amp; AI<span>&nbsp;(10)</span></a></li>
                        <li><a href="#">Technological trends<span>&nbsp;(13)</span></a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsed" href="#design" data-toggle="collapse">Digital design<span>&nbsp;(76)</span></a>
                    <div class="collapse" id="design">
                      <ul>
                        <li><a href="#">Web design<span>&nbsp;(31)</span></a></li>
                        <li><a href="#">Mobile UI and UX<span>&nbsp;(28)</span></a></li>
                        <li><a href="#">Design tools reviews<span>&nbsp;(17)</span></a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsed" href="#architecture" data-toggle="collapse">Architecture<span>&nbsp;(32)</span></a>
                    <div class="collapse" id="architecture">
                      <ul>
                        <li><a href="#">Modern trends<span>&nbsp;(23)</span></a></li>
                        <li><a href="#">History of architecture<span>&nbsp;(9)</span></a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="#">Marketing &amp; Management<span>&nbsp;(24)</span></a></li>
                  <li><a href="#">Hobby &amp; Lifestyle<span>&nbsp;(18)</span></a></li>
                </ul>
              </div>
              <!-- Recent Comments-->
              <div class="widget widget-recent-comments">
                <h4 class="widget-title">Recent comments</h4><a class="recent-comment" href="#"><span class="recent-comment-meta">Jane Portman on</span>
                  <div class="recent-comment-title">The App of The Future</div></a><a class="recent-comment" href="#"><span class="recent-comment-meta">William Smith on</span>
                  <div class="recent-comment-title">Cherry 5 WordPress Framework</div></a><a class="recent-comment" href="#"><span class="recent-comment-meta">Emma Johnson on</span>
                  <div class="recent-comment-title">Another Level of Design</div></a>
              </div>
              <!-- Related Posts-->
              <div class="widget widget-featured-posts">
                <h4 class="widget-title"> Related posts</h4><a class="featured-post" href="#">
                  <div class="featured-post-thumb"><img src="img/widgets/blog/01.jpg" alt="Post Thumbnail"/>
                  </div>
                  <div class="featured-post-info">
                    <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>22/04/2018</span><span class="ml-3"><i class="fe-icon-message-square"></i>21</span></div>
                    <div class="featured-post-title">Getting to another level of design and functionality.</div>
                  </div></a><a class="featured-post" href="#">
                  <div class="featured-post-thumb"><img src="img/widgets/blog/02.jpg" alt="Post Thumbnail"/>
                  </div>
                  <div class="featured-post-info">
                    <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>30/05/2018</span><span class="ml-3"><i class="fe-icon-message-square"></i>17</span></div>
                    <div class="featured-post-title">Cherry 5 WordPress Framework Sneaky Peaks.</div>
                  </div></a><a class="featured-post" href="#">
                  <div class="featured-post-thumb"><img src="img/widgets/blog/03.jpg" alt="Post Thumbnail"/>
                  </div>
                  <div class="featured-post-info">
                    <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>11/06/2018</span><span class="ml-3"><i class="fe-icon-message-square"></i>8</span></div>
                    <div class="featured-post-title">Multiple skins &amp; easy demo data import.</div>
                  </div></a>
              </div>
              <!-- Tag Cloud-->
              <div class="widget">
                <h4 class="widget-title">Tag cloud</h4><a class="tag-link" href="#">Technology</a><a class="tag-link" href="#">Software</a><a class="tag-link" href="#">Digital</a><a class="tag-link" href="#">Croudfunding</a><a class="tag-link" href="#">Social</a><a class="tag-link active" href="#">Freelance</a><a class="tag-link" href="#">Marketing</a><a class="tag-link" href="#">Management</a>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <!-- Single Post Comments-->
    <div class="bg-secondary py-5" id="comments">
      <div class="container pb-4">
        <div class="row">
          <div class="col-lg-9">
            <h4 class="text-center pb-3">3 Comments</h4>
            <div class="blockquote comment mb-4">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
              <div class="d-sm-flex justify-content-between align-items-center">
                <div class="testimonial-footer">
                  <div class="testimonial-avatar"><img src="img/testimonials/03.jpg" alt="Comment Author Avatar"/>
                  </div>
                  <div class="d-table-cell align-middle pl-2">
                    <div class="blockquote-footer">Michael Davis
                      <cite>August 12, 2018 at 3:10PM</cite>
                    </div>
                  </div>
                </div>
                <div class="pt-3"><a class="btn btn-primary btn-sm" href="#"><i class="fe-icon-corner-up-left"></i>&nbsp;Reply</a></div>
              </div>
              <div class="blockquote comment">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                <div class="testimonial-footer">
                  <div class="testimonial-avatar"><img src="img/testimonials/05.jpg" alt="Comment Author Avatar"/>
                  </div>
                  <div class="d-table-cell align-middle pl-2">
                    <div class="blockquote-footer">Benjamin Miller
                      <cite>August 13, 2018 at 5:00PM</cite>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blockquote comment">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
              <div class="d-sm-flex justify-content-between align-items-center">
                <div class="testimonial-footer">
                  <div class="testimonial-avatar"><img src="img/testimonials/04.jpg" alt="Comment Author Avatar"/>
                  </div>
                  <div class="d-table-cell align-middle pl-2">
                    <div class="blockquote-footer">Sophia Johnson
                      <cite>July 25, 2018 at 11:50AM</cite>
                    </div>
                  </div>
                </div>
                <div class="pt-3"><a class="btn btn-primary btn-sm" href="#"><i class="fe-icon-corner-up-left"></i>&nbsp;Reply</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


