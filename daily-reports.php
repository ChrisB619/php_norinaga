<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Daily Report - HRMS admin template</title>

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
                    <div class="col">
                        <h3 class="page-title">Daily Report</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daily Report</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-primary">PDF</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
                <!-- Content Starts -->
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3><b>101</b></h3>
                                <p>Total Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="text-success"><b>84</b></h3>
                                <p>Today Present</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="text-danger"><b>12</b></h3>
                                <p>Today Absent</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3><b>5</b></h3>
                                <p>Today Left</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Search Filter -->
            <div class="row filter-row mb-4">
                <div class="col-sm-6 col-md-3">  
                    <div class="input-block mb-3 form-focus">
                        <input class="form-control floating" type="text">
                        <label class="focus-label">Employee</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3"> 
                    <div class="input-block mb-3 form-focus select-focus">
                        <select class="select floating"> 
                            <option>Select Department</option>
                            <option>Designing</option>
                            <option>Development</option>
                            <option>Finance</option>
                            <option>Hr & Finance</option>
                        </select>
                        <label class="focus-label">Department</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <div class="input-block mb-3 form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">From</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <div class="input-block mb-3 form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">To</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">  
                    <div class="d-grid">
                        <a href="#" class="btn btn-success"> Search </a>  
                    </div>
                </div>     
            </div>
            <!-- /Search Filter -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Date</th>
                                    <th>Department</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                            <a href="profile.php">John Doe <span>#0001</span></a>
                                        </h2>
                                    </td>
                                    <td>20 Dec 2020</td>
                                    <td>Design</td>
                                    <td class="text-center">
                                        <button class="btn btn-outline-info btn-sm">Week off</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                            <a href="profile.php">Richard Miles <span>#0002</span></a>
                                        </h2>
                                    </td>
                                    <td>20 Dec 2020</td>
                                    <td>Web Developer</td>
                                    <td class="text-center">
                                        <button class="btn btn-outline-danger btn-sm">Absent</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                            <a href="profile.php">John Smith <span>#003</span></a>
                                        </h2>
                                    </td>
                                    <td>20 Dec 2020</td>
                                    <td>Android Developer</td>
                                    <td class="text-center">
                                        <button class="btn btn-outline-info btn-sm">Week off</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                            <a href="profile.php">Mike Litorus <span>#004</span></a>
                                        </h2>
                                    </td>
                                    <td>20 Dec 2020</td>
                                    <td>IOS Developer</td>
                                    <td class="text-center">
                                        <button class="btn btn-outline-info btn-sm">Week off</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                            <a href="profile.php">Wilmer Deluna <span>#005</span></a>
                                        </h2>
                                    </td>
                                    <td>20 Dec 2020</td>
                                    <td>Team Leader</td>
                                    <td class="text-center">
                                        <button class="btn btn-outline-info btn-sm">Week off</button>
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