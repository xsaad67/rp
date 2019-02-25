 $(function(){
    
    function showLoginForm(){
        window.location.replace("/login");
    }

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(".cornerimage").click(function(){
        var id = $(this).data("id");
        $.ajax({
            type:'POST',
            url:'/favorite',
            data:{id:id},
            context: this,
            success:function(data){
                if(data.unauth==1){
                    showLoginForm();
                }                       
                $(this).addClass('class',data.class);
                
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                if(xhr.status===419){
                    showLoginForm();
                }
            }

        });
    });

});



