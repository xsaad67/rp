@extends('admin.a_layouts.admin_main')


@section("content")

 <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <!-- .breadcrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#!"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Cuisine</a>
                    </li>
                  </ol>
                </nav><!-- /.breadcrumb -->

               
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                  <!-- .card-header -->
                  <header class="card-header">
                    
                  </header><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    
                    <!-- .table-responsive -->
                    <div class="text-muted"> Showing {{$cuisines->currentPage()}} to {{$cuisines->count()}} from {{$cuisines->total()}} results </div>
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Total Recipes </th>
                            <th> Description </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>

                        @foreach($cuisines as $cuisine)
                          <!-- tr -->
	                        <tr>
		                        <td>
		                        @if(!is_null($cuisine->image))
		                          <a href="{{$cuisine->link}}" class="tile tile-img mr-1">
		                          	
		                          	<img class="img-fluid" src="assets/images/dummy/img-1.jpg" alt="Card image cap">
		                          	
		                          </a> 
		                         @endif
		                          	<a href="{{$cuisine->link}}">{{$cuisine->name}}</a>
		                        </td>
		                        <td class="align-middle"> {{$cuisine->recipes_count}} </td>
		                        <td class="align-middle"> {{$cuisine->description}} </td>
		                        
		                        <td class="align-middle text-right">
		                          <a href="#!" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#!" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
		                        </td>
	                        </tr>
                          <!-- /tr -->
                        @endforeach

                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .pagination -->
                    <ul class="pagination justify-content-center mt-4">
                     	{{$cuisines->links()}}
                    </ul><!-- /.pagination -->
                  </div><!-- /.card-body -->
                </section><!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Table Variants </h2>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-header -->
                      <header class="card-header border-0">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Hoverable</span>
                          <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">Edit</a> <a href="#!" class="dropdown-item">Archive</a> <a href="#!" class="dropdown-item">Remove</a>
                            </div>
                          </div>
                        </div>
                      </header><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-header -->
                      <header class="card-header border-0">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Striped rows</span>
                          <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#!" class="dropdown-item">Edit</a> <a href="#!" class="dropdown-item">Archive</a> <a href="#!" class="dropdown-item">Remove</a>
                            </div>
                          </div>
                        </div>
                      </header><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-striped">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-header -->
                      <header class="card-header">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Bordered</span> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-copy"></i></button> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-download"></i></button>
                        </div>
                      </header><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-bordered">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-header -->
                      <header class="card-header border-0">
                        <div class="d-flex align-items-center">
                          <span class="mr-auto">Condensed</span> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-copy"></i></button> <button type="button" class="btn btn-icon btn-light"><i class="fa fa-download"></i></button>
                        </div>
                      </header><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-sm mb-0">
                          <!-- thead -->
                          <thead class="thead-">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Sweet Pea Sprouts </td>
                              <td> 478 </td>
                              <td> $32.89 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Spice - Paprika </td>
                              <td> 421 </td>
                              <td> $28.32 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Tea - Lemon Scented </td>
                              <td> 371 </td>
                              <td> $32.83 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Head options </h2>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover">
                          <!-- thead -->
                          <thead class="thead-light">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-xl-6">
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover">
                          <!-- thead -->
                          <thead class="thead-dark">
                            <tr>
                              <th style="min-width:200px"> Product </th>
                              <th> Variants </th>
                              <th> Prices </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td> Wine - Chateau Bonnet </td>
                              <td> 113 </td>
                              <td> $22.38 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Cookie - Oatmeal </td>
                              <td> 216 </td>
                              <td> $21.90 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> True - Vue Containers </td>
                              <td> 191 </td>
                              <td> $24.96 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Nut - Pumpkin Seeds </td>
                              <td> 329 </td>
                              <td> $32.21 </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td> Artichoke - Bottom, Canned </td>
                              <td> 375 </td>
                              <td> $27.75 </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div>
@endsection
