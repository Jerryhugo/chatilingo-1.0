<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="requests">
							<div class="title">
								<h1>Add your friends</h1>
								<button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class="material-icons">close</i></button>
							</div>
							<div class="content">
								<form> 
									
										

									
								@if ($allUsers)
								@foreach($allUsers as $user)
								<div class="list-group list-style my-4"  role="tablist">
											<div style = 'display:flex; justify-content: space-between; ' class="filterMembers all online contact" data-toggle="list">
											<div class="" style = 'display:flex;'>
												<img class="avatar-md" src="{{asset('frontend/dist/img/avatars/avatar-female-1.jpg')}}" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
											
												<div class="data mx-4">
													<h5>{{$user->name}}</h5>
													
												</div>
											</div>
												<a href="#" class="person-add">
													<i class="material-icons">person_add</i>
												</a>
											</div>
								
							
								</div>
								@endforeach
								@endif
								
									
							
									<!-- <div class="form-group">
										<label for="user">Username:</label>
										<input type="text" class="form-control" id="user" placeholder="Add recipient..." required>
										<div class="user" id="contact">
											<img class="avatar-sm" src="dist/img/avatars/avatar-female-5.jpg" alt="avatar">
											<h5>Keith Morris</h5>
											<button class="btn"><i class="material-icons">close</i></button>
										</div>
									</div>
									<div class="form-group">
										<label for="welcome">Message:</label>
										<textarea class="text-control" id="welcome" placeholder="Send your welcome message...">Hi Keith, I'd like to add you as a contact.</textarea>
									</div>
									<button type="submit" class="btn button w-100">Send Friend Request</button> -->
								</form>
							</div>
						</div>
					</div>
				</div> 


