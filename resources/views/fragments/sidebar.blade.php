<div class="sidebar" id="sidebar">
					<div class="container">
						<div class="col-md-12">
							<div class="tab-content">
								<!-- Start of Contacts -->
								<div class="tab-pane fade" id="members">
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="people" placeholder="Search for people...">
											<button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
										</form>
										<a href="{{route('display.friends')}}" id="displayFriendsButton" class="btn create" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons">person_add</i></a>
									</div>
									<div class="list-group sort">
										<button class="btn filterMembersBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterMembersBtn" data-toggle="list" data-filter="online">Online</button>
										<button class="btn filterMembersBtn" data-toggle="list" data-filter="offline">Offline</button>
									</div>						
									<div class="contacts">
										<h1>Contacts</h1>
										<div class="list-group" id="contacts" role="tablist">
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Janette Dalton</h5>
													<p>Sofia, Bulgaria</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Michael Knudsen</h5>
													<p>Washington, USA</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Lean" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Lean Avent</h5>
													<p>Shanghai, China</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="Mariette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Mariette Toles</h5>
													<p>Helena, Montana</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Harmony" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Harmony Otero</h5>
													<p>Indore, India</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Keith Morris</h5>
													<p>Chisinau, Moldova</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Louis Martinez</h5>
													<p>Vienna, Austria</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Ryan" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Ryan Foster</h5>
													<p>Oslo, Norway</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Mildred" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Mildred Bennett</h5>
													<p>London, United Kingdom</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Contacts -->
								<!-- Start of Discussions -->
								<div id="discussions" class="tab-pane fade active show">
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="conversations" placeholder="Search for conversations...">
											<button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
										</form>
										<button class="btn create" data-toggle="modal" data-target="#startnewchat"><i class="material-icons">create</i></button>
									</div>
									<div class="list-group sort">
										<button class="btn filterDiscussionsBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterDiscussionsBtn" data-toggle="list" data-filter="read">Read</button>
										<button class="btn filterDiscussionsBtn" data-toggle="list" data-filter="unread">Unread</button>
									</div>						
									<div class="discussions">
										<h1>Discussions</h1>
										<div class="list-group" id="chats" role="tablist">
											<a href="#list-chat" class="filterDiscussions all unread single active" id="list-chat-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="new bg-yellow">
													<span>+7</span>
												</div>
												<div class="data">
													<h5>Janette Dalton</h5>
													<span>Mon</span>
													<p>A new feature has been updated to your account. Check it out...</p>
												</div>
											</a>									
											<a href="#list-empty" class="filterDiscussions all unread single" id="list-empty-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="new bg-pink">
													<span>+10</span>
												</div>
												<div class="data">
													<h5>Michael Knudsen</h5>
													<span>Sun</span>
													<p>How can i improve my chances of getting a deposit?</p>
												</div>
											</a>									
											<a href="#list-chat" class="filterDiscussions all read single" id="list-chat-list2" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Lean" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Lean Avent</h5>
													<span>Tus</span>
													<p>Hey Chris, could i ask you to help me out with variation...</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all read single" id="list-empty-list2" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="Mariette" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Mariette Toles</h5>
													<span>5 mins</span>
													<p>By injected humour, or randomised words which...</p>
												</div>
											</a>
											<a href="#list-chat" class="filterDiscussions all read single" id="list-chat-list3" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Harmony" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Harmony Otero</h5>
													<span>Mon</span>
													<p>No more running out of the office at 4pm on Fridays!</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all read single" id="list-empty-list3" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Keith Morris</h5>
													<span>Fri</span>
													<p>All your favourite books at your reach! We are now mobile.</p>
												</div>
											</a>
											<a href="#list-request" class="filterDiscussions all unread single" id="list-request-list" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="new bg-gray">
													<span>?</span>
												</div>
												<div class="data">
													<h5>Louis Martinez</h5>
													<span>Feb 10</span>
													<p>Hi Keith, I'd like to add you as a contact.</p>
												</div>
											</a>
											<a href="#list-empty" class="filterDiscussions all read single" id="list-empty-list4" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Ryan" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Ryan Foster</h5>
													<span>Feb 9</span>
													<p>Dear Deborah, your Thai massage is today at 5pm.</p>
												</div>
											</a>
											<a href="#list-chat" class="filterDiscussions all unread single" id="list-chat-list5" data-toggle="list" role="tab">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Mildred" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="new bg-green">
													<span>+9</span>
												</div>
												<div class="data">
													<h5>Mildred Bennett</h5>
													<span>Thu</span>
													<p>Unfortunately your session today has been cancelled!</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Discussions -->
								<!-- Start of Notifications -->
								<div id="notifications" class="tab-pane fade">
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="notice" placeholder="Filter notifications...">
											<button type="button" class="btn btn-link loop"><i class="material-icons filter-list">filter_list</i></button>
										</form>
									</div>
									<div class="list-group sort">
										<button class="btn filterNotificationsBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterNotificationsBtn" data-toggle="list" data-filter="latest">Latest</button>
										<button class="btn filterNotificationsBtn" data-toggle="list" data-filter="oldest">Oldest</button>
									</div>						
									<div class="notifications">
										<h1>Notifications</h1>
										<div class="list-group" id="alerts" role="tablist">
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-1.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Janette has accepted your friend request on Swipe.</p>
													<span>Oct 17, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-1.jpg" data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Michael, you have a new friend suggestion today.</p>
													<span>Jun 21, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-2.jpg" data-toggle="tooltip" data-placement="top" title="Mariette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Mariette have just sent you a new message.</p>
													<span>Feb 15, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-6.jpg" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Louis has a birthday today. Wish her all the best.</p>
													<span>Mar 23, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all latest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-3.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Harmony has accepted your friend request on Swipe.</p>
													<span>Jan 5, 2018</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Keith have just sent you a new message.</p>
													<span>Dec 22, 2017</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-2.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Michael, you have a new friend suggestion today.</p>
													<span>Nov 29, 2017</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-3.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Ryan have just sent you a new message.</p>
													<span>Sep 31, 2017</span>
												</div>
											</a>
											<a href="#" class="filterNotifications all oldest notification" data-toggle="list">
												<img class="avatar-md" src="dist/img/avatars/avatar-male-4.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<p>Mildred has a birthday today. Wish him all the best.</p>
													<span>Jul 19, 2017</span>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Notifications -->
								<!-- Start of Settings -->
								<div class="tab-pane fade" id="settings">			
									<div class="settings">
										<div class="profile">
											<img class="avatar-xl" src="{{asset('frontend/dist/img/avatars/avatar-male-1.jpg')}}" alt="avatar">
											<h1><a href="#">{{$name}}</a></h1>
											<!-- <span>Helena, Montana</span> -->
											<div class="stats">
												<div class="item">
													<h2>122</h2>
													<h3>Fellas</h3>
												</div>
												<!-- <div class="item">
													<h2>305</h2>
													<h3>Chats</h3>
												</div>
												<div class="item">
													<h2>1538</h2>
													<h3>Posts</h3>
												</div> -->
											</div>
										</div>
										<div class="categories" id="accordionSettings">
											<h1>Settings</h1>
											<!-- Start of My Account -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<i class="material-icons md-30 online">person_outline</i>
													<div class="data">
														<h5>My Account</h5>
														<p>Update your profile details</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionSettings">
													<div class="content">
													<input id="profileImage" type="file">
														<div class="upload">
															<div class="data">
																<img id="showImage" class="avatar-xl" src="{{asset('frontend/dist/img/avatars/avatar-male-1.jpg')}}" alt="image">
																
																	<!-- <input id="profileImage" type="file">
																	<span class="btn button">Upload avatar</span> -->
																
															</div>
															<p>For best results, use an image at least 256px by 256px in either .jpg or .png format!</p>
														</div>
														<form method="post" action="{{route('update.account')}}">
															@csrf
															<div class="parent">
																<div class="field">
																	<label for="firstName">Name <span>*</span></label>
																	<input type="text" name='name' class="form-control" id="firstName" placeholder="{{$name}}" value="{{$name}}" >
																</div>
															
															</div>
															<div class="field">
																<label for="email">Email <span>*</span></label>
																<input type="email" name="email" class="form-control" id="email" placeholder="{{$email}}" value="{{$email}}" >
															</div>
															<div class="field">
																<label for="password">Password</label>
																<input type="password" name="new_password" class="form-control"  placeholder="New password" value="">
															</div>
															<div class="field">
																<label for="password">Password</label>
																<input type="password" name="comfirm_password" class="form-control"  placeholder="Confirm password" value="">
															</div>
															@if ($errors->any())
															
																	@foreach ($errors->all() as $error)
																	<span class="tex-danger">
																		{{ $error }}
																	</span>
																	@endforeach
															@endif
														
															<a id="delete" href="{{route('delete.account')}}" class="btn btn-link w-100">Delete Account</a>
															<button type="submit" class="btn button w-100">Apply</button>
														</form>
														
													</div>
												</div>
											</div>
											<!-- End of My Account -->
											<!-- Start of Chat History -->
											<div class="category">
												<a href="#" class="title collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
													<i class="material-icons md-30 online">mail_outline</i>
													<div class="data">
														<h5>Chats</h5>
														<p>Check your chat history</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionSettings">
													<div class="content layer">
														<div class="history">
															<p>When you clear your conversation history, the messages will be deleted from your own device.</p>
															<p>The messages won't be deleted or cleared on the devices of the people you chatted with.</p>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="same-address">
																<label class="custom-control-label" for="same-address">Hide will remove your chat history from the recent list.</label>
															</div>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="save-info">
																<label class="custom-control-label" for="save-info">Delete will remove your chat history from the device.</label>
															</div>
															<button type="submit" class="btn button w-100">Clear blah-blah</button>
														</div>
													</div>
												</div>
											</div>
											<!-- End of Chat History -->
											<!-- Start of Notifications Settings -->
											<!-- <div class="category">
												<a href="#" class="title collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
													<i class="material-icons md-30 online">notifications_none</i>
													<div class="data">
														<h5>Notifications</h5>
														<p>Turn notifications on or off</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionSettings">
													<div class="content no-layer">
														<div class="set">
															<div class="details">
																<h5>Desktop Notifications</h5>
																<p>You can set up Swipe to receive notifications when you have new messages.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Unread Message Badge</h5>
																<p>If enabled shows a red badge on the Swipe app icon when you have unread messages.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Taskbar Flashing</h5>
																<p>Flashes the Swipe app on mobile in your taskbar when you have new notifications.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Notification Sound</h5>
																<p>Set the app to alert you via notification sound when you have unread messages.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Vibrate</h5>
																<p>Vibrate when receiving new messages (Ensure system vibration is also enabled).</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Turn On Lights</h5>
																<p>When someone send you a text message you will receive alert via notification light.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
													</div>
												</div>
											</div> -->
											<!-- End of Notifications Settings -->
											<!-- Start of Connections -->
											<!-- <div class="category">
												<a href="#" class="title collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
													<i class="material-icons md-30 online">sync</i>
													<div class="data">
														<h5>Connections</h5>
														<p>Sync your social accounts</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionSettings">
													<div class="content">
														<div class="app">
															<img src="dist/img/integrations/slack.svg" alt="app">
															<div class="permissions">
																<h5>Skrill</h5>
																<p>Read, Write, Comment</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="app">
															<img src="dist/img/integrations/dropbox.svg" alt="app">
															<div class="permissions">
																<h5>Dropbox</h5>
																<p>Read, Write, Upload</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="app">
															<img src="dist/img/integrations/drive.svg" alt="app">
															<div class="permissions">
																<h5>Google Drive</h5>
																<p>No permissions set</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="app">
															<img src="dist/img/integrations/trello.svg" alt="app">
															<div class="permissions">
																<h5>Trello</h5>
																<p>No permissions set</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
													</div>
												</div>
											</div> -->
											<!-- End of Connections -->
											<!-- Start of Appearance Settings -->
											<!-- <div class="category">
												<a href="#" class="title collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
													<i class="material-icons md-30 online">colorize</i>
													<div class="data">
														<h5>Appearance</h5>
														<p>Customize the look of Swipe</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionSettings">
													<div class="content no-layer">
														<div class="set">
															<div class="details">
																<h5>Turn Off Lights</h5>
																<p>The dark mode is applied to core areas of the app that are normally displayed as light.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round mode"></span>
															</label>
														</div>
													</div>
												</div>
											</div> -->
											<!-- End of Appearance Settings -->
											<!-- Start of Language -->
											<!-- <div class="category">
												<a href="#" class="title collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
													<i class="material-icons md-30 online">language</i>
													<div class="data">
														<h5>Language</h5>
														<p>Select preferred language</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionSettings">
													<div class="content layer">
														<div class="language">
															<label for="country">Language</label>
															<select class="custom-select" id="country" required>
																<option value="">Select an language...</option>
																<option>English, UK</option>
																<option>English, US</option>
															</select>
														</div>
													</div>
												</div>
											</div> -->
											<!-- End of Language -->
											<!-- Start of Privacy & Safety -->
											<!-- <div class="category">
												<a href="#" class="title collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
													<i class="material-icons md-30 online">lock_outline</i>
													<div class="data">
														<h5>Privacy & Safety</h5>
														<p>Control your privacy settings</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
												<div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionSettings">
													<div class="content no-layer">
														<div class="set">
															<div class="details">
																<h5>Keep Me Safe</h5>
																<p>Automatically scan and delete direct messages you receive from everyone that contain explict content.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>My Friends Are Nice</h5>
																<p>If enabled scans direct messages from everyone unless they are listed as your friend.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Everyone can add me</h5>
																<p>If enabled anyone in or out your friends of friends list can send you a friend request.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Friends of Friends</h5>
																<p>Only your friends or your mutual friends will be able to send you a friend reuqest.</p>
															</div>
															<label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Data to Improve</h5>
																<p>This settings allows us to use and process information for analytical purposes.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
														<div class="set">
															<div class="details">
																<h5>Data to Customize</h5>
																<p>This settings allows us to use your information to customize Swipe for you.</p>
															</div>
															<label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
														</div>
													</div>
												</div>
											</div> -->
											<!-- End of Privacy & Safety -->
											<!-- Start of Logout -->
											<!-- <div class="category">
												<a href="sign-in.html" class="title collapsed">
													<i class="material-icons md-30 online">power_settings_new</i>
													<div class="data">
														<h5>Power Off</h5>
														<p>Log out of your account</p>
													</div>
													<i class="material-icons">keyboard_arrow_right</i>
												</a>
											</div> -->
											<!-- End of Logout -->
										</div>
									</div>
								</div>
								<!-- End of Settings -->
							</div>
						</div>
					</div>
				</div>


				<script>
        $(document).ready(function(){
            $('#profileImage').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            });
        });
</script>