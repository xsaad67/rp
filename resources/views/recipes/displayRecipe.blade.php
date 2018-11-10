<div class="col-lg-3 d-flex align-items-stretch" style="margin-bottom:25px;" >
    <div class="card shadow-sm shadow--hover " style="width:100%;">
        <img alt="Image placeholder" src="{{asset('img/any.jpg')}}" class="card-img-top">
        <div class="card-body row">

            <a href="{{$recipe->link}}" class="col-12 text-truncate">{{$recipe->title}}</a>
            <span class="stars" data-rating="{{2}}" data-num-stars="5" ></span>
            {{-- <h6 class="text-muted mt-4 mb-0">{{$recipe->created_at->diffForHumans()}}</h6> --}}
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item pr-4">
                            <a href="#" class="text-muted {{ $recipe->favoriters->contains('id',auth()->id()) ? 'bookmarked' : 'bookmark' }} " data-id='{{$recipe->id}}'><i class="{{ $recipe->favoriters->contains('id',auth()->id()) ? 'fas' : 'far' }} fa-bookmark mr-1 text-muted" style="color:#000;"></i> {{ count($recipe->favoriters) }}</a>
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


@section('footer')

<script>
    $(function(){


    $.fn.stars = function() {
        return $(this).each(function() {

            var rating = $(this).data("rating");

            var numStars = $(this).data("numStars");

            var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star"></i>');

            var halfStar = ((rating%1) !== 0) ? '<i class="fa fa-star-half-empty"></i>': '';

            var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o"></i>');

            $(this).html(fullStar + halfStar + noStar);

        });
    }
    
    $('.stars').stars();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $(".card-footer").on('click','.bookmark',function(e){
            e.preventDefault();
            var id = $(this).data("id");
            $.ajax({
                type:'POST',
                url:'/favorite',
                data:{ id: id },
                context: this,
                success:function(data){
                if(data.unauth==1){ window.location.href = '/login'; }
                    else
                    {
                        $(this).removeClass('bookmark').addClass('bookmarked');
                        $(this).find('i').removeClass('far').addClass('fas'); 
                        $(this).contents().filter(function(){ 
                            return this.nodeType == 3; 
                        })[0].nodeValue = data.totalVotes;
                    }
                }
            });
            
            
        });


        $(".card-footer").on('click','.bookmarked',function(e){

            e.preventDefault();

            var id = $(this).data("id");
            $.ajax({
                type:'POST',
                url:'/favorite',
                data:{ id: id },
                context: this,
                success:function(data){
                if(data.unauth==1){ window.location.href = '/login'; }
                    else
                    {
                        $(this).removeClass('bookmarked').addClass('bookmark');
                        $(this).find('i').removeClass('fas').addClass('far'); 
                        $(this).contents().filter(function(){ 
                            return this.nodeType == 3; 
                        })[0].nodeValue = data.totalVotes;
                    }
                }
            });

        });


    });
</script>
@endsection