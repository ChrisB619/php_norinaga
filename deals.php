<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Deals - HRMS admin template</title>

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
							<div class="col-md-4">
								<h3 class="page-title">Deals</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Deals</li>
								</ul>
							</div>
							<div class="col-md-8 float-end ms-auto">
								<div class="d-flex title-head">
									<div class="view-icons">
										<a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
										<a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
										<a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
									</div>
									<div class="form-sort">
										<a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
									</div>
									<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_deals"><i class="la la-plus-circle"></i> Add Deals</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="filter-filelds" id="filter_inputs">
						<div class="row filter-row">
							<div class="col-xl-2">  
								<div class="input-block mb-3 form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Deal Name</label>
								</div>
							</div>
							<div class="col-xl-2">  
								<div class="input-block mb-3 form-focus focused">
								   <input type="text" class="form-control  date-range bookingrange">
									<label class="focus-label">From - To Date</label>
								</div>
							</div>
							<div class="col-xl-2">  
								<div class="input-block mb-3 form-focus">
									<div class="cal-icon">
										<input class="form-control floating datetimepicker" type="text">
									</div>
									<label class="focus-label">Expected Closed Date</label>
								</div>
						   </div>
						   <div class="col-xl-2"> 
							<div class="input-block mb-3 form-focus select-focus">
								<select class="select floating"> 
									<option>--Select--</option>
									<option>Conversation</option>
									<option>Pipeline</option>
									<option>Won</option>
									<option>Lost</option>
									<option>Follow Up</option>
								</select>
								<label class="focus-label">Stage</label>
							</div>
						</div>
							
							<div class="col-xl-2"> 
								<div class="input-block mb-3 form-focus select-focus">
									<select class="select floating"> 
										<option>--Select--</option>
										<option>Germany</option>
										<option>USA</option>
										<option>Canada</option>
										<option>India</option>
										<option>China</option>
									</select>
									<label class="focus-label">Location</label>
								</div>
							</div>
							<div class="col-xl-2">  
								 <a href="#" class="btn btn-success w-100"> Search </a>  
							</div>     
						 </div>
					</div>
					 <hr>
					 <!-- /Search Filter -->
					<div class="filter-section">
						<ul>
							<li>
								<div class="view-icons">
									<a href="deals.php" class="list-view btn btn-link active"><i class="las la-list"></i></a>
									<a href="deals-kanban.php" class="grid-view btn btn-link"><i class="las la-th"></i></a>
								</div>
							</li>
							<li>
								<div class="form-sort">
									<i class="las la-sort-alpha-up-alt"></i>
									<select class="select">
										<option>Sort By Alphabet</option>
										<option>Ascending</option>
										<option>Descending</option>
										<option>Recently Viewed</option>
										<option>Recently Added</option>
									</select>
								</div>
							</li>
							<li>
								<div class="form-sorts dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="las la-filter me-2"></i>Filter</a>
									<div class="filter-dropdown-menu">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rating<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked>
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<span>5.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<span>4.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>3.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>2.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>1.0</span>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Owner<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked>
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Hendry</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Guillory</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Jami</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Theresa</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Espinosa</h5>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked>
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Promotion</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Rated</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Rejected</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Collab</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Calls</h5>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="filter-reset-btns">
												<a href="#" class="btn btn-light">Reset</a>
												<a href="#" class="btn btn-primary">Filter</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="search-set">
									<div class="search-input">
										<a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
										<div class="dataTables_filter">
											<label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
	
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable contact-table">
									<thead>
										<tr>
											<th class="no-sort"></th>
											<th>Deal Name</th>
											<th>Stage</th>
											<th>Deal Value</th>
											<th>Tags</th>
											<th>Expected Closed Date</th>
											<th>Owner</th>
											<th>Probability</th>
											<th>Status</th>
											<th class="no-sort text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Collins</a>
												</h2>
											</td>
											<td>Conversation</td>
											<td>$04,51,000</td>
											<td><span class="badge badge-soft-info">Promotion</span></td>
											<td>10 Feb 2024</td>
											<td>Hendry</td>
											<td>85%</td>
											<td>
												<span class="badge badge-soft-info">Open</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="#" class="profile-split">Konopelski</a>
												</h2>
											</td>
											<td>Pipeline</td>
											<td>$03,12,500</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>24 Feb 2024</td>
											<td>Guillory</td>
											<td>15%</td>
											<td>
												<span class="badge badge-soft-danger">Lost</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Adams</a>
												</h2>
											</td>
											<td>Won</td>
											<td>$04,14,400</td>
											<td><span class="badge badge-soft-info">Promotion</span></td>
											<td>5 Mar 2024</td>
											<td>Jami</td>
											<td>95%</td>
											<td>
												<span class="badge badge-soft-success">Won</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Schumm</a>
												</h2>
											</td>
											<td>Lost</td>
											<td>$09,14,400</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>17 Mar 2024</td>
											<td>Theresa</td>
											<td>47%</td>
											<td>
												<span class="badge badge-soft-success">Won</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Wisozk</a>
												</h2>
											</td>
											<td>Follow Up</td>
											<td>$11,14,400</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>08 Apr 2024</td>
											<td>Espinosa</td>
											<td>98%</td>
											<td>
												<span class="badge badge-soft-success">Won</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Heller</a>
												</h2>
											</td>
											<td>Pipeline</td>
											<td>$16,11,400</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>20 Apr 2024</td>
											<td>Martin</td>
											<td>14%</td>
											<td>
												<span class="badge badge-soft-success">Won</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Gutkowski</a>
												</h2>
											</td>
											<td>Pipeline</td>
											<td>$78,11,800</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>12 May 2024</td>
											<td>Newell</td>
											<td>78%</td>
											<td>
												<span class="badge badge-soft-info">Open</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Walter</a>
												</h2>
											</td>
											<td>Pipeline</td>
											<td>$09,05,947</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>26 May 2024</td>
											<td>Janet</td>
											<td>47%</td>
											<td>
												<span class="badge badge-soft-danger">Lost</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Hansen</a>
												</h2>
											</td>
											<td>Schedule</td>
											<td>$04,51,000</td>
											<td>
												<span class="badge badge-soft-danger me-2">Collab</span>
												<span class="badge badge-soft-purple">Calls</span>
											</td>
											<td>13 June 2024</td>
											<td>Craig</td>
											<td>25%</td>
											<td>
												<span class="badge badge-soft-success">Won</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2>
													<a href="deals-details.php" class="profile-split">Leuschke</a>
												</h2>
											</td>
											<td>Conversation</td>
											<td>$72,14,078</td>
											<td>
												<span class="badge badge-soft-purple">Calls</span>
											</td>
											<td>28 June 2024</td>
											<td>Daniel</td>
											<td>69%</td>
											<td>
												<span class="badge badge-soft-success">Won</span>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="deals-details.php"><i class="fa-regular fa-eye"></i> Preview</a>
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
			</div>
			<!-- /Page Content -->
			
				
			<!-- /Page Wrapper -->



   </div>
