<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Reports - HRMS admin template</title>

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
                            <h3 class="page-title">User Report</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">User Reports</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                    <!-- Content Starts -->
                    <!-- Search Filter -->
                <div class="row filter-row">
                    
                    <div class="col-sm-6 col-md-3">  
                        <div class="input-block mb-3 form-focus">
                            <select class="form-control floating select">
                                <option>
                                    Name1
                                </option>
                                <option>
                                    Name2
                                </option>
                            </select>
                            <label class="focus-label">User Role</label>
                        </div>
                    </div>
                
                    <div class="col-sm-6 col-md-3">  
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
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Designation</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                <a href="profile.php">Barry Cuda <span>Global Technologies</span></a>
                                            </h2>
                                        </td>
                                        <td>Global Technologies</td>
                                        <td>barrycuda@example.com</td>
                                        <td>
                                            <span class="badge bg-inverse-info">Client</span>
                                        </td>
                                        <td>CEO</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-21.jpg" alt="User Image"></a>
                                                <a href="profile.php">Daniel Porter <span>Admin</span></a>
                                            </h2>
                                        </td>
                                        <td>Focus Technologies</td>
                                        <td>danielporter@example.com</td>
                                        <td>
                                            <span class="badge bg-inverse-danger">Admin</span>
                                        </td>
                                        <td>Admin Manager</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
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