@extends('layouts.main')

@section('css')

<style>
.image-preview {
    width: 200px;
    height: 200px;
    position: relative;
    overflow: hidden;
    background-color: #f3eeee;
    color: #ecf0f1;
}
.image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
.image-preview label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 150px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>

@endsection

@section('content')


<section class="container py-3">
        <div class="row mb-5">
          <div class="col-12 col-lg-10 ml-auto mr-auto text-center">
            <div class="g-block__three-rounds bg-white px-4 py-4">

            <form method="POST" action="{{action('RecipeController@store')}}">
                  @csrf
               <div class="form-group" id="ing-section">
                      <input type="text" class="form-control border-input ing" id="ing" name="ing[]" >
                </div>
            
                  <div class="form-group" id="inst-section">
                      <input type="text" class=" inst" id="inst" name="inst[]">

                      <div class="image-preview" id="preview">
                        <label for="image-upload" class="image-label">Choose File</label>
                        <input type="file" name="instImage[]" class="image-upload" id="uploading" />
                      </div>
                  </div>
               
                  <div class="text-center">
                      <button type="button" class="btn btn-primary">Save</button>
                  </div>
            </form>

              
            </div>
          </div>
       
        </div>
      </section>

@endsection

@section('footer')

  <script src="/js/upload-preview.min.js"></script>


  <script type="text/javascript">
    
    $(function(){
        $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
  
  var count =1; 
      
    $.uploadPreview({
      input_field: "#uploading",
      preview_box: "#preview",
      label_field: ".image-label"
    });

    
      $('#ing-section').on('keyup', '.ing', function(e) {
    
          var code = e.keyCode || e.which;
          if(code==13){
              $("#ing-section").append('<input type="text" class="form-control border-input ing" name="ing[]" id="ing'+count+'">');
                $("#ing"+count).focus();
              count++;
              //alert(count);
            

          }
      });

  
                      
          $("#inst-section").on('keyup','.inst',function(e){

            var instruction  = '<input type="text" class="form-control border-input inst" id="inst" name="inst[]">';
            instruction  += '<div class="image-preview" id="preview'+count+'">';
            instruction  += '<label for="image-upload" class="image-label">Choose File</label>';
            instruction  +='<input type="file" name="instImage[]" class="image-upload" id="uploading'+count+'" /></div>';

            var code = e.keyCode || e.which;
            if(code==13){
              $("#inst-section").append(instruction);
                  $.uploadPreview({
                    input_field: "#uploading"+count,
                    preview_box: "#preview"+count,
                    label_field: ".image-label"
                  });
                count++;
            }
          });   

    });
  </script>



@endsection