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
				
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Tickets</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Tickets</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_ticket"><i class="fa-solid fa-plus"></i> Add Ticket</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card-group m-b-30">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">New Tickets</span>
											</div>
											<div>
												<span class="text-success">+10%</span>
											</div>
										</div>
										<h3 class="mb-3">112</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Solved Tickets</span>
											</div>
											<div>
												<span class="text-success">+12.5%</span>
											</div>
										</div>
										<h3 class="mb-3">70</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Open Tickets</span>
											</div>
											<div>
												<span class="text-danger">-2.8%</span>
											</div>
										</div>
										<h3 class="mb-3">100</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Pending Tickets</span>
											</div>
											<div>
												<span class="text-danger">-75%</span>
											</div>
										</div>
										<h3 class="mb-3">125</h3>
										<div class="progress height-five mb-2">
											<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Returned </option>
								</select>
								<label class="focus-label">Status</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option> -- Select -- </option>
									<option> High </option>
									<option> Low </option>
									<option> Medium </option>
								</select>
								<label class="focus-label">Priority</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
						</div>     
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Ticket Id</th>
											<th>Ticket Subject</th>
											<th>Assigned Staff</th>
											<th>Created Date</th>
											<th>Last Reply</th>
											<th>Priority</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="ticket-details.php">#TKT-0001</a></td>
											<td>Laptop Issue</td>
											<td>
												<h2 class="table-avatar">
													<a class="avatar avatar-xs" href="profile.php"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													<a href="#">John Smith</a>
												</h2>
											</td>
											<td>5 Jan 2019 07:21 AM</td>
											<td>5 Jan 2019 11.12 AM</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-danger"></i> High </a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> High</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Low</a>
													</div>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-danger"></i> New 
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Reopened</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> On Hold</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> In Progress</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ticket"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="ticket-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="ticket-details.php">#TKT-0001</a></td>
											<td>Internet Issue</td>
											<td>
												<h2 class="table-avatar">
													<a class="avatar avatar-xs" href="profile.php"><img src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
													<a href="#">Catherine Manseau</a>
												</h2>
											</td>
											<td>5 Jan 2019 07:21 AM</td>
											<td>5 Jan 2019 11.12 AM</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-warning"></i> Medium </a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> High</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Low</a>
													</div>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fa-regular fa-circle-dot text-info"></i> Reopened 
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Open</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Reopened</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> On Hold</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Closed</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> In Progress</a>
														<a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
													</div>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ticket"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="ticket-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Ticket Modal -->
				<div id="add_ticket" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Ticket</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Subject</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Id</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Staff</label>
												<select class="select">
													<option>-</option>
													<option>Mike Litorus</option>
													<option>John Smith</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Client</label>
												<select class="select">
													<option>-</option>
													<option>Delta Infotech</option>
													<option>International Software Inc</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<select class="select">
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">CC</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Assignee</label>
												<div class="project-members">
													<a title="John Smith" data-placement="top" data-bs-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Followers</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
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
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="input-block mb-3">
												<label class="col-form-label">Upload Files</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Ticket Modal -->
				
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
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Subject</label>
												<input class="form-control" type="text" value="Laptop Issue">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Id</label>
												<input class="form-control" type="text" readonly value="TKT-0001">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign Staff</label>
												<select class="select">
													<option>-</option>
													<option selected>Mike Litorus</option>
													<option>John Smith</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
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
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Priority</label>
												<select class="select">
													<option>High</option>
													<option selected>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">CC</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Assign</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Ticket Assignee</label>
												<div class="project-members">
													<a title="John Smith" data-placement="top" data-bs-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Add Followers</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
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
										<div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control"></textarea>
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
				
            </div>
			<!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>