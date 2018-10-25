@extends('layouts.main')

@section('css')

<link rel="stylesheet" type="text/css" href="/css/hr.css">

<style type="text/css">
    .cpost{
        border:2px dashed #ccc;
        height:250px;
    }

</style>

@endsection

@section('content')



      <div class="container py-3">
        <div class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Recieps</a></li>
          <li class="breadcrumb-item"><a href="#">Fish</a></li>
          <li class="breadcrumb-item active">Amazing fish steak</li>
        </div>
      </div>
      <article class="container g-block__three-rounds bg-white mb-3 p-md-5 p-3">

        <div class="row">
          <div class="col-12 col-md-6">
            <img class="img-fluid mb-3" src="/images/reciept_2_card.jpg" alt="How to cook jalapeno sauce"></div>
          <div class="col-12 col-md-6">
            <h1>How to cook jalapeno sauce</h1>
            <hr>
            <h4>Short info</h4>
            <p class="text-muted"><span><i class="fas fa-clock"></i> 2 hour, </span><span><i class="fas fa-heartbeat"></i> 135 calories</span></p>
            <p><strong>Autor : <a href="index.html">John Doe</a></strong></p>
            <hr><a class="btn btn-primary mb-3" href="#"><i class="fas fa-bookmark mr-2"></i> bookmark</a>
          </div>
        </div>
        <hr class="style16">
        <br>
        <div class="row">
          <div class="col-12 col-lg-4">

            <div class="sticky-top">
              <div class="b-list b-list__bordered b-list__white">
                <h4>Ingridients</h4>
                <div class="b-list_item custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listItem0">
                  <label class="b-list_item-title custom-control-label" for="listItem0"><span>10 g. Fish</span></label>
                  {{-- <div class="b-list_item-value"><span>350 g.</span>
                  </div> --}}
                </div>
                <div class="b-list_item custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listItem1">
                  <label class="b-list_item-title custom-control-label" for="listItem1"><span>Salt</span></label>
                  <div class="b-list_item-value"><span>10 g.</span></div>
                </div>
                <div class="b-list_item custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listItem2">
                  <label class="b-list_item-title custom-control-label" for="listItem2"><span>Sugar</span></label>
                  <div class="b-list_item-value"><span>15 g.</span></div>
                </div>
                <div class="b-list_item custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listItem3">
                  <label class="b-list_item-title custom-control-label" for="listItem3"><span>Water</span></label>
                  <div class="b-list_item-value"><span>400 ml.</span></div>
                </div>
              </div>
            </div>
            <div class="g-tag-list my-3"><a class="g-tag-list_item" href="#">fish</a><a class="g-tag-list_item" href="#">like a boss</a><a class="g-tag-list_item" href="#">salt</a></div>
          </div>
          <div class="col-12 col-lg-8">
            <h2>How to cook</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
            <hr>
            <div class="d-flex align-items-center">
              <h6 class="col" data-toggle="collapse" href="#stage1" role="button" aria-expanded="true" aria-controls="stage1"> 
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listStage0">
                  <label class="b-list_item-title custom-control-label" for="listStage0"><strong>Stage 1: Get a fish</strong></label>
                </div>
              </h6>
            </div>
            <div class="collapse show" id="stage1">
              <p>If it really difficult to fish, you can steal it.</p>
            </div>
            <div class="d-flex align-items-center">
              <h6 class="col" data-toggle="collapse" href="#stage2" role="button" aria-expanded="true" aria-controls="stage2"> 
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listStage2">
                  <label class="b-list_item-title custom-control-label" for="listStage2"><strong>Stage 2: Clean it</strong></label>
                </div>
              </h6>
            </div>
            <div class="collapse show" id="stage2">
              <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
            </div>
            <div class="d-flex align-items-center">
              <h6 class="col" data-toggle="collapse" href="#stage3" role="button" aria-expanded="true" aria-controls="stage3"> 
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listStage3">
                  <label class="b-list_item-title custom-control-label" for="listStage3"><strong>Stage 3: Cook it</strong></label>
                </div>
              </h6>
            </div>
            <div class="collapse show" id="stage3">
              <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
            </div>
            <div class="d-flex align-items-center">
              <h6 class="col" data-toggle="collapse" href="#stage4" role="button" aria-expanded="true" aria-controls="stage4"> 
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="listStage4">
                  <label class="b-list_item-title custom-control-label" for="listStage4"><strong>Stage 4: Finish</strong></label>
                </div>
              </h6>
            </div>
            <div class="collapse show" id="stage4"><img class="img-fluid my-3" src="/images/reciept_1_card.jpg" alt="Amazing fish steak">
              <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
            </div>
          </div>
        </div>
      </article>
      <!--simple items section-->
      <section class="container py-3">
        <h2 class="h1">Simple</h2>
        <div class="row">
          <div class="b-card col-12 col-md-6 col-xl-3">
            <div class="b-card_inner">
              <div class="b-card_image" style="background-image:url(/images/reciept_1_card.jpg)"><a class="b-card_image-link" href="object_default.html"></a>
                <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d44f68">Fish</span><span class="g-views"><i class="fa fa-eye"></i>12</span><span class="g-likes"><i class="fa fa-heart"></i>5</span></div>
                <div class="b-card_image-info-bottom"></div>
              </div>
              <div class="b-card_description">
                <h3 class="b-card_title"><a href="object_default.html">Amazing fish steak</a></h3>
                <div class="b-card_text">
                  <p>Pure some sugar on me.</p>
                </div>
                <div class="g-autor"><a href="index.html">Rambo</a></div>
              </div>
            </div>
          </div>
          <div class="b-card col-12 col-md-6 col-xl-3">
            <div class="b-card_inner">
              <div class="b-card_image" style="background-image:url(/images/reciept_2_card.jpg)"><a class="b-card_image-link" href="object_nohero.html"></a>
                <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#7d6dad">Spice</span><span class="g-views"><i class="fa fa-eye"></i>0</span><span class="g-likes"><i class="fa fa-heart"></i>0</span></div>
                <div class="b-card_image-info-bottom"></div>
              </div>
              <div class="b-card_description">
                <h3 class="b-card_title"><a href="object_nohero.html">How to cook jalapeno sauce</a></h3>
                <div class="b-card_text">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                </div>
                <div class="g-autor"><a href="index.html">John Doe</a></div>
              </div>
            </div>
          </div>
          <div class="b-card col-12 col-md-6 col-xl-3">
            <div class="b-card_inner">
              <div class="b-card_image" style="background-image:url(/images/reciept_3_card.jpg)"><a class="b-card_image-link" href="object_default_with_sidebar.html"></a>
                <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#d24a43">Meat</span><span class="g-views"><i class="fa fa-eye"></i>6</span><span class="g-likes"><i class="fa fa-heart"></i>30</span></div>
                <div class="b-card_image-info-bottom"></div>
              </div>
              <div class="b-card_description">
                <h3 class="b-card_title"><a href="object_default_with_sidebar.html">Fineness of cooking medium rare steak</a></h3>
                <div class="b-card_text">
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="g-autor"><a href="index.html">Rambo</a></div>
              </div>
            </div>
          </div>
          <div class="b-card col-12 col-md-6 col-xl-3">
            <div class="b-card_inner">
              <div class="b-card_image" style="background-image:url(/images/reciept_4_card.jpg)"><a class="b-card_image-link" href="object_default.html"></a>
                <div class="b-card_image-info-top"><span class="g-badge" style="background-color:#e8a765">Fruits</span><span class="g-views"><i class="fa fa-eye"></i>6</span><span class="g-likes"><i class="fa fa-heart"></i>30</span></div>
                <div class="b-card_image-info-bottom"></div>
              </div>
              <div class="b-card_description">
                <h3 class="b-card_title"><a href="object_default.html">Healthy food in the morning</a></h3>
                <div class="b-card_text">
                  <p></p>
                </div>
                <div class="g-autor"><a href="index.html">John Doe</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--simple items section END-->

@endsection