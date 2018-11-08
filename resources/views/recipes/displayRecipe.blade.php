<div class="col-lg-3" style="margin-bottom:25px;">
    <div class="card shadow-sm shadow--hover">
        <img alt="Image placeholder" src="{{$recipe->image}}" class="card-img-top">
        <div class="card-body py-5 text-center">
            <a href="{{$recipe->link}}" class="h5 lh-150">{{$recipe->title}}</a>
            <h6 class="text-muted mt-4 mb-0">{{$recipe->created_at->diffForHumans()}}</h6>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item pr-4">
                            <button href="#" class="text-muted" type="submit" data-id='{{$recipe->id}}'><i class="far fa-bookmark mr-1 text-muted" style="color:#000;"></i> 131</button>
                        </li>
                        <li class="list-inline-item pr-4">
                            <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                        </li>
                   
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
