<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Performance Indicator - HRMS admin template</title>

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
                            <h3 class="page-title">Performance Indicator</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Performance</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_indicator"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                        <th class="width-thirty">#</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Added By</th>
                                        <th>Create At</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Web Designer </td>
                                        <td>Designing</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe </a>
                                            </h2>
                                        </td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>IOS Developer </td>
                                        <td>IOS</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                                <a href="profile.php">Mike Litorus </a>
                                            </h2>
                                        </td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Web Designer </td>
                                        <td>Designing</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Smith </a>
                                            </h2>
                                        </td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Web Designer </td>
                                        <td>Designing</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt="User Image"></a>
                                                <a href="profile.php">Jeffrey Warden </a>
                                            </h2>
                                        </td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Web Designer </td>
                                        <td>Designing</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
                                                <a href="profile.php">Wilmer Deluna </a>
                                            </h2>
                                        </td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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

            <!-- Add Performance Indicator Modal -->
            <div id="add_indicator" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Set New Indicator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Designation</label>
                                            <select class="select">
                                                <option>Select Designation</option>
                                                <option>Web Designer</option>
                                                <option>IOS Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="modal-sub-title">Technical</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Customer Experience</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Marketing</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Management</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Administration</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Presentation Skill</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Quality Of Work</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Efficiency</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="modal-sub-title">Organizational</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Integrity</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Professionalism</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Team Work</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Critical Thinking</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Conflict Management</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Attendance</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Ability To Meet Deadline</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
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
            <!-- /Add Performance Indicator Modal -->
            
            <!-- Edit Performance Indicator Modal -->
            <div id="edit_indicator" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Performance Indicator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Designation</label>
                                            <select class="select">
                                                <option>Select Designation</option>
                                                <option selected>Web Designer</option>
                                                <option>IOS Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="modal-sub-title">Technical</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Customer Experience</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option selected>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Marketing</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option selected>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Management</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option selected>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Administration</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option selected>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Presentation Skill</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Quality Of Work</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Efficiency</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                    </div>
                                            <div class="col-sm-6">
                                        <h4 class="modal-sub-title">Organizational</h4>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Integrity</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Professionalism</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option selected>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Team Work</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Critical Thinking</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option selected>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Conflict Management</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option selected>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Attendance</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option selected>Intermediate</option>
                                                <option>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Ability To Meet Deadline</label>
                                            <select class="select">
                                                <option>None</option>
                                                <option>Beginner</option>
                                                <option>Intermediate</option>
                                                <option selected>Advanced</option>
                                                <option>Expert / Leader</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
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
            <!-- /Edit Performance Indicator Modal -->
            
            <!-- Delete Performance Indicator Modal -->
            <div class="modal custom-modal fade" id="delete_indicator" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Performance Indicator List</h3>
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
            <!-- /Delete Performance Indicator Modal -->
        
        </div>
        <!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>