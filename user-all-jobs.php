<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>All Jobs - HRMS admin template</title>

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
                        <h3 class="page-title">All Jobs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item ">Jobs</li>
                            <li class="breadcrumb-item">User Dashboard</li>
                            <li class="breadcrumb-item active">All Jobs</li>
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
                        <li class="nav-item"><a class="nav-link active" href="user-all-jobs.php">All </a></li>
                        <li class="nav-item"><a class="nav-link" href="saved-jobs.php">Saved</a></li>
                        <li class="nav-item"><a class="nav-link" href="applied-jobs.php">Applied</a></li>
                        <li class="nav-item"><a class="nav-link" href="interviewing.php">Interviewing</a></li>
                        <li class="nav-item"><a class="nav-link" href="offered-jobs.php">Offered</a></li>
                        <li class="nav-item"><a class="nav-link" href="visited-jobs.php">Visitied </a></li>
                        <li class="nav-item"><a class="nav-link" href="archived-jobs.php">Archived </a></li>
                    </ul>
                </div>
            </div>  
                
            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">  
                    <div class="input-block mb-3 form-focus select-focus">
                        <select class="select floating"> 
                            <option>Select</option>
                            <option>Development</option>
                            <option>Designing</option>
                            <option>Android</option>
                        </select>
                        <label class="focus-label">Department</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <div class="input-block mb-3 form-focus select-focus">
                        <select class="select floating"> 
                            <option>Select</option>
                            <option>Full Time</option>
                            <option>Part Time</option>
                            <option>Internship</option>
                        </select>
                        <label class="focus-label">Job Type</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3"> 
                    <div class="input-block mb-3 form-focus select-focus">
                        <select class="select floating"> 
                            <option>Select Designation</option>
                            <option>Web Developer</option>
                            <option>Web Designer</option>
                            <option>Android Developer</option>
                            <option>Ios Developer</option>
                        </select>
                        <label class="focus-label">Designation</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <a href="#" class="btn btn-success w-100"> Search </a>  
                </div>
            </div>
            <!-- Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Job Title</th>
                                    <th>Department</th>
                                    <th>Start Date</th>
                                    <th>Expire Date</th>
                                    <th class="text-center">Job Type</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="job-details.php">Web Developer</a></td>
                                    <td>Development</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Full Time
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Open
                                            </a>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="job-details.php">Web Designer</a></td>
                                    <td>Designing</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-success"></i> Part Time
                                            </a>
                                            
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-success"></i> Closed
                                            </a>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="job-details.php">Android Developer</a></td>
                                    <td>Android</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Internship
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Cancelled
                                            </a>
                                        </div>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <!-- /Content End -->
            
        </div>
        <!-- /Page Content -->
        
    </div>
    <!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>