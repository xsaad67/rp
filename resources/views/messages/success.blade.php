@section('css')
<style>

#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
	background-color: #239821 !important;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

.success{
	background-color: #239821 !important;
}
.error{
	background-color:#cc1133;
}

</style>
@endsection


 <div class="success" id="snackbar">Some text some message.. Some text some message.. Some text some message..</div>


@section('footer')

<script>

function printToast() {
	var x = document.getElementById("snackbar");
	x.className = "show";
	// setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}


$(function(){
    printToast();
});

</script>

@endsection