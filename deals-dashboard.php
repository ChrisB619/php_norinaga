<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Dashboard - HRMS admin template</title>

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
                <div class="page-header mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h3 class="page-title">Deals Dashboard</h3>
                        </div>
                        <div class="col-md-8 float-end ms-auto">
                            <div class="d-flex title-head">
                                <div class="view-icons">
                                    <a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
                                    <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
                                </div>
                                <div class="form-sort">
                                    <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
                                </div>
                                <div class="daterange-picker d-flex">
                                    <div class="form-sort">
                                        <i class="las la-calendar"></i>
                                        <input type="text" class="form-control  date-range bookingrange">
                                    </div>	
                                    <div class="form-sort">
                                        <i class="las la-cubes"></i>
                                        <select class="select">
                                            <option>Deals Dashboard</option>
                                            <option>Leads Dashboard</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- /Page Header -->
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Deals By Stage</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <div class="card-select">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Marketing Pipeline
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Marketing Pipeline
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Sales Pipeline
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Email
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Chats
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Operational
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Last 3 months
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 3 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 6 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 12 months
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div id="deals-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card analytics-card w-100">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Recently Created Contacts<a href="#" class="text-muted"><i class="la la-link ms-1"></i></a></h4>
                                    <div class="dropdown statistic-dropdown">
                                        <div class="card-select">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Last 3 months
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 3 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 6 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 12 months
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive">	
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Deal Name</th>
                                                <th>Stage</th>
                                                <th>Deal Value</th>
                                                <th>Probability</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="deals-details.php">Collins</a></td>
                                                <td>Conversation</td>
                                                <td>$04,51,000</td>
                                                <td>85%</td>
                                                <td><span class="badge bg-inverse-warning">Open</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="deals-details.php">Konopelski</a></td>
                                                <td>Pipeline</td>
                                                <td>$03,12,500</td>
                                                <td>85%</td>
                                                <td><span class="badge bg-inverse-danger">Lost</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="deals-details.php">Adams</a></td>
                                                <td>Won</td>
                                                <td>$04,14,800</td>
                                                <td>80%</td>
                                                <td><span class="badge bg-inverse-success">Won</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="deals-details.php">Schumm</a></td>
                                                <td>Lost</td>
                                                <td>$9,14,400</td>
                                                <td>47%</td>
                                                <td><span class="badge bg-inverse-danger">Lost</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="deals-details.php">Wisozk</a></td>
                                                <td>Follow Up</td>
                                                <td>$11,14,400</td>
                                                <td>98%</td>
                                                <td><span class="badge bg-inverse-danger">Lost</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Lost Deals Stage</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <div class="card-select">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Marketing Pipeline
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Marketing Pipeline
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Sales Pipeline
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Email
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Chats
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Operational
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Last 3 months
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 3 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 6 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 12 months
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="last-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body ">
                                <div class="statistic-header">
                                    <h4>Won Deals Stage</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <div class="card-select">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Marketing Pipeline
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Marketing Pipeline
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Sales Pipeline
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Email
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Chats
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Operational
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Last 3 months
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 3 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 6 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 12 months
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="won-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Deals by Year</h4>
                                    <div class="dropdown statistic-dropdown">
                                        <div class="card-select">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                        Last 3 months
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 3 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 6 months
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            Last 12 months
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="year-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
		<!-- /Main Wrapper -->
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
						<form action="contact-grid.php">
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