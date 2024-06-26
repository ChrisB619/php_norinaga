<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Salary - HRMS admin template</title>

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
                            <h3 class="page-title">Employee Salary</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Salary</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_salary"><i class="fa-solid fa-plus"></i> Add Salary</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
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
                                <option value=""> -- Select -- </option>
                                <option value="">Employee</option>
                                <option value="1">Manager</option>
                            </select>
                            <label class="focus-label">Role</label>
                        </div>
                   </div>
                   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
                        <div class="input-block mb-3 form-focus select-focus">
                            <select class="select floating"> 
                                <option> -- Select -- </option>
                                <option> Pending </option>
                                <option> Approved </option>
                                <option> Rejected </option>
                            </select>
                            <label class="focus-label">Leave Status</label>
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
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>Employee ID</th>
                                        <th>Email</th>
                                        <th>Join Date</th>
                                        <th>Role</th>
                                        <th>Salary</th>
                                        <th>Payslip</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe <span>Web Designer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0001</td>
                                        <td>johndoe@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Designer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$59698</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                <a href="profile.php">Richard Miles <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0002</td>
                                        <td>richardmiles@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$72000</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Smith <span>Android Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0003</td>
                                        <td>johnsmith@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$48200</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                                <a href="profile.php">Mike Litorus <span>IOS Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0004</td>
                                        <td>mikelitorus@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">IOS Developer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$59698</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
                                                <a href="profile.php">Wilmer Deluna <span>Team Leader</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0005</td>
                                        <td>wilmerdeluna@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$43000</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt="User Image"></a>
                                                <a href="profile.php">Jeffrey Warden <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0006</td>
                                        <td>jeffreywarden@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$45000</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt="User Image"></a>
                                                <a href="profile.php">Bernardo Galaviz <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0007</td>
                                        <td>bernardogalaviz@example.com</td>
                                        <td>1 Jan 2014</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$38400</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
                                                <a href="profile.php">Lesley Grauer <span>Team Leader</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0008</td>
                                        <td>lesleygrauer@example.com</td>
                                        <td>1 Jun 2015</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$75500</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                <a href="profile.php">Jeffery Lalor <span>Team Leader</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0009</td>
                                        <td>jefferylalor@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$73550</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                                <a href="profile.php">Loren Gatlin <span>Android Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0010</td>
                                        <td>lorengatlin@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$55000</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                                                <a href="profile.php">Tarah Shropshire <span>Android Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>FT-0011</td>
                                        <td>tarahshropshire@example.com</td>
                                        <td>1 Jan 2013</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Software Engineer</a>
                                                    <a class="dropdown-item" href="#">Software Tester</a>
                                                    <a class="dropdown-item" href="#">Frontend Developer</a>
                                                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$92400</td>
                                        <td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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
            
            <!-- Add Salary Modal -->
            <div id="add_salary" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Staff Salary</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="salary.php">
                                <div class="row"> 
                                    <div class="col-sm-6"> 
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Select Staff</label>
                                            <select class="select"> 
                                                <option>John Doe</option>
                                                <option>Richard Miles</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label class="col-form-label">Net Salary</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-sm-6"> 
                                        <h4 class="text-primary">Earnings</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Basic</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">DA(40%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">HRA(15%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Conveyance</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Allowance</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Medical  Allowance</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Others</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="add-more">
                                            <a href="#"><i class="fa-solid fa-plus-circle"></i> Add More</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">  
                                        <h4 class="text-primary">Deductions</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">TDS</label>
                                            <input class="form-control" type="text">
                                        </div> 
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">ESI</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">PF</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Leave</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Prof. Tax</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Labour Welfare</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Others</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="add-more">
                                            <a href="#"><i class="fa-solid fa-plus-circle"></i> Add More</a>
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
            <!-- /Add Salary Modal -->
            
            <!-- Edit Salary Modal -->
            <div id="edit_salary" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Staff Salary</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="salary.php">
                                <div class="row"> 
                                    <div class="col-sm-6"> 
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Select Staff</label>
                                            <select class="select"> 
                                                <option>John Doe</option>
                                                <option>Richard Miles</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label class="col-form-label">Net Salary</label>
                                        <input class="form-control" type="text" value="$4000">
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-sm-6"> 
                                        <h4 class="text-primary">Earnings</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Basic</label>
                                            <input class="form-control" type="text" value="$6500">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">DA(40%)</label>
                                            <input class="form-control" type="text" value="$2000">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">HRA(15%)</label>
                                            <input class="form-control" type="text" value="$700">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Conveyance</label>
                                            <input class="form-control" type="text" value="$70">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Allowance</label>
                                            <input class="form-control" type="text" value="$30">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Medical  Allowance</label>
                                            <input class="form-control" type="text" value="$20">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Others</label>
                                            <input class="form-control" type="text">
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">  
                                        <h4 class="text-primary">Deductions</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">TDS</label>
                                            <input class="form-control" type="text" value="$300">
                                        </div> 
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">ESI</label>
                                            <input class="form-control" type="text" value="$20">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">PF</label>
                                            <input class="form-control" type="text" value="$20">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Leave</label>
                                            <input class="form-control" type="text" value="$250">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Prof. Tax</label>
                                            <input class="form-control" type="text" value="$110">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Labour Welfare</label>
                                            <input class="form-control" type="text" value="$10">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Fund</label>
                                            <input class="form-control" type="text" value="$40">
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Others</label>
                                            <input class="form-control" type="text" value="$15">
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
            <!-- /Edit Salary Modal -->
            
            <!-- Delete Salary Modal -->
            <div class="modal custom-modal fade" id="delete_salary" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Salary</h3>
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
            <!-- /Delete Salary Modal -->
            
        </div>
        <!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>