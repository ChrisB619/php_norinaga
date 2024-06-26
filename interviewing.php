<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Interviewing Page - HRMS admin template</title>

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
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Interviewing</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item">Jobs</li>
                            <li class="breadcrumb-item">User Dashboard</li>
                            <li class="breadcrumb-item active">Interviewing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <!-- Content Starts -->
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Solid justified</h4> -->
                    <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                        <li class="nav-item"><a class="nav-link" href="user-dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="user-all-jobs.php">All </a></li>
                        <li class="nav-item"><a class="nav-link" href="saved-jobs.php">Saved</a></li>
                        <li class="nav-item"><a class="nav-link" href="applied-jobs.php">Applied</a></li>
                        <li class="nav-item"><a class="nav-link active" href="interviewing.php">Interviewing</a></li>
                        <li class="nav-item"><a class="nav-link" href="offered-jobs.php">Offered</a></li>
                        <li class="nav-item"><a class="nav-link" href="visited-jobs.php">Visitied </a></li>
                        <li class="nav-item"><a class="nav-link" href="archived-jobs.php">Archived </a></li>
                    </ul>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid nav-justified flex-column">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home">Apptitude</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#menu1">Schedule Interview</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane show active">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Job Title</th>
                                                    <th>Department</th>
                                                    <th class="text-center">Job Type</th>
                                                    <th class="text-center">Aptitude Test</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-danger"></i> Full Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="job-aptitude.php" class="btn btn-primary aptitude-btn"><span>Click Here</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="#">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="job-aptitude.php" class="btn btn-primary aptitude-btn"><span>Click Here</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="#">Web Designing</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="job-aptitude.php" class="btn btn-primary aptitude-btn"><span>Click Here</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Job Title</th>
                                                    <th>Department</th>
                                                    <th class="text-center">Job Type</th>
                                                    <th class="text-center">Aptitude Test</th>
                                                    <th class="text-center">Schedule Interview</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-danger"></i> Full Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled"><span>Selected</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary aptitude-btn" data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Web Designing</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled"><span>Selected</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary aptitude-btn" data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="#">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled"><span>Selected</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary aptitude-btn" data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Content End -->
            
        </div>
        <!-- /Page Content -->
        
    </div>
    <!-- /Page Wrapper -->
   
        <!-- Modal -->
        <div id="selectMyTime" class="modal  custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Select Your Time</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Day1 <span class="text-danger">*</span></label>
                                    <select class="form-control form-select" name="designations" id="designations">
                                        <option value="">11.00am - 11.30am (24 Feb 2020) </option>
                                        <option value="">1.00pm - 1.30pm (25 Feb 2020) </option>
                                        <option value="">3.00pm - 3.30pm (26 Feb 2020) </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-btn delete-action mt-3">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary w-100 cancel-btn">Submit</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary w-100 cancel-btn" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>