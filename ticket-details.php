<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Tickets - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
				<div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col-md-4">
								<h3 class="page-title mb-0">Ticket Detail</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<hr>
					<div class="row">
						<div class="col-xl-8 col-lg-7">
							<div class="ticket-detail-head">
								<div class="row">
									<div class="col-xxl-3 col-md-6">
										<div class="ticket-head-card">
											<span class="ticket-detail-icon"><i class="la la-stop-circle"></i></span>
											<div class="detail-info">
												<h6>Status</h6>
												<span class="badge badge-soft-warning">In Progress</span>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-md-6">
										<div class="ticket-head-card">
											<span class="ticket-detail-icon bg-danger-lights"><i class="la la-user"></i></span>
											<div class="detail-info info-two">
												<h6>Created By</h6>
												<span>John Doe</span>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-md-6">
										<div class="ticket-head-card">
											<span class="ticket-detail-icon bg-warning-lights"><i class="la la-calendar"></i></span>
											<div class="detail-info info-two">
												<h6>Created Date</h6>
												<span>08 Feb 2024</span>
											</div>
										</div>
									</div><div class="col-xxl-3 col-md-6">
										<div class="ticket-head-card">
											<span class="ticket-detail-icon bg-purple-lights"><i class="la la-info-circle"></i></span>
											<div class="detail-info">
												<h6>Priority</h6>
												<span class="badge badge-soft-danger">High</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="ticket-purpose">
								<h4>Laptop Issue</h4>
								<p>For the past week, my laptop has been experiencing intermittent freezing issues. The freezes occur randomly, approximately 3-4 times a day, and last about 30-60 seconds each time. During these freezes, the cursor becomes unresponsive, and I am unable to click on anything or use keyboard shortcuts. The issue usually resolves itself, but it significantly disrupts my work.</p>
								<ul>
									<li>
										I first noticed the problem on February 1, 2024, while using Google Meet for a video conference. Since then, the issue has occurred during various tasks, including browsing with Chrome, using Microsoft Office applications, and even when the laptop is idle.
									</li>
									<li>
										Error messages: No specific error messages have appeared, but the Task Manager (when accessible) shows a spike in CPU usage to 100% during these freezes.
									</li>
								</ul>
							</div>
							<div class="attached-files-info">
								<div class="row">
									<div class="col-xxl-6">
										<div class="attached-files">
											<ul>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-file-pdf"></i></span>
														<p>file0702202413.pdf</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-file-pdf"></i></span>
														<p>file0702202414.pdf</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-file-alt"></i></span>
														<p>file0702202418.doc</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-file-alt"></i></span>
														<p>file0702202419.doc</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-file-alt"></i></span>
														<p>file0702202420.doc</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xxl-6">
										<div class="attached-files media-attached-files">
											<ul>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-image"></i></span>
														<p>Image0702202411.jpg</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-image"></i></span>
														<p>Image0702202412.jpg</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-file-video"></i></span>
														<p>Video0702202415.mp4</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-image"></i></span>
														<p>Image0702202420.png</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
												<li>
													<div class="d-flex align-items-center">
														<span class="file-icon"><i class="la la-image"></i></span>
														<p>Image0702202421.png</p>
													</div>
													<div class="file-download">
														<a href="#"><i class="la la-download"></i>Download</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-5 theiaStickySidebar">
							<div class="ticket-chat">
								<div class="ticket-chat-head">
									<h4>Ticket Chat</h4>
									<div class="chat-post-box">
										<form action="ticket-details.php">
											<textarea class="form-control" rows="4">Post</textarea>
											<div class="files-attached d-flex justify-content-between align-items-center">
												<div class="post-files">
													<a href="javascript:void(0);"><i class="la la-image"></i></a>
													<a href="javascript:void(0);"><i class="la la-file-video"></i></a>
												</div>
												<button type="submit">Sent</button>
											</div>
										</form>
										
									</div>
								</div>
								<div class="ticket-chat-body">
									<ul class="created-tickets-info">
										<li>
											<div class="ticket-created-user">
												<span class="avatar"><img src="assets/img/avatar/avatar-27.jpg" alt="User Image"></span>
												<div class="user-name">
													<h5><span>John Doe</span> posted a status</h5>
													<span>5 hours ago</span>
												</div>
												
											</div>
										</li>
										<li>
											<div class="ticket-created-info">
												<h6>Impact on Work</h6>
												<p>This issue disrupts meetings, delays task completion, and affects my overall productivity.</p>
												<a href="#" class="comment-text"><i class="la la-comments me-2"></i>Comments (2)</a>
												
											</div>
										</li>
										<li>
											<div class="ticket-created-user">
												<span class="avatar"><img src="assets/img/avatar/avatar-1.jpg" alt="User Image"></span>
												<div class="user-name">
													<h5><span>Rebecca Velazquez</span></h5>
													<span>2 hours ago</span>
												</div>
											</div>
											<p class="details-text">Check the System and Application logs in the Event Viewer for warnings or errors that coincide with the times the freezes occur.</p>
										</li>
										<li>
											<div class="ticket-created-user">
												<span class="avatar"><img src="assets/img/avatar/avatar-28.jpg" alt="User Image"></span>
												<div class="user-name">
													<h5><span>Rahul Daviz</span></h5>
													<span>3 hours ago</span>
												</div>
											</div>
											<p class="details-text">Confirm that basic troubleshooting steps have been correctly executed (restarts, updates, antivirus scans).</p>
										</li>
									</ul>
								</div>
								<div class="ticket-chat-footer">
									<form action="ticket-details.php">
										<div class="d-flex justify-content-between align-items-center">
											<input type="text" class="form-control">
											<button type="submit"><i class="la la-arrow-right"></i></button>
										</div>									
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Edit Ticket Modal -->
				<div id="edit_ticket" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Ticket</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Subject</label>
												<input class="form-control" type="text" value="Laptop Issue">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Id</label>
												<input class="form-control" type="text" readonly value="TKT-0001">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Staff</label>
												<select class="select">
													<option>-</option>
													<option selected>Mike Litorus</option>
													<option>John Smith</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<select class="select">
													<option>-</option>
													<option >Delta Infotech</option>
													<option selected>International Software Inc</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<select class="select">
													<option>High</option>
													<option selected>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">CC</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Assignee</label>
												<div class="project-members">
													<a title="John Smith" data-bs-toggle="tooltip" href="#" >
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Followers</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Followers</label>
												<div class="project-members">
													<a title="Richard Miles" data-bs-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</a>
													<a title="John Smith" data-bs-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</a>
													<a title="Mike Litorus" data-bs-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
													</a>
													<a title="Wilmer Deluna" data-bs-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control" rows="4"></textarea>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Upload Files</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Ticket Modal -->
				
				<!-- Delete Ticket Modal -->
				<div class="modal custom-modal fade" id="delete_ticket" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Ticket</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Ticket Modal -->
				
				<!-- Assignee Modal -->
				<div id="assignee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Assign to this task</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add" class="form-control search-input" type="text">
									<button class="btn btn-primary">Search</button>
								</div>
								<div>
									<ul class="chat-user-list">
										<li>
											<a href="#">
												<div class="chat-block d-flex">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Richard Miles</div>
														<span class="designation">Web Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="chat-block d-flex">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">John Smith</div>
														<span class="designation">Android Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="chat-block d-flex">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Jeffery Lalor</div>
														<span class="designation">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Assign</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Assignee Modal -->
				
				<!-- Task Followers Modal -->
				<div id="task_followers" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add followers to this task</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add" class="form-control search-input" type="text">
									<button class="btn btn-primary">Search</button>
								</div>
								<div>
									<ul class="chat-user-list">
										<li>
											<a href="#">
												<div class="chat-block d-flex">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
													</span>
													<div class="media-body media-middle text-nowrap">
														<div class="user-name">Jeffery Lalor</div>
														<span class="designation">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="chat-block d-flex">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-08.jpg" alt="User Image">
													</span>
													<div class="media-body media-middle text-nowrap">
														<div class="user-name">Catherine Manseau</div>
														<span class="designation">Android Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="chat-block d-flex">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
													</span>
													<div class="media-body media-middle text-nowrap">
														<div class="user-name">Wilmer Deluna</div>
														<span class="designation">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Add to Follow</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Task Followers Modal -->
				
            </div>
			<!-- /Page Wrapper -->
           

   </div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>