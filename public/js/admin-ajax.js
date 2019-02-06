 $(function(){
    
    function showLoginForm(){
        window.location.replace("/login");
    }

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

                $(this).attr('class','cornerimage '+data.class);
                
                console.log(data);
            }
        });
    });

});

