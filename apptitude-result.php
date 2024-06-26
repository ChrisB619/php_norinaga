<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Aptitude Results - HRMS admin template</title>

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
                        <div class="col-12">
                            <h3 class="page-title">Aptitude Result</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item">Jobs</li>
                                <li class="breadcrumb-item active">Aptitude Result</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Job Title</th>
                                        <th>Department</th>
                                        <th>Category Wise Mark</th>
                                        <th>Total Mark</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe <span>Web Designer</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.php">Web Developer</a></td>
                                        <td>Development</td>
                                        <td>html - <b>1</b><br>Level1 - <b>0</b><br></td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Action pending								</a>	
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Resume selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Resume Rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Aptitude Selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Aptitude rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  video call selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Video call rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Offered</a>
                                                </div> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                <a href="profile.php">Richard Miles <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.php">Web Designer</a></td>
                                        <td>Designing</td>
                                        <td>html - <b>1</b><br>Level1 - <b>0</b><br></td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Action pending								</a>	
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Resume selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Resume Rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Aptitude Selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Aptitude rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  video call selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Video call rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Offered</a>
                                                </div> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Smith <span>Android Developer</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.php">Android Developer</a></td>
                                        <td>Android</td>
                                        <td>html - <b>1</b><br>Level1 - <b>0</b><br></td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Action pending								</a>	
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Resume selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Resume Rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Aptitude Selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Aptitude rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  video call selected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i>  Video call rejected</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i>  Offered</a>
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
                
        </div>
        <!-- /Page Wrapper -->

</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>


</body>

</html>