<!-- end main wrapper-->
<!-- Add Deals -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="add_deals" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Add New Deals</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<form action="deals.php">
							<div class="contact-input-set">
								<div class="row">
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6 pipeline-add-col">
										<div class="input-block mb-3">
											<div class="d-flex justify-content-between align-items-center">
												<label class="col-form-label">Pipeline <span class="text-danger">*</span></label>
												<a href="#" class="add-new add-pipeline-btn"><i class="la la-plus-circle me-2"></i>Add New</a>
											</div>
											<select class="select">
												<option>Select</option>
												<option>Sales</option>
												<option>Marketing</option>
												<option>Calls</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Status <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>Open</option>
												<option>Lost</option>
												<option>Won</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Currency <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>$</option>
												<option>€</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Period <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>										
									<div class="col-md-12">
										<div class="input-block tag-with-img mb-3">
											<label class="col-form-label">Contact <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="Label" value="James" >
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Project <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox2" type="text" data-role="tagsinput"  name="Label" value="Divine dran" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-md-12">
										<div class="input-block tag-with-img mb-3">
											<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox3" type="text" data-role="tagsinput"  name="Label" value="James" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Tags <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox4" type="text" data-role="tagsinput"  name="Label" value="Promotion, Rated" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Followup Date <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Source <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>Barry Cuda</option>
												<option>Tressa Wexler</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Priority <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>Highy</option>
												<option>Low</option>
												<option>Medium</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Description <span class="text-danger">*</span></label>
											<textarea class="form-control" rows="5"></textarea>
										</div>
									</div>
									<div class="col-lg-12 text-end form-wizard-button">
										<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
										<button class="btn btn-primary" type="submit">Save Deal</button>
									</div>
								</div>									
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Deals -->

		<!-- Edit Deals -->
		<div class="modal custom-modal fade custom-modal-two modal-padding" id="edit_deals" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Edit Deals</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<form action="deals.php">
							<div class="contact-input-set">
								<div class="row">
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="Adams">
										</div>
									</div>
									<div class="col-md-6 pipeline-add-col">
										<div class="input-block mb-3">
											<div class="d-flex justify-content-between align-items-center">
												<label class="col-form-label">Pipeline <span class="text-danger">*</span></label>
												<a href="#" class="add-new add-pipeline-btn"><i class="la la-plus-circle me-2"></i>Add New</a>
											</div>
											<select class="select">
												<option>Sales</option>
												<option>Marketing</option>
												<option>Calls</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Status <span class="text-danger">*</span></label>
											<select class="select">
												<option>Open</option>
												<option>Lost</option>
												<option>Won</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
											<input class="form-control" type="text" value="5">
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Currency <span class="text-danger">*</span></label>
											<select class="select">
												<option>$</option>
												<option>€</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Period <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="">
										</div>
									</div>	
									<div class="col-lg-3 col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="10">
										</div>
									</div>										
									<div class="col-md-12">
										<div class="input-block tag-with-img mb-3">
											<label class="col-form-label">Contact <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox5" type="text" data-role="tagsinput"  name="Label" value="James" >
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Project <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox6" type="text" data-role="tagsinput"  name="Label" value="Divine dran" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="5 Mar 2024">
										</div>
									</div>	
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="10 Mar 2024">
										</div>
									</div>	
									<div class="col-md-12">
										<div class="input-block tag-with-img mb-3">
											<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox7" type="text" data-role="tagsinput"  name="Label" value="James" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Tags <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox8" type="text" data-role="tagsinput"  name="Label" value="Promotion, Rated" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Followup Date <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="5 Mar 2024">
										</div>
									</div>	
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Source <span class="text-danger">*</span></label>
											<select class="select">
												<option>Barry Cuda</option>
												<option>Tressa Wexler</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Priority <span class="text-danger">*</span></label>
											<select class="select">
												<option>Highy</option>
												<option>Low</option>
												<option>Medium</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Description <span class="text-danger">*</span></label>
											<textarea class="form-control" rows="5"></textarea>
										</div>
									</div>
									<div class="col-lg-12 text-end form-wizard-button">
										<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
										<button class="btn btn-primary" type="submit">Submit</button>
									</div>
								</div>									
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Deals -->

		<!-- Delete Deals -->
		<div class="modal custom-modal fade" id="delete_deals" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-danger">
								<i class="la la-trash-restore"></i>
							</div>
							<h3>Are you sure, You want to delete</h3>
							<p>Deal ”Collins” from your Account</p>
							<div class="col-lg-12 text-center form-wizard-button">
								<a href="#" class="button btn-lights" data-bs-dismiss="modal">Not Now</a>
								<a href="deals.php" class="btn btn-primary">Okay</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Deals -->

		<!-- Export -->
		<div class="modal custom-modal fade modal-padding" id="export" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Export</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<form action="deals.php">
							<div class="row">
								<div class="col-md-12">
									<div class="input-block mb-3">
										<h5 class="mb-3">Export</h5>
										<div class="status-radio-btns d-flex">
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="pdf" name="export-type" checked>
												<label for="pdf">Person</label>
											</div>
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="excel" name="export-type">
												<label for="excel">Organization</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<h4 class="mb-3">Filters</h4>
									<div class="input-block mb-3">
										<label class="col-form-label">Fields <span class="text-danger">*</span></label>
										<select class="select">
											<option>All Fields</option>
											<option>contact</option>
											<option>Company</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-block mb-3">
										<label class="col-form-label">From Date <span class="text-danger">*</span></label>
										<div class="cal-icon">									
											<input class="form-control floating datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-block mb-3">
										<label class="col-form-label">To Date <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control floating datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-lg-12 text-end form-wizard-button">
									<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
									<button class="btn btn-primary" type="submit">Export Now</button>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /Export -->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>