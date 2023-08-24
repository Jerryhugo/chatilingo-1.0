<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Swipe – The Simplest Chat Platform</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/dist/css/lib/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
			<!-- Swipe core CSS -->
			<link href="{{asset('frontend/dist/css/swipe.min.css')}}" type="text/css" rel="stylesheet">
			<!-- Favicon -->
			<link href="{{asset('frontend/dist/img/favicon.png')}}" type="image/png" rel="icon">
	<!-- toaster css link		 -->
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
	</head>
	<body>
		<main>
			<div class="layout">
				<!-- Start of Navigation -->
                    @include('fragments.navigation')
				<!-- End of Navigation -->
				<!-- Start of Sidebar -->
                    @include('fragments.sidebar')
				<!-- End of Sidebar -->
				<!-- Start of Add Friends -->
                    @include('fragments.friends')
				<!-- End of Add Friends -->
				<!-- Start of Create Chat -->
                    @include('fragments.create_chat')
				<!-- End of Create Chat -->
                    @include('fragments.main.main')
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap/Swipe core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/swipe.min.js"></script>
		

        <script src="{{asset('frontend/dist/js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="{{{asset('frontend/dist/js/vendor/jquery-slim.min.js"><\/script>')}}}')</script>
		<script src="{{asset('frontend/dist/js/vendor/popper.min.js')}}"></script>
		<script src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="{{asset('frontend/dist/js/jquery.min.js')}}"></script>

        <script src="{{ asset('frontend/dist/js/code.js') }}"></script>
        

		<script>
			function scrollToBottom(el) { el.scrollTop = el.scrollHeight; }
			scrollToBottom(document.getElementById('content'));
		</script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
============

   
	</body>

</html>