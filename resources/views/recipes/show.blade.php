@extends('layouts.main')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('css/star-rating.css')}}">


@endsection


@section('content')
    <section class="slice slice-lg">
            <div class="container pt-lg">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <h1 class="lh-150 mb-3">Keep your face always toward the sunshine - and shadows will fall behind you.</h1>
                        <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                        <div class="media align-items-center mt-5">
                            <img alt="Image placeholder" src="../assets/img/prv/team-7-800x800.jpg" class="avatar avatar-sm mr-3">
                            <div class="media-body">
                                <span class="h6 mb-0">John Sullivan</span>
                                <span class="text-small text-muted">25th October 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <!-- Article body -->
            <article>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                <h5>First thing you need to do</h5>
                <figure class="figure">
                    <img alt="Image placeholder" src="../assets/img/prv/img-3-800x600.jpg" class="img-fluid rounded">
                    <figcaption class="mt-3 text-muted">Figure one: Type here your description</figcaption>
                </figure>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <h5>Second thing you need to do</h5>
                <figure class="figure">
                    <img alt="Image placeholder" src="../assets/img/prv/img-4-800x600.jpg" class="img-fluid rounded">
                    <figcaption class="mt-3 text-muted">Figure two: Type here your description</figcaption>
                </figure>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </article>
            <hr>
            <h5 class="mb-4">Comments</h5>
            <div class="p-5 bg-secondary border rounded">
                <div class="media">
                    <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="../assets/img/prv/team-1-800x800.jpg" style="width: 64px;">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
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
                                <img alt="Image placeholder" src="../assets/img/prv/team-2-800x800.jpg" class="rounded-circle shadow" style="width: 64px;">
                            </a>
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
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
                    <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="../assets/img/prv/team-3-800x800.jpg" style="width: 64px;">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
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
                <h5 class="mt-5 mb-4">Add you comment</h5>
                <form class="form-secondary">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="sr-only">Your name</label>
                                <input class="form-control" placeholder="Your name" type="text">
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
                        <textarea class="form-control textarea-autosize" rows="3" placeholder="Type your message" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 103px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-primary shadow mt-4">Reply</button>
                </form>
            </div>

        </div>
    </div>

                          
@endsection


@section('plugin')

<script type="text/javascript" src="/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
<script type="text/javascript" src="/js/star-rating.min.js"></script>

<script>
    $(document).ready(function(){
         
        $(".my-rating").starRating({
          totalStars: 5,
          emptyColor: 'lightgray',
          starShape: 'rounded',
          initialRating: 0,
          strokeWidth: 0,
          useGradient: false,
          callback: function(currentRating, $el){
            alert('rated ' + currentRating);
            console.log('DOM element ', $el);
          }
        });
            
    });
</script>
@endsection