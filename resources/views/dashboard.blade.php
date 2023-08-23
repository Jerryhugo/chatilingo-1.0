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
                @include('fragments.chat')
				<!-- End of Create Chat -->
				<div class="main">
					<div class="tab-content" id="nav-tabContent">
						<!-- Start of Babble -->
						<div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
							<!-- Start of Chat -->

							<!-- End of Chat -->
							<!-- Start of Call -->
							<div class="call" id="call1">
								<div class="content">
									<div class="container">
										<div class="col-md-12">
											<div class="inside">
												<div class="panel">
													<div class="participant">
														<img class="avatar-xxl" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
														<span>Connecting</span>
													</div>							
													<div class="options">
														<button class="btn option"><i class="material-icons md-30">mic</i></button>
														<button class="btn option"><i class="material-icons md-30">videocam</i></button>
														<button class="btn option call-end"><i class="material-icons md-30">call_end</i></button>
														<button class="btn option"><i class="material-icons md-30">person_add</i></button>
														<button class="btn option"><i class="material-icons md-30">volume_up</i></button>
													</div>
													<button class="btn back" name="1"><i class="material-icons md-24">chat</i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End of Call -->
						</div>
						<!-- End of Babble -->
						<!-- Start of Babble -->
						<div class="babble tab-pane fade" id="list-empty" role="tabpanel" aria-labelledby="list-empty-list">
							<!-- Start of Chat -->
	
							<!-- End of Chat -->
							<!-- Start of Call -->
							<div class="call" id="call2">
								<div class="content">
									<div class="container">
										<div class="col-md-12">
											<div class="inside">
												<div class="panel">
													<div class="participant">
														<img class="avatar-xxl" src="dist/img/avatars/avatar-female-2.jpg" alt="avatar">
														<span>Connecting</span>
													</div>							
													<div class="options">
														<button class="btn option"><i class="material-icons md-30">mic</i></button>
														<button class="btn option"><i class="material-icons md-30">videocam</i></button>
														<button class="btn option call-end"><i class="material-icons md-30">call_end</i></button>
														<button class="btn option"><i class="material-icons md-30">person_add</i></button>
														<button class="btn option"><i class="material-icons md-30">volume_up</i></button>
													</div>
													<button class="btn back" name="2"><i class="material-icons md-24">chat</i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End of Call -->
						</div>
						<!-- End of Babble -->
						<!-- Start of Babble -->
						<div class="babble tab-pane fade" id="list-request" role="tabpanel" aria-labelledby="list-request-list">
							<!-- Start of Chat -->
							<div class="chat" id="chat3">
								<div class="top">
									<div class="container">
										<div class="col-md-12">
											<div class="inside">
												<a href="#"><img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar"></a>
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5><a href="#">Louis Martinez</a></h5>
													<span>Inactive</span>
												</div>
												<button class="btn disabled d-md-block d-none" disabled><i class="material-icons md-30">phone_in_talk</i></button>
												<button class="btn disabled d-md-block d-none" disabled><i class="material-icons md-36">videocam</i></button>
												<button class="btn d-md-block disabled d-none" disabled><i class="material-icons md-30">info</i></button>
												<div class="dropdown">
													<button class="btn disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled><i class="material-icons md-30">more_vert</i></button>
													<div class="dropdown-menu dropdown-menu-right">
														<button class="dropdown-item"><i class="material-icons">phone_in_talk</i>Voice Call</button>
														<button class="dropdown-item"><i class="material-icons">videocam</i>Video Call</button>
														<hr>
														<button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
														<button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
														<button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="content empty">
									<div class="container">
										<div class="col-md-12">
											<div class="no-messages request">
												<a href="#"><img class="avatar-xl" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar"></a>
												<h5>Louis Martinez would like to add you as a contact. <span>Hi Keith, I'd like to add you as a contact.</span></h5>
												<div class="options">
													<button class="btn button"><i class="material-icons">check</i></button>
													<button class="btn button"><i class="material-icons">close</i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="col-md-12">
										<div class="bottom">
											<form class="position-relative w-100">
												<textarea class="form-control" placeholder="Messaging unavailable" rows="1" disabled></textarea>
												<button class="btn emoticons disabled" disabled><i class="material-icons">insert_emoticon</i></button>
												<button class="btn send disabled" disabled><i class="material-icons">send</i></button>
											</form>
											<label>
												<input type="file" disabled>
												<span class="btn attach disabled d-sm-block d-none"><i class="material-icons">attach_file</i></span>
											</label> 
										</div>
									</div>
								</div>
							</div>
							<!-- End of Chat -->
						</div>
						<!-- End of Babble -->
					</div>
				</div>
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap/Swipe core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="{{asset('frontend/dist/js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="{{{asset('frontend/dist/js/vendor/jquery-slim.min.js"><\/script>')}}}')</script>
		<script src="{{asset('frontend/dist/js/vendor/popper.min.js')}}"></script>
		<script src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>
		<script>
			function scrollToBottom(el) { el.scrollTop = el.scrollHeight; }
			scrollToBottom(document.getElementById('content'));
		</script>
	</body>

</html